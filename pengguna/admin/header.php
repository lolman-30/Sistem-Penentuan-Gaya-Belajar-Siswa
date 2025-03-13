<html>

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" type="image/png" href="../src/assets/images/icon.png">
   <title>SPPGB || ADMIN</title>

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Font Awesome -->
   <link href="../src/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
   <!-- Custom Theme Style -->
   <link href="../src/assets/css/custom.min.css" rel="stylesheet">
   <?php
   session_start();
   
   // cek apakah user telah login, jika belum login maka di alihkan ke halaman login
   if($_SESSION['status'] !="login"){
      header("location:../../Login.php");
   }
   ?>
</head>

</html>