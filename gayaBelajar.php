<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/style.css">
   <link rel="icon" href="./img/icon.png">
   <title>GAYA BELAJAR || SPPGB</title>
   <style>
   p {
      font-size: 20px;
      color: black;
      font-weight: normal;
   }

   .image-container {
      display: flex;
      justify-content: center;
   }

   img {
      width: 300px;
      height: auto;
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
                  <li><a href="hasil.php" data-after="Hasil">Hasil</a></li>\
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
      <div class="about container"
         style="display: grid; grid-template-columns: 1fr; grid-gap: 20px; margin-bottom: -100px;">
         <h1 id="visual" data-after="visual" class="section-title" style="margin-bottom: 30px; text-decoration: none;">
            <a href="#visual" style="color: black;">Visual</a>
         </h1>
         <div class="image-container">
            <img src="./img/visual.jpeg" alt="Gambar Gaya Belajar Visual">
         </div>
         <div style="text-align: justify;">
            <p>Gaya belajar visual adalah jenis belajar di mana individu lebih suka memperoleh dan memproses informasi
               melalui gambar, grafik, diagram, dan visualisasi lainnya. Orang dengan gaya belajar visual memiliki
               kecenderungan untuk lebih memahami dan mengingat materi ketika disajikan dalam bentuk visual yang jelas
               dan terstruktur. Mereka mampu menyerap informasi dengan lebih baik melalui melihat gambar, diagram, peta
               pikiran, atau bagan yang membantu mereka mengorganisir dan menghubungkan konsep. Selain itu, individu
               dengan gaya belajar visual juga sering memperhatikan detail visual, seperti warna, bentuk, dan pola.
               Mereka dapat dengan mudah mengingat dan memvisualisasikan informasi yang mereka lihat, sehingga
               memudahkan pemahaman dan mengingat materi pelajaran. Untuk memaksimalkan gaya belajar visual, individu
               dapat menggunakan metode pembelajaran yang melibatkan penggunaan gambar, diagram, video, dan peta konsep.
               Dengan memahami gaya belajar visual, seseorang dapat meningkatkan kemampuan belajar mereka dengan
               memanfaatkan visualisasi untuk memperkuat pemahaman dan retensi informasi.</p>
         </div>
      </div>
   </section>
   <!-- End-Visual -->

   <!-- Auditori -->
   <section id="about">
      <div class="about container"
         style="display: grid; grid-template-columns: auto 1fr; grid-gap: 20px; margin-bottom: -100px;">
         <div style="text-align: justify;">
            <h1 id="auditori" data-after="auditori" class="section-title"
               style="margin-bottom: 30px; text-decoration: none;"><a href="#auditori"
                  style="color: black;">Auditori</a></h1>
            <div class="image-container">
               <img src="./img/auditori.jpeg" alt="Gambar Gaya Belajar Auditori">
            </div>
            <p>Gaya belajar auditori adalah tipe belajar di mana individu lebih suka mendengarkan informasi secara lisan
               dan memprosesnya melalui pendengaran. Mereka cenderung lebih baik dalam memahami materi ketika dijelaskan
               secara verbal, seperti melalui ceramah, diskusi, atau rekaman audio. Individu dengan gaya belajar
               auditori seringkali dapat mengingat informasi dengan baik melalui pendengaran dan mampu menangkap nuansa
               dan intonasi suara yang digunakan dalam penyampaian informasi. Mereka juga cenderung mengungkapkan diri
               melalui percakapan atau berbicara dengan diri sendiri saat memproses informasi. Untuk memanfaatkan gaya
               belajar auditori, penting bagi individu untuk mendengarkan secara aktif, merekam catatan suara, atau
               berpartisipasi dalam diskusi dan percakapan untuk memperkuat pemahaman mereka terhadap materi yang
               dipelajari. Dengan memahami gaya belajar auditori, seseorang dapat meningkatkan kualitas belajar dan
               retensi informasi dengan cara yang sesuai dengan preferensi belajar mereka.</p>
         </div>
      </div>
   </section>
   <!-- End-Auditori -->

   <!-- Kinestetik -->
   <section id="about">
      <div class="about container" style="display: grid; grid-template-columns: auto 1fr; grid-gap: 20px;">
         <div style="text-align: justify;">
            <h1 id="kinestetik" data-after="kinestetik" class="section-title"
               style="margin-bottom: 30px; text-decoration: none; font-size: 30px;"><a href="#auditori"
                  style="color: black;">Kinestetik</a></h1>
            <div class="image-container">
               <img src="./img/kinestetik.jpeg" alt="Gambar Gaya Belajar Kinestetik">
            </div>
            <p>Gaya belajar kinestetik melibatkan preferensi belajar melalui gerakan fisik dan pengalaman praktis.
               Individu dengan gaya belajar kinestetik belajar lebih baik melalui tindakan langsung, pengalaman nyata,
               dan melibatkan tubuh mereka dalam proses belajar. Mereka membutuhkan interaksi fisik dengan materi
               pelajaran, seperti melakukan percobaan, berpartisipasi dalam simulasi, atau melibatkan diri dalam
               kegiatan praktis. Ketika mereka dapat merasakan dan mengalami materi secara langsung, pemahaman mereka
               meningkat. Individu dengan gaya belajar kinestetik cenderung lebih aktif secara fisik, suka bergerak, dan
               sulit duduk diam dalam situasi belajar yang pasif. Untuk memaksimalkan pembelajaran kinestetik, penting
               bagi mereka untuk terlibat dalam kegiatan yang melibatkan gerakan tubuh, seperti praktik, permainan
               peran, atau membuat model fisik. Dengan memahami gaya belajar kinestetik, individu dapat meningkatkan
               pembelajaran dan pemahaman mereka dengan melibatkan tubuh dan gerakan fisik dalam proses belajar.</p>
         </div>
      </div>
   </section>
   <!-- End-Kinestetik -->

   <!-- Footer Section -->
   <section id="footer">
      <div class="footer container">
         <p>Copyright &copy; 2023 SPPGB. All right reserved</p>
      </div>
   </section>
   <!-- End-Footer Section-->
   <script src="hamburger.js"></script>
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