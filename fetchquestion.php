<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "db_nentuin";

$mysqli = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($mysqli->connect_error) {
    die("Koneksi ke database gagal: " . $mysqli->connect_error);
}

// Ambil data pertanyaan dari tabel "survey"
$query = "SELECT * FROM survey";
$result = $mysqli->query($query);

$data = array();

// Memasukkan data pertanyaan ke dalam array
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Mengirimkan data pertanyaan sebagai respons JSON
header("Content-Type: application/json");
echo json_encode($data);

// Tutup koneksi
$mysqli->close();
?>