<?php
//koneksi
require_once('../src/Api/koneksi.php');

// Proses Update
if (isset($_POST['edit'])) {
   $idUpdate = $_GET['idUpdate'];
   $newQuestion = $_POST['newQuestion'];

   // Query untuk mengupdate data
   $updateQuery = "UPDATE survey SET question = '$newQuestion' WHERE id = '$idUpdate'";
   $updateResult = mysqli_query($conn, $updateQuery);

   if ($updateResult) {
      // Jika update berhasil
      echo "Data berhasil diupdate!";
      header("Location: kelolaKuesioner.php"); // Redirect to kelolaKuesioner.php page
      exit(); // Stop further execution after redirection
   } else {
      // Jika update gagal
      echo "Gagal mengupdate data: " . mysqli_error($conn);
   }
}
?>