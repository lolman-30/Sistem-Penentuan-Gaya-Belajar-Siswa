import pandas as pd
import numpy as np
from sklearn.svm import SVC
from sklearn.preprocessing import StandardScaler
from sklearn.model_selection import train_test_split
from sklearn.metrics import accuracy_score, classification_report, confusion_matrix
import mysql.connector

# Membuat koneksi ke database MySQL
connection = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="db_nentuin"
)

# Membaca data dari tabel database
query = "SELECT V1, V2, V3, V4, V5, V6, V7, V8, V9, V10, V11, V12, A1, A2, A3, A4, A5, A6, A7, A8, A9, A10, A11, A12, K1, K2, K3, K4, K5, K6, K7, K8, K9, K10, K11, K12, Tipe FROM hasil_pilihan"
df = pd.read_sql(query, connection)

# Mengganti label kelas menjadi angka (1, 2, 3) untuk kolom Tipe dan (0, 1, 2) untuk kolom K1-K12
df = df.replace({"Sering": 1, "Kadang-kadang": 2, "Jarang": 3})
df = df.replace({"Visual": 0, "Auditori": 1, "Kinestetik": 2})

# Menentukan fitur dan label
X = df.drop(["Tipe"], axis=1).values
y = df["Tipe"].values

# Melakukan standardisasi fitur
sc = StandardScaler()
X = sc.fit_transform(X)

# Split dataset menjadi train dan test set dengan rasio 70:30
Xtrain, Xtest, ytrain, ytest = train_test_split(X, y, test_size=0.2, random_state=35)

# Membuat objek SVC dengan parameter yang lebih rendah untuk mencegah overfitting
model = SVC(C=1, gamma=0.01, kernel='linear', random_state=42)

# Melatih model dengan data training
model.fit(Xtrain, ytrain)

# Melakukan prediksi pada test set
y_pred = model.predict(Xtest)

# Mengambil semua label unik yang ada dalam data
labels = np.unique(np.concatenate((ytest, y_pred)))

# Mencetak confusion matrix
cm = confusion_matrix(ytest, y_pred, labels=labels)
df_cm = pd.DataFrame(cm, index=labels, columns=labels)
jumlahDataTest = len(ytest)

# Menambahkan label sebenarnya dan hasil prediksi ke dalam DataFrame
print("Label Sebenarnya : ", ytest)
print("Hasil Prediksi   : ", y_pred)

print("Confusion Matrix:")
print(df_cm)
print("Akurasi: ", accuracy_score(ytest, y_pred) * 100, "%")

# Mencetak classification report dengan zero_division=1
print(classification_report(ytest, y_pred, zero_division=1, labels=labels))
