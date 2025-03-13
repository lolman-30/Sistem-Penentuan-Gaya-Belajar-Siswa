<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/style.css">
   <link rel="icon" href="./img/icon.png">
   <title>SPPGB</title>
</head>

<body>
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
   <!-- Hero Section -->
   <section id="hero">
      <div class="hero container">
         <div>
            <h1 id="random-sentence" style="font-size: 4rem;"></h1>
            <a href="kuesioner.php" type="button" class="cta" style="padding: 15px 25px">UJI GAYA BELAJARMU</a>
         </div>
      </div>
   </section>
   <!-- End-Hero Section -->

   <!-- Project Section -->
   <section id="projects">
      <div class="projects container">
         <div class="projects-header">
            <h1 class="section-title">Gaya <span>Belajar</span></h1>
         </div>
         <div class="all-projects">
            <div class="project-item">
               <div class="project-info">
                  <h1 id="visual">Visual</h1>
                  <p>Gaya belajar visual adalah jenis belajar di mana individu lebih suka memperoleh dan memproses
                     informasi melalui gambar, grafik, diagram, dan visualisasi lainnya. Orang dengan gaya belajar
                     visual memiliki kecenderungan untuk lebih memahami dan mengingat materi ketika disajikan dalam
                     bentuk visual yang jelas dan terstruktur.</p>
                  <h2><a href="gayaBelajar.php#visual" class="selengkapnya" style="color: white;">Selengkapnya...</a>
                  </h2>
               </div>

               <div class="project-img">
                  <img src="./img/visual.jpeg" alt="img">
               </div>
            </div>
            <div class="project-item">
               <div class="project-info">
                  <h1 id="auditori">Auditori</h1>
                  <p>Gaya belajar auditori adalah tipe belajar di mana individu lebih suka mendengarkan informasi secara
                     lisan dan memprosesnya melalui pendengaran. Mereka cenderung lebih baik dalam memahami materi
                     ketika dijelaskan secara verbal, seperti melalui ceramah, diskusi, atau rekaman audio.</p>
                  <h2><a href="gayaBelajar.php#auditori" class="selengkapnya" style="color: white;">Selengkapnya...</a>
                  </h2>
               </div>

               <div class="project-img">
                  <img src="./img/auditori.jpeg" alt="img">
               </div>
            </div>
            <div class="project-item">
               <div class="project-info">
                  <h1 id="kinestetik">Kinestetik</h1>
                  <p>Gaya belajar kinestetik melibatkan preferensi belajar melalui gerakan fisik dan pengalaman praktis.
                     Individu dengan gaya belajar kinestetik belajar lebih baik melalui tindakan langsung, pengalaman
                     nyata, dan melibatkan tubuh mereka dalam proses belajar.</p>
                  <h2><a href="gayaBelajar.php#kinestetik" class="selengkapnya"
                        style="color: white;">Selengkapnya...</a></h2>
               </div>
               <div class="project-img">
                  <img src="./img/kinestetik.jpeg" alt="img">
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- End-Project Section -->

   <!-- About Section -->
   <section id="about">
      <div class="about container" style="display: flex; justify-content: center; align-items: center;">
         <div style="text-align: justify;">
            <h1 class="section-title" style="margin-bottom: 20px;">Tentang</h1>
            <p style="font-size: 20px; color: black;">Website menentukan gaya belajar ini dibuat untuk mengetahui gaya
               belajar mereka dan sebagai bahan skripsi dengan menggunakan metode Support Vector Machine (SVM). SVM
               adalah sebuah metode metode machine learning yang digunakan untuk mengklasifikasikan data menjadi
               kelompok yang berbeda berdasarkan fitur-fitur tertentu. Dalam hal ini, SVM digunakan dalam gaya belajar
               untuk mengklasifikasikan gaya belajar individu berdasarkan jawaban dari beberapa pertanyaan yang
               diberikan. Jawaban tentang gaya belajar tersebut dapat digunakan memasukkan siswa ke dalam kelas yang
               sesuai dengan gaya belajar mereka. kemudian, penelitian dapat dilakukan untuk membandingkan efektivitas
               pembelajaran antara gaya belajar satu dengan yang lain.</p>
         </div>
      </div>
   </section>
   <!-- End-About Section -->

   <!-- Footer Section -->
   <section id="footer">
      <div class="footer container">
         <p>Copyright &copy; 2023 SPPGB. All right reserved</p>
      </div>
   </section>
   <!-- End-Footer Section-->
   <script src="hamburger.js"></script>
   <script>
   // Daftar kalimat acak
   var sentences = [
      "Barang siapa bersungguh-sungguh, maka dia akan mendapatkan kesuksesan.",
      "Kesuksesan adalah hasil dari kerja keras dan ketekunan.",
      "Setiap langkah kecil adalah langkah menuju kesuksesan.",
      "Kesuksesan dimulai dari tekad yang kuat.",
      "Jika Anda tidak pernah mencoba, Anda tidak akan pernah tahu apa yang bisa dicapai.",
      "Kesuksesan adalah perjalanan, bukan tujuan akhir.",
      "Berpikirlah positif, dan kesuksesan akan mengikuti.",
      "Kesuksesan adalah pilihan, jadi pilihlah dengan bijak.",
      "Kesuksesan adalah kombinasi dari kerja keras dan keberuntungan.",
      "Hidup adalah petualangan, jadilah pahlawan dalam perjalananmu menuju kesuksesan."
   ];

   // Mendapatkan elemen h1 dengan id 'random-sentence'
   var randomSentenceElement = document.getElementById('random-sentence');

   // Memilih kalimat acak dari daftar dan mengubah isi elemen h1
   randomSentenceElement.innerHTML = sentences[Math.floor(Math.random() * sentences.length)];
   </script>
</body>

</html>