<!DOCTYPE html>
<html>

<head>
   <title>Profil Akun</title>
   <style>
   body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
   }

   .container {
      width: 90vw;
      max-width: 600px;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
   }

   .profile {
      text-align: center;
      margin-bottom: 20px;
   }

   .profile img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
   }

   .name {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
   }

   .info {
      font-size: 18px;
      margin-bottom: 10px;
   }

   .learning-style {
      margin-bottom: 20px;
   }

   .learning-style h3 {
      font-size: 20px;
      margin-bottom: 10px;
   }

   .learning-style ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
   }

   .learning-style li {
      margin-bottom: 5px;
   }

   .learning-style .date {
      font-style: italic;
   }

   .notification {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
      color: red;
   }

   .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
   }

   .btn:hover {
      background-color: #45a049;
   }
   </style>
</head>

<body>
   <div class="container">
      <?php
      // Koneksi ke database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "db_nentuin";

      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
      }

      // Cek status login
      session_start();
      if (isset($_SESSION['users_level']) && $_SESSION['users_level'] === 'user') {
         // Ambil data pengguna dari database
         $query = "SELECT nama, kelas, jenis_kelamin FROM users";
         $result = $conn->query($query);

         if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $nama = $row['nama'];
            $kelas = $row['kelas'];
            $jenis_kelamin = $row['jenis_kelamin'];

            // Tampilkan data pengguna
            echo '<div class="profile">';
            echo '<div class="name">' . $nama . '</div>';
            echo '<div class="info">Kelas: ' . $kelas . '</div>';
            echo '<div class="info">Jenis Kelamin: ' . $jenis_kelamin . '</div>';
            echo '</div>';
         } else {
            echo '<div class="notification">Data pengguna tidak ditemukan</div>';
         }

         // Tampilkan rekap gaya belajar dan tanggal tes
         echo '<div class="learning-style">';
         echo '<h3>Rekap Gaya Belajar</h3>';
         echo '<ul>';
         echo '<li>Visual</li>';
         echo '<li>Auditif</li>';
         echo '<li>Kinestetik</li>';
         echo '</ul>';
         echo '<div class="date">Tanggal Tes: 25 Mei 2023</div>';
         echo '</div>';

         // Tampilkan tombol logout
         echo '<a href="logout.php" class="btn">Logout</a>';
      } else {
         // Tampilkan pesan jika belum login
         echo '<div class="notification">Kamu belum login</div>';

         // Tampilkan tombol login dan daftar
         echo '<a href="login.php" class="btn">Login</a>';
         echo '<a href="registrasi.php" class="btn">Daftar</a>';
      }

      $conn->close();
      ?>
   </div>
</body>

</html>