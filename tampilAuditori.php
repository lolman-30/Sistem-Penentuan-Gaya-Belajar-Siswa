<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/style.css">
   <link rel="icon" href="./img/icon.png">
   <title>AUDITORI || SPPGB</title>
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

   <!-- Auditori -->
   <section id="about">
      <div class="about container">
         <div style="text-align: justify;">
            <h1 class="section-title" style="margin-bottom: 20px;">Auditori</h1>
            <p style="font-size: 30px; color: black; margin-bottom: 20px; font-weight: normal;">Selamat! Gaya belajarmu
               didominasi oleh gaya belajar auditori. Untuk memaksimalkan potensi gaya belajar auditorimu, manfaatkan
               pendengaranmu dengan mendengarkan kuliah, presentasi, atau diskusi secara aktif. Rekam suara saat belajar
               dan dengarkan kembali sebagai metode pemahaman tambahan. Kamu juga bisa membentuk kelompok belajar dengan
               rekan-rekan yang memiliki gaya belajar auditori serupa. Dalam kelompok ini, lakukan diskusi dan
               presentasi lisan untuk saling menguatkan pemahaman. Namun, jangan lupakan untuk terbuka dan belajar dari
               gaya belajar yang lain, sehingga kamu dapat saling melengkapi dan berkembang bersama dalam kelompok
               belajar.</p>
         </div>
      </div>
   </section>
   <!-- End-Auditori -->

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