<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>NAVBAR || NENTUIN</title>
   <link rel="stylesheet" href="./css/navbar.css">
</head>

<body>
   <!-- Navbar -->
   <section id="navbar">
      <div class="navbar container">
         <div class="nav-bar">
            <div class="brand">
               <a href="index.html">
                  <h1>N<span>en</span>tu<span>in</span></h1>
               </a>
            </div>
            <div class="nav-list">
               <div class="hamburger">
                  <div class="bar"></div>
               </div>
               <ul>
                  <li><a href="gayaBelajar.php" data-after="gayaBelajar">Gaya Belajar</a></li>
                  <li><a href="kuesioner.php" data-after="kuesioner">Kuesioner</a></li>
                  <li><a href="hasil.php" data-after="hasil">Hasil</a></li>
                  <li><a href="rekap.php" data-after="rekapData">Rekap Data</a></li>
                  <li><a href="akun.html" id="akun" data-after="akun">Akun</a></li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <!-- End navbar -->
   <script src="./app.js"></script>
   <script>
   // Ambil elemen anchor dengan id " akun" 
   var akunLink = document.getElementById("akun");
   // Cek apakah pengguna sudah login dan registrasi
   var isLoggedIn = false;
   // Ganti dengan logika cek login dan registrasi

   // Fungsi untuk mengarahkan ke halaman login
   function redirectToLogin() {
      window.location.href = "login.php";
      // Ganti dengan halaman login yang sebenarnya
   } // Fungsi untuk mengarahkan ke halaman registrasi 
   function redirectToRegistrasi() {
      window.location.href = "registrasi.php";
      // Ganti dengan halaman registrasi yang sebenarnya 
   } // Fungsi untuk mengarahkan ke halaman akun.html

   function redirectToAkun() {
      window.location.href = "akun.html";
      // Ganti dengan halaman akun.html yang sebenarnya
   } // Tambahkan event listener untuk klik pada link akun
   akunLink.addEventListener("click", function() {
      if (isLoggedIn) {
         redirectToAkun();
      } else {
         redirectToLogin();
      }
   }); // Jika belum login dan registrasi, arahkan ke halaman login atau registrasi 
   if (!isLoggedIn) {
      redirectToLogin();
   }
   </script>
</body>

</html>