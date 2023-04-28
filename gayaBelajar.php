<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/style.css">
   <title>Nentuin</title>
</head>

<body>
   <!-- Navbar -->
   <div id="1"></div>
   <script>
   load("navbar.php");

   function load(url) {
      req = new XMLHttpRequest();
      req.open("GET", url, false);
      req.send(null);
      document.getElementById(1).innerHTML = req.responseText;
   }
   </script>

   <!-- Visual Section -->
   <section id="about">
      <div class="about container" style="display: flex; justify-content: center; align-items: center;">
         <div style="text-align: justify;">
            <h1 class="section-title">Visual</h1>
            <div class="section-img">
               <img src="./img/visual1.png" alt="img">
            </div>
            <p style="font-size: 20px; color: black;">Website gaya belajar ini dibuat untuk mengetahui gaya belajar
               individu dan sebagai bahan skripsi dengan menggunakan metode Support Vector Machine (SVM). SVM adalah
               sebuah metode machine learning yang digunakan untuk mengklasifikasikan data menjadi kelompok yang berbeda
               berdasarkan fitur-fitur tertentu. Dalam hal ini, SVM digunakan untuk mengklasifikasikan gaya belajar
               individu berdasarkan jawaban dari beberapa pertanyaan yang diberikan. Hasil dari klasifikasi ini akan
               memberikan informasi tentang gaya belajar individu dan dapat digunakan untuk membantu mereka dalam
               memilih metode belajar yang paling sesuai dengan gaya belajar mereka.</p>
         </div>
      </div>
   </section>
   <!-- End-Visual Section -->

   <!-- Auditori Section -->
   <section id="about">
      <div class="about container" style="display: flex; justify-content: center; align-items: center;">
         <div style="text-align: justify;">
            <h1 class="section-title">Auditori</h1>
            <div class="section-img">
               <img src="./img/auditori1.png" alt="img">
            </div>
            <p style="font-size: 20px; color: black;">Website gaya belajar ini dibuat untuk mengetahui gaya belajar
               individu dan sebagai bahan skripsi dengan menggunakan metode Support Vector Machine (SVM). SVM adalah
               sebuah metode machine learning yang digunakan untuk mengklasifikasikan data menjadi kelompok yang berbeda
               berdasarkan fitur-fitur tertentu. Dalam hal ini, SVM digunakan untuk mengklasifikasikan gaya belajar
               individu berdasarkan jawaban dari beberapa pertanyaan yang diberikan. Hasil dari klasifikasi ini akan
               memberikan informasi tentang gaya belajar individu dan dapat digunakan untuk membantu mereka dalam
               memilih metode belajar yang paling sesuai dengan gaya belajar mereka.</p>
         </div>
      </div>
   </section>
   <!-- End-Auditori Section -->

   <!-- Kinestetik Section -->
   <section id="about">
      <div class="about container" style="display: flex; justify-content: center; align-items: center;">
         <div style="text-align: justify;">
            <h1 class="section-title">Kinestetik</h1>
            <div class="section-img">
               <img src="./img/kinestetik1.png" alt="img">
            </div>
            <p style="font-size: 20px; color: black;">Website gaya belajar ini dibuat untuk mengetahui gaya belajar
               individu dan sebagai bahan skripsi dengan menggunakan metode Support Vector Machine (SVM). SVM adalah
               sebuah metode machine learning yang digunakan untuk mengklasifikasikan data menjadi kelompok yang berbeda
               berdasarkan fitur-fitur tertentu. Dalam hal ini, SVM digunakan untuk mengklasifikasikan gaya belajar
               individu berdasarkan jawaban dari beberapa pertanyaan yang diberikan. Hasil dari klasifikasi ini akan
               memberikan informasi tentang gaya belajar individu dan dapat digunakan untuk membantu mereka dalam
               memilih metode belajar yang paling sesuai dengan gaya belajar mereka.</p>
         </div>
      </div>
   </section>
   <!-- End-Kinestetik Section -->

   <!-- Footer -->
   <div id="4"></div>
   <script>
   load("footer.php");

   function load(url) {
      req = new XMLHttpRequest();
      req.open("GET", url, false);
      req.send(null);
      document.getElementById(4).innerHTML = req.responseText;
   }
   </script>
</body>

</html>