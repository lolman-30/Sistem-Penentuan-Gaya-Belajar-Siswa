<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="./css/pertanyaan.css" />
   <link rel="stylesheet" href="./css/style.css">
   <link rel="icon" href="./img/icon.png">
   <title>Pertanyaan</title>
</head>

<body>
   <div class="container">
      <div class="pertanyaan-siswa">
         <div class="progress">
            <div class="progress-bar">
               <!-- buatkan progress bar -->
            </div>
         </div>
         <h1 class="title">Soal Gaya Belajar ?</h1>
         <div class="button-pilih">
            <button class="option-text">Option 1</button>
         </div>
         <div class="button-pilih">
            <button class="option-text">Option 2</button>
         </div>
         <div class="button-pilih">
            <button class="option-text">Option 3</button>
         </div>
         <div class="button-pilih2">
            <button class="selanjutnya">Selanjutnya</button>
         </div>
         <div class="button-pilih3">
            <button class="keluar">Keluar</button>
         </div>
      </div>
   </div>
   <script type="module" src="pertanyaan.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
   <script>
   document.querySelector('.keluar').addEventListener('click', function() {
      Swal.fire({
         icon: 'error',
         title: 'Apakah Anda yakin ingin meninggalkan kuesioner ini?',
         text: "Perhatikan bahwa kuesioner yang Anda kerjakan akan hilang.",
         showDenyButton: true,
         confirmButtonText: 'Ya',
         denyButtonText: 'Tidak',
      }).then((result) => {
         if (result.isConfirmed) {
            // Jika memilih Ya, kembali ke tampilan kuesioner.php
            window.location.href = 'kuesioner.php';
         } else if (result.isDenied) {
            // Jika memilih Tidak, lanjut mengerjakan dan tutup pop-up
            // Swal.fire('Teruskan mengerjakan!', '', 'info');
         }
      });
   });
   </script>
   <script>
   // Mendapatkan semua tombol di dalam elemen dengan kelas "button-pilih"
   var buttons = document.querySelectorAll('.button-pilih button');

   // Menambahkan event listener pada setiap tombol
   buttons.forEach(function(button) {
      button.addEventListener('click', function() {
         // Menghapus kelas "active" dari semua tombol
         buttons.forEach(function(btn) {
            btn.classList.remove('active');
         });

         // Menambahkan kelas "active" pada tombol yang diklik
         this.classList.add('active');
      });
   });

   // Mendapatkan tombol "Selanjutnya"
   var selanjutnyaButton = document.querySelector('.selanjutnya');

   // Menambahkan event listener pada tombol "Selanjutnya"
   selanjutnyaButton.addEventListener('click', function() {
      // Menghapus kelas "active" dari semua tombol
      buttons.forEach(function(btn) {
         btn.classList.remove('active');
      });
   });
   </script>
</body>

</html>