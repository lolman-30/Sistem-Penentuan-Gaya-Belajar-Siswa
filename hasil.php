<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/style.css">
   <link rel="icon" href="./img/icon.png">
   <title>HASIL || SPPGB</title>
   <style>
   .loading-icon {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      border: 3px solid #ccc;
      border-top-color: #000;
      animation: spin 1s linear infinite;
   }

   p {
      font-size: 20px;
      color: black;
      font-weight: normal;
   }

   @keyframes spin {
      0% {
         transform: rotate(0deg);
      }

      100% {
         transform: rotate(360deg);
      }
   }
   </style>
</head>

<body>
   <!-- Header -->
   <section id="header">
      <div class="header container">
         <div class="nav-bar">
            <div class="brand">
               <a href="index.php">
                  <h1>S<span>P</span>P<span>G</span>B</h1>
               </a>
            </div>
            <div class="nav-list">
               <div class="hamburger">
                  <div class="bar"></div>
               </div>
               <ul>
                  <li><a href="gayaBelajar.php" data-after="gayaBelajar">Gaya Belajar</a></li>
                  <li><a href="kuesioner.php" data-after="Kuesioner">Kuesioner</a></li>
                  <li><a href="hasil.php" data-after="Hasil">Hasil</a></li>
                  <li>
                     <?php
                     session_start();
                     if (isset($_SESSION['status'])) {
                        echo '<a href="./pengguna/siswa/index.php" data-after="Akun">Akun</a>';
                     } else {
                        echo '<a href="login.php" data-after="Masuk">Masuk</a>';
                     }
                     ?>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <!-- End Header -->

   <!-- Hasil -->
   <section id="about">
      <div class="about container" style="display: flex; justify-content: center; align-items: center;">
         <div style="text-align: justify;">
            <?php

// Create a connection to the MySQL database
$connection = mysqli_connect("localhost", "root", "", "db_nentuin");

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['status']) || $_SESSION['status'] !== "login") {
   // Jika belum login, tampilkan pesan peringatan
   echo '<p class="warning">Anda harus login terlebih dahulu.</p>';
} else {
   // Ambil data dari tabel 'hasil' untuk pengguna yang sudah login
   $query = "SELECT hasil FROM hasil ORDER BY id DESC LIMIT 1";
   $result = mysqli_query($connection, $query);

   // Periksa apakah kueri berhasil
   if ($result && mysqli_num_rows($result) > 0) {
      // Ambil baris pertama dari hasil kueri
      $row = mysqli_fetch_assoc($result);
      $hasilPrediksi = $row['hasil'];

      // Periksa user_level untuk menampilkan hasil berdasarkan hak akses
      if ($_SESSION['user_level'] === "siswa") {
         // Tampilkan hasil untuk siswa
         echo '<p>Hasil prediksi gaya belajar siswa: ' . $hasilPrediksi . '</p>';

         // Masukkan hasil ke tabel 'hasil_pilihan' untuk pengguna dengan tingkatan 'siswa'
         $userId = $_SESSION['idUsers']; // Anggap 'idUsers' adalah variabel sesi yang berisi ID pengguna

         // Saring data input (jika diperlukan) sebelum memasukkannya ke dalam database
         $hasilPrediksi = mysqli_real_escape_string($connection, $hasilPrediksi);

         // Masukkan data ke tabel 'hasil_pilihan'
         $insertQuery = "INSERT INTO hasil_pilihan (idUsers, target) VALUES ('$userId', '$hasilPrediksi')";
         if (mysqli_query($connection, $insertQuery)) {
            echo '<p>Hasil berhasil disimpan di tabel hasil_pilihan.</p>';
         } else {
            echo '<p>Gagal menyimpan hasil di tabel hasil_pilihan.</p>';
         }
      } else if ($_SESSION['user_level'] === "guru" || $_SESSION['user_level'] === "admin") {
         // Tampilkan peringatan untuk guru dan admin
         echo '<p>Silahkan menggunakan uji coba yang disediakan.</p>';
      } else {
         // Tampilkan peringatan untuk user_level lainnya (jika ada)
         echo '<p>Anda tidak memiliki hak akses untuk melihat hasil prediksi.</p>';
      }

      // Redirect to the appropriate HTML page based on the prediction result
      if ($hasilPrediksi === 'Visual') {
         header("Location: tampilVisual.php");
         exit;
      } else if ($hasilPrediksi === 'Auditori') {
         header("Location: tampilAuditori.php");
         exit;
      } else if ($hasilPrediksi === 'Kinestetik') {
         header("Location: tampilKinestetik.php");
         exit;
      } else {
         // If the prediction result is not one of the expected values, display an error message
         echo "Hasil prediksi tidak valid.";
      }
   } else {
      // If no result found for the user, display a message
      echo '<div id="hasil-prediksi">
               <p>Kamu belum sebaiknya mengerjakan kuesioner terlebih dahulu.</p>
            </div>';
   }

   // Free the result set
   mysqli_free_result($result);
}

// Close the connection
mysqli_close($connection);
?>
         </div>
      </div>
   </section>
   <!-- End-Hasil -->

   <!-- Footer Section -->
   <section id="footer">
      <div class="footer container">
         <p>Copyright &copy; 2023 SPPGB. All right reserved</p>
      </div>
   </section>
   <!-- End-Footer Section-->
   <script src="hamburger.js"></script>
</body>

</html>