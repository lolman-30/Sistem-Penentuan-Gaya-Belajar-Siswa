<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/style.css">
   <link rel="icon" href="./img/icon.png">
   <title>VISUAL || SPPGB</title>
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

   <!-- Visual -->
   <section id="about">
      <div class="about container">
         <div style="text-align: justify;">
            <h1 class="section-title" style="margin-bottom: 20px;">Visual</h1>
            <p style="font-size: 30px; color: black; margin-bottom: 20px; font-weight: normal;">Selamat! Gaya belajarmu
               didominasi oleh gaya belajar visual. Untuk memaksimalkan potensi gaya belajar visualmu, manfaatkan
               diagram, grafik, dan visualisasi untuk memahami konsep dengan lebih baik. Selain itu, kamu bisa membentuk
               kelompok belajar dengan rekan-rekan yang juga memiliki gaya belajar visual. Dalam kelompok ini, saling
               berbagi ide dan membuat presentasi visual dapat membantu memperkuat pemahaman. Tetapi, jangan lupakan
               juga untuk terbuka dan belajar dari gaya belajar yang lain, sehingga kamu bisa saling melengkapi dan
               berkembang bersama dalam kelompok belajar.</p>
         </div>
      </div>
   </section>
   <!-- End-Visual -->

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