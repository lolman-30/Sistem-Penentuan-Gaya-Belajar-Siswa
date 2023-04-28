<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/style.css">
   <title>KUESIONER || NENTUIN</title>
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

   <!-- Petunjuk Section -->
   <section id="about">
      <div class="about container" style="display: flex; justify-content: center; align-items: center;">
         <div style="text-align: justify;">
            <h1 class="section-title">Petunjuk <span>Umum</span></h1>
            <p>1. Kuesioner ini tidak ada kaitannya atau pengaruhnya terhadap nilai anda dan tidak ada jawaban yang
               salah, semua yang dipilih adalah benar.</p>
            <p>2. Tes gaya belajar ini tidak ada waktu kerjakan dengan santai.</p>
            <p>3. Pilih salah satu jawaban yang benar-benar menggambarkan keadaan diri anda.</p>
            <p>4. Jika anda keluar tes naka jawaban yang sebelumnya di isi akan hilang.</p>
            <p>5. Hasil dari tes dapat dilihat jika anda sudah mengerjakan semua tes yang ada.</p>
         </div>
         <br><br>
         <div style="text-align: center;">
            <button class="btn" onclick="window.location.href='pertanyaan.php'">Mulai Mengerjakan</button>
         </div>
      </div>
   </section>
   <!-- End-Petunjuk Section -->

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