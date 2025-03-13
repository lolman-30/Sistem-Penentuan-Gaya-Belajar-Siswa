<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link rel="stylesheet" href="./css/login.css">
   <link rel="icon" href="./img/icon.png">
   <title>LOGIN || SPPGB</title>
   <style>
   .toggle-password {
      position: absolute;
      top: 35%;
      right: 3vh;
      transform: translateY(-50%);
      cursor: pointer;
      font-size: 24px;
   }

   .input-field {
      position: relative;
   }

   .password-field {
      position: relative;
   }
   </style>
</head>

<body>
   <?php
  session_start();
  // Establish a database connection
  $host = "localhost";
  $database = "db_nentuin";
  $username = "root";
  $password = "";

  $conn = mysqli_connect($host, $username, $password, $database);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Handle form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the submitted password using MD5
    $hashedPassword = md5($password);

    // Query the database for a matching record in user table (for admin and guru)
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$hashedPassword'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_assoc($result);
      $userLevel = $row['users_level'];

      // Set session variables
      $_SESSION['idUsers'] = $row['idUsers'];
      $_SESSION['status'] = "login";
      $_SESSION['username'] = $username;

      // Show success message using SweetAlert2
      echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
      echo "<script>
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Login berhasil',
          showConfirmButton: false,
          timer: 500
        }).then(() => {
          window.location.href = './pengguna/" . ($userLevel == 'admin' ? "admin/index.php" : "guru/index.php") . "';
        });
      </script>";
    } else {
      // Query the database for a matching record in users table (for siswa)
      $query = "SELECT * FROM users WHERE username = '$username' AND password = '$hashedPassword'";
      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $userLevel = $row['users_level'];
        $namaSiswa = $row['nama'];

        // Set session variables
        $_SESSION['idUsers'] = $row['idUsers'];
        $_SESSION['status'] = "login";
        $_SESSION['username'] = $username;

        // Show success message using SweetAlert2
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
        echo "<script>
          Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Login berhasil',
            showConfirmButton: false,
            timer: 500
          }).then(() => {
            window.location.href = './index.php?nama=" . urlencode($namaSiswa) . "';
          });
        </script>";
      } else {
        // Authentication failed, redirect back to the login page with an error message
        $error = "Username atau Password salah, coba cek kembali";
      }
    }
  }
  ?>

   <h1 class="title">Login</h1>
   <div class="screen">
      <div class="overlap-group1">
         <div class="masukkan-akun-anda">Masukkan akun Anda</div>
         <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username-username" class="input-label">Username</label>
            <input type="text" id="username-username" class="input-field" name="username" required>
            <label for="password" class="input-label">Password</label>
            <div class="password-field">
               <input type="password" id="password" class="input-field" name="password" required>
               <i class="toggle-password fas fa-eye"></i>
            </div>
            <div class="overlap-group">
               <button type="submit" class="masuk">Masuk</button>
            </div>
         </form>
         <p class="anda-sudah-memiliki-akun">
            Belum punya akun?
            <a href="registrasi.php" class="daftar">Daftar</a>
         </p>
      </div>
   </div>
   <script>
   // Toggle password visibility
   var togglePassword = document.querySelector('.toggle-password');
   var passwordInput = document.querySelector('#password');

   togglePassword.addEventListener('click', function() {
      if (passwordInput.type === 'password') {
         passwordInput.type = 'text';
         togglePassword.classList.remove('fa-eye');
         togglePassword.classList.add('fa-eye-slash');
      } else {
         passwordInput.type = 'password';
         togglePassword.classList.remove('fa-eye-slash');
         togglePassword.classList.add('fa-eye');
      }
   });
   </script>
</body>

</html>