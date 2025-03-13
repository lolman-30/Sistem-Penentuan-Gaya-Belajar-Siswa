<html>
<script defer>
fetch("run_prediksisvm.php")
   .then(response => response.text())
   .then(data => {
      // Menampilkan hasil di halaman
      // document.getElementById("hasil-prediksi").innerHTML = data;

      window.location.href = "hasil.php"; // Redirect to hasil.php

   })
   .catch(error => {
      console.error("Gagal mengambil hasil prediksi:", error);
   });
</script>
<link rel="stylesheet" href="./css/style.css">
<link rel="icon" href="./img/icon.png">
<title>PROSES || SPPGB</title>

<style>
.loading-icon {
   width: 50px;
   height: 50px;
   border-radius: 50%;
   border: 3px solid #ccc;
   border-top-color: #000;
   animation: spin 1s linear infinite;
}

p {
   font-size: 30px;
   color: black;
   font-weight: normal;
}

@keyframes spin {
   0% {
      transform: rotate(0deg);
   }

   100% {
      transform: rotate(360deg);
   }
}
</style>

<body>
   <!-- Hasil -->
   <section id="about">
      <div class="about container" style="display: flex; justify-content: center; align-items: center;">
         <div style="text-align: justify;">

            <div id="hasil-prediksi">
               <div class="loading-icon"></div>
               <p>LOADING...</p>
            </div>
         </div>
   </section>
   <!-- End-Hasil -->

</body>

</html>