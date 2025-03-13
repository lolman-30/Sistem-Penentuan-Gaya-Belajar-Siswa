<!DOCTYPE html>
<html lang="en">

<head>
   <?php 
   //koneksi
   require_once ('../src/Api/koneksi.php');
   //header
   require_once('header.php');
   ?>
</head>

<body class="nav-md">
   <div class="container body">
      <div class="main_container">
         <!-- Start = Sidebar -->
         <?php 
         //sidebar
         require_once('sidebar.php');
         //navbar atas
         require_once('topNavigation.php');
         ?>

         <!-- Start = isi konten -->
         <div class="right_col" role="main">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="dashboard_graph">

                     <div class="row x_title">
                        <div class="col-md-6">
                           <h3>Kelola SPPGB</h3>
                        </div>
                        <div class="col-md-6">
                           <a href="../../index.php" class="btn btn-primary" style="float:right;" target="_blank">LIHAT
                              WEB</a>
                        </div>
                     </div>
                     <h4 style="color: black;">Pencet tombol prediksi di bawah ini untuk melakukan klasifikasi</h4>
                     <br>
                     <ol class="h5" style="color: black;">
                        <!-- Tambahkan style="color: black;" -->
                        <li>
                           <p>Melakukan klasifikasi setelah tombol berikut ditekan</p>
                           <!-- Tombol Klasifikasi -->
                           <button id="prediksi_btn" class="btn btn-primary">Klasifikasi</button>
                        </li>
                        <br>
                        <li>
                           <p>Menampilkan hasil klasifikasi support vector machine</p>
                           <!-- Tampilan Hasil -->
                           <div id="result_container"
                              style="margin-top: 10px; border: 1px solid #ccc; padding: 10px; font-weight: 700">
                           </div>
                        </li>
                     </ol>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
            <br>
         </div>
      </div>
   </div>

   <!-- Start = Footer -->
   <?php require_once('footer.php'); ?>
   <!-- End = Isi Footer -->

   <!-- Script Prediksi -->
   <script>
   // Event listener for the "Klasifikasi" button
   document.getElementById('prediksi_btn').addEventListener('click', function() {
      // Send an AJAX request to run_prediksisvm.php
      var xhr = new XMLHttpRequest();
      xhr.open('GET', 'run_prediksisvm.php', true);
      xhr.onload = function() {
         if (xhr.status === 200) {
            // Retrieve the prediction result from the response
            var hasilPrediksi = xhr.responseText;

            // Display the prediction result in the "result_container" element
            document.getElementById('result_container').innerHTML = hasilPrediksi;
         }
      };
      xhr.send();
   });
   </script>
</body>

</html>