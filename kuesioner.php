<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/style.css">
   <link rel="icon" href="./img/icon.png">
   <title>KUESIONER || SPPGB</title>
   <style>
   p {
      font-size: 20px;
      color: black;
      font-weight: normal;
   }

   .warning {
      text-align: center;
   }

   ol {
      text-align: center;
      padding-left: 0;
      margin: 0 auto;
      max-width: 800px;
      padding: 0 20px;
   }

   @media (max-width: 768px) {
      ol {
         padding-left: 20px;
         max-width: 450px;
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

   <!-- Petunjuk Section -->
   <section id="kuesioner">
      <div class="kuesioner container">
         <div>
            <h1 class="section-title" style="margin-bottom: 40px;">Petunjuk <span>Umum</span></h1>
            <ol style="list-style-type: decimal; font-size: 15px; text-align: justify; font-weight: 600">
               <li>
                  <p style="font-weight: 600">Kuesioner ini tidak ada kaitannya atau pengaruhnya terhadap nilai anda dan
                     tidak ada jawaban yang
                     salah, semua yang dipilih adalah benar.
                  </p>
               </li>
               <li>
                  <p style="font-weight: 600">Tes gaya belajar ini tidak ada waktu kerjakan dengan santai.</p>
               </li>
               <li>
                  <p style="font-weight: 600">Pilih salah satu jawaban yang benar-benar menggambarkan keadaan diri anda.
                  </p>
               </li>
               <li>
                  <p style="font-weight: 600">Jika anda keluar tes maka jawaban yang sebelumnya diisi akan hilang.</p>
               </li>
               <li>
                  <p style="font-weight: 600">Hasil dari tes dapat dilihat jika anda sudah mengerjakan semua tes yang
                     ada.</p>
               </li>
            </ol>
         </div>
         <br><br>
         <?php

         // Cek status login
         if (!isset($_SESSION['status']) || $_SESSION['status'] !== "login") {
            // Jika belum login, tampilkan peringatan
            echo '<p class="warning" style="font-size: 15px; color: black; font-weight: normal;">ANDA HARUS LOGIN UNTUK DAPAT MEMULAI MENGERJAKAN.</p>';
         }
         // Cek status login
         if (isset($_SESSION['status']) && $_SESSION['status'] === "login") {
            echo '<button class="btn" onclick="redirectToPertanyaan()">Mulai Mengerjakan</button>';
         } else {
            echo '<a href="login.php" class="btn">Silahkan Login</a>';
         }
         ?>
      </div>
   </section>
   <!-- End-Petunjuk Section -->

   <!-- Footer Section -->
   <section id="footer">
      <div class="footer container">
         <p>Copyright &copy; 2023 SPPGB. All right reserved</p>
      </div>
   </section>
   <!-- End-Footer Section-->
   <script src="hamburger.js"></script>
   <script>
   function redirectToPertanyaan() {
      <?php
      // Cek status login sebelum mengarahkan pengguna ke halaman pertanyaan
      if (isset($_SESSION['status']) && $_SESSION['status'] === "login") {
         echo 'window.location.href = "pertanyaan.php";';
      }
      ?>
   }
   </script>
   <script>
   // Event listener untuk hamburger menu
   const hamburger = document.querySelector('#navbar .nav-bar .nav-list .hamburger');
   const mobile_menu = document.querySelector('#navbar .nav-bar .nav-list ul');

   hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('active');
      mobile_menu.classList.toggle('active');
   });

   // Event listener untuk scroll
   const header = document.querySelector('#navbar .navbar');
   document.addEventListener('scroll', () => {
      var scroll_position = window.scrollY;
      if (scroll_position > 250) {
         header.style.backgroundColor = "#29323c";
      } else {
         header.style.backgroundColor = "transparent";
      }
   });

   // Event listener untuk menu item
   const menu_item = document.querySelectorAll('#navbar .nav-bar .nav-list ul li a');
   menu_item.forEach((item) => {
      item.addEventListener('click', () => {
         hamburger.classList.remove('active');
         mobile_menu.classList.remove('active');
      });
   });
   </script>
</body>

</html>