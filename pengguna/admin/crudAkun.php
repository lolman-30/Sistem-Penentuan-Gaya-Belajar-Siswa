<?php
//koneksi
require_once('../src/Api/koneksi.php');

// Proses Update
if (isset($_POST['edit'])) {
   $idUpdate = $_POST['idUpdate'];
   $newNama = $_POST['nama'];
   $newKelas = $_POST['kelas'];
   $newJenisKelamin = $_POST['jenis_kelamin'];
   $newUsername = $_POST['username'];
   $newPassword = $_POST['password'];

   // Enkripsi password menggunakan password_hash()
   $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

   // Query untuk mengupdate data
   $updateQuery = "UPDATE users SET nama = '$newNama', kelas = '$newKelas', jenis_kelamin = '$newJenisKelamin', username = '$newUsername', password = '$hashedPassword' WHERE idUsers = '$idUpdate'";
   $updateResult = mysqli_query($conn, $updateQuery);

   if ($updateResult) {
      // Jika update berhasil
      echo "Data berhasil diupdate!";
      header("Location: kelolaAkun.php"); // Redirect to kelolaAkun.php page
      exit(); // Stop further execution after redirection
   } else {
      // Jika update gagal
      echo "Gagal mengupdate data: " . mysqli_error($conn);
   }
}
?>