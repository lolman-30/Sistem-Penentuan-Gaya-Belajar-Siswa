import pandas as pd
import mysql.connector
import json
from sklearn.svm import SVC
from sklearn.model_selection import train_test_split, cross_val_score
from sklearn.preprocessing import StandardScaler

def prediksi_dan_simpan_hasil():
    # Membaca data latih dari file Excel
    data_latih = pd.read_excel('data-train.xlsx')

    # Membagi data latih menjadi fitur dan label
    X = data_latih.drop('Tipe', axis=1)
    y = data_latih['Tipe']

    # Melakukan preprocessing pada data
    sc = StandardScaler()
    X = sc.fit_transform(X)

    # Melatih model SVM dengan seluruh data latih
    model = SVC(C=1, gamma=0.01, kernel='linear', random_state=42)
    model.fit(X, y)

    # Menghitung akurasi model dengan validasi silang
    accuracy = cross_val_score(model, X, y, cv=5).mean()

    # Create a connection to the MySQL database
    connection = mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="db_nentuin"
    )

    # Read data for hasil_tertinggi from the table
    query = "SELECT V1, V2, V3, V4, V5, V6, V7, V8, V9, V10, V11, V12, A1, A2, A3, A4, A5, A6, A7, A8, A9, A10, A11, A12, K1, K2, K3, K4, K5, K6, K7, K8, K9, K10, K11, K12 FROM hasil_pilihan  ORDER BY id DESC LIMIT 1"
    data_hasil_tertinggi = pd.read_sql(query, connection)

    # Query untuk mendapatkan satu ID terakhir dari tabel hasil
    query2 = "SELECT id FROM hasil_pilihan ORDER BY id DESC LIMIT 1"
    id_hasil_pilihan = pd.read_sql(query2, connection)
    last_idhasilPilihan = id_hasil_pilihan['id'][0] if not id_hasil_pilihan.empty else 0
    id_last_int = int(last_idhasilPilihan)
    # Close the connection to the database
    connection.close()

    # Preprocess the data
    data_hasil_tertinggi = data_hasil_tertinggi.replace(
        {"Sering": 1, "Kadang-kadang": 2, "Jarang": 3})
    data_hasil_tertinggi = sc.transform(data_hasil_tertinggi)

    # Memprediksi kelas hasil tertinggi
    hasil_tertinggi = model.predict(data_hasil_tertinggi)

    # Membuat dictionary untuk mengubah angka ke label kelas
    kelas_dict = {0: 'Visual', 1: 'Auditori', 2: 'Kinestetik'}

    # Mengubah hasil prediksi menjadi label kelas
    hasil_tertinggi_label = [kelas_dict[kelas] for kelas in hasil_tertinggi]

    # Create a connection to the MySQL database
    connection = mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="db_nentuin"
    )

    # Membuat cursor untuk menjalankan query
    cursor = connection.cursor()

    # Query untuk menyimpan hasil kelas tertinggi, akurasi, dan ID ke tabel "hasil"
    insert_query = "INSERT INTO hasil (hasil, akurasi, id_hasilPilihan) VALUES (%s, %s, %s)"
    values = (', '.join(hasil_tertinggi_label), accuracy, id_last_int)
    cursor.execute(insert_query, values)

    # Melakukan commit perubahan ke database
    connection.commit()

    # Menutup cursor dan koneksi ke database
    cursor.close()
    connection.close()

    return accuracy


def main():
    print("Perhitungan sudah selesai, silakan refresh kembali browser Anda :)")
    accuracy = prediksi_dan_simpan_hasil()


if __name__ == "__main__":
    main()
