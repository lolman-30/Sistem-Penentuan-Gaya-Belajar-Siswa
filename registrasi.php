<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link rel="stylesheet" href="./css/login.css">
   <link rel="icon" href="./img/icon.png">
   <title>REGISTER || SPPGB</title>
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
   <div class="screen-registrasi">
      <h1 class="title">Registrasi</h1>
      <div class="overlap-group1">
         <div class="form-group">
            <?php
            // Establish a database connection
            $host = "localhost";
            $database = "db_nentuin";
            $username = "root";
            $password = "";

            $conn = mysqli_connect($host, $username, $password, $database);

            if (!$conn) {
               die("Connection failed: " . mysqli_connect_error());
            }

            if ($_SERVER["REQUEST_METHOD"] === "POST") {
               // Retrieve submitted form data
               $nama = $_POST['nama'];
               $kelas = $_POST['kelas'];
               $jenisKelamin = $_POST['jenis_kelamin'];
               $username = $_POST['username'];
               $password = md5($_POST['password']); // Generate MD5 hash of the password
            
               // Insert data into the "users" table
               $query = "INSERT INTO users (nama, kelas, jenis_kelamin, username, password, users_level) VALUES ('$nama', '$kelas', '$jenisKelamin', '$username', '$password', 'siswa')";
            
               if (mysqli_query($conn, $query)) {
                  // Registration successful, redirect to a success page
                  header("Location: login.php");
                  exit();
               } else {
                  // Registration failed, redirect back to the registration page with an error message
                  header("Location: registration.php?error=1");
                  exit();
               }
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
               <label for="nama" class="input-label">Nama</label>
               <input type="text" id="nama" class="input-field" name="nama" required>
               <label for="kelas" class="input-label">Kelas</label>
               <select id="kelas" class="input-field" name="kelas" required>
                  <option value="">Pilih Opsi</option>
                  <option value="7A">7A</option>
                  <option value="7B">7B</option>
                  <option value="7C">7C</option>
                  <option value="7D">7D</option>
                  <option value="7E">7E</option>
                  <option value="7F">7F</option>
                  <option value="7G">7G</option>
                  <option value="7H">7H</option>
                  <option value="7I">7I</option>
                  <option value="7J">7J</option>
               </select>
               <label for="jenis-kelamin" class="input-label">Jenis Kelamin</label>
               <select id="jenis-kelamin" class="input-field" name="jenis_kelamin" required>
                  <option value="">Pilih jenis kelamin</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
               </select>
               <label for="username" class="input-label">Username</label>
               <input type="text" id="username" class="input-field" name="username" required>
               <label for="password" class="input-label">Password</label>
               <div class="password-field">
                  <input type="password" id="password" class="input-field" name="password" required>
                  <i class="toggle-password fas fa-eye"></i>
               </div>
               <div class="overlap-group">
                  <button type="submit" class="registrasi">Registrasi</button>
               </div>
            </form>
         </div>
         <p class="anda-sudah-memiliki-akun">
            Sudah punya akun?
            <a href="login.php" class="daftar">Login</a>
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