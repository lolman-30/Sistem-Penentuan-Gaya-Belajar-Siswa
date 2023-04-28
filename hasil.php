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

   <!-- Petunjuk Section -->
   <section id="about">
      <div class="about container" style="display: flex; justify-content: center; align-items: center;">
         <div style="text-align: justify;">
            <h1 class="section-title">Hasil</h1>
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