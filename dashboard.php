<!DOCTYPE html>
<html>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman Admin</title>
   <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
   <div class="container">
      <div class="sidebar">
         <div class="profile">
            <h2>Hello, Jhondoe</h2>
         </div>
         <a class="menu-item active" href="#biodata-siswa">Biodata Siswa</a>
         <a class="menu-item" href="#kuesioner">Kuesioner</a>
         <a class="menu-item" href="#hasil">Hasil</a>
         <a class="menu-item" href="#rekap-data">Rekap Data</a>
         <a class="menu-item" href="#akun">Akun</a>
         <button class="logout-btn">Logout</button>
      </div>
      <div class="content">
         <section id="biodata-siswa" class="section">
            <h1>Biodata Siswa</h1>
            <div class="table-container">
               <table>
                  <thead>
                     <tr>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Options</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                  $conn = mysqli_connect("localhost", "root", "", "db_nentuin");

                  if (!$conn) {
                     die("Connection failed: " . mysqli_connect_error());
                  }

                  $query = mysqli_query($conn, "SELECT * FROM users WHERE users_level = 'user'");

                  while ($row = mysqli_fetch_assoc($query)) {
                     echo "<tr>";
                     echo "<td>" . $row["nama"] . "</td>";
                     echo "<td>" . $row["kelas"] . "</td>";
                     echo "<td>" . $row["jenis_kelamin"] . "</td>";
                     echo "<td>" . $row["username"] . "</td>";
                     echo "<td>" . $row["password"] . "</td>";
                     echo "<td>";
                     echo "<button>Edit</button>";
                     echo "<button class='delete-btn'>Delete</button>";
                     echo "</td>";
                     echo "</tr>";
                  }

                  mysqli_close($conn);
                  ?>
                  </tbody>
               </table>
            </div>
         </section>
         <section id="kuesioner" class="section">
            <h1>Kuesioner</h1>
            <div class="table-container">
               <table>
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Question</th>
                        <th>Option 1</th>
                        <th>Option 2</th>
                        <th>Option 3</th>
                        <th>Options</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
            // mengatur jumlah baris yang akan ditampilkan pada satu halaman
            $rows_per_page = 6;

            // menentukan halaman saat ini
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

            // mengambil data dari database
            $conn = mysqli_connect("localhost", "root", "", "db_nentuin");
            $start = ($current_page - 1) * $rows_per_page;
            $query = mysqli_query($conn, "SELECT * FROM survey LIMIT $start, $rows_per_page");

            // menampilkan data pada tabel
            while ($row = mysqli_fetch_assoc($query)) {
               echo "<tr>";
               echo "<td>" . $row["id"] . "</td>";
               echo "<td>" . $row["question"] . "</td>";
               echo "<td>" . $row["option_1"] . "</td>";
               echo "<td>" . $row["option_2"] . "</td>";
               echo "<td>" . $row["option_3"] . "</td>";
               echo "<td>";
               echo "<button>Edit</button>";
               echo "<button class='delete-btn'>Delete</button>";
               echo "</td>";
               echo "</tr>";
            }

            // menambahkan tombol paging
            $query_count = mysqli_query($conn, "SELECT COUNT(*) FROM survey");
            $total_rows = mysqli_fetch_array($query_count)[0];
            $total_pages = ceil($total_rows / $rows_per_page);

            echo "<div class='paging'>";
            for ($i = 1; $i <= $total_pages; $i++) {
               $class = $current_page == $i ? 'active' : '';
               echo "<a class='$class' href='#kuesioner?page=$i'>$i</a>";
            }
            echo "</div>";

            mysqli_close($conn);
            ?>
                  </tbody>
               </table>
            </div>
         </section>
         <section id="hasil" class="section">
   <h1>Hasil</h1>
   <div class="table-container">
      <table>
         <thead>
            <tr>
               <th>Nama Siswa</th>
               <th>Hasil</th>
               <th>Tanggal</th>
            </tr>
         </thead>
         <tbody>
            <?php
               // Membuat koneksi ke database
               $connection = mysqli_connect("localhost", "root", "", "db_nentuin");

               // Memeriksa koneksi
               if (mysqli_connect_errno()) {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                  exit();
               }

               $query = "SELECT users.nama, hasil.hasil, hasil.tanggal 
               FROM hasil 
               JOIN users ON hasil.idHasil = users.idUsers 
               WHERE users.users_level = 'user'";

               // Menjalankan query
               $result = mysqli_query($connection, $query);

               // Memeriksa apakah query berhasil dijalankan
               if ($result) {
                  // Mengambil data satu per satu
                  while ($row = mysqli_fetch_assoc($result)) {
                     $nama = $row['nama'];
                     $hasil = $row['hasil'];
                     $tanggal = $row['tanggal'];

                     // Menampilkan data dalam baris tabel
                     echo "<tr>";
                     echo "<td>$nama</td>";
                     echo "<td>$hasil</td>";
                     echo "<td>$tanggal</td>";
                     echo "</tr>";
                  }

                  // Membuang hasil setelah selesai digunakan
                  mysqli_free_result($result);
               } else {
                  echo "Error: " . mysqli_error($connection);
               }

               // Menutup koneksi ke database
               mysqli_close($connection);
            ?>
         </tbody>
      </table>
   </div>
</section>

         <section id="rekap-data" class="section">
            <h1>Rekap Data</h1>
            <div class="table-container">
               <table>
                  <thead>
                     <tr>
                        <th>Nama Siswa</th>
                        <th>V1</th>
                        <th>V2</th>
                        <th>V3</th>
                        <th>V4</th>
                        <th>V5</th>
                        <th>V6</th>
                        <th>V7</th>
                        <th>V8</th>
                        <th>V9</th>
                        <th>V10</th>
                        <th>V11</th>
                        <th>V12</th>
                        <th>A1</th>
                        <th>A2</th>
                        <th>A3</th>
                        <th>A4</th>
                        <th>A5</th>
                        <th>A6</th>
                        <th>A7</th>
                        <th>A8</th>
                        <th>A9</th>
                        <th>A10</th>
                        <th>A11</th>
                        <th>A12</th>
                        <th>K1</th>
                        <th>K2</th>
                        <th>K3</th>
                        <th>K4</th>
                        <th>K5</th>
                        <th>K6</th>
                        <th>K7</th>
                        <th>K8</th>
                        <th>K9</th>
                        <th>K10</th>
                        <th>K11</th>
                        <th>K12</th>
                        <th>Options</th>
                     </tr>
                  </thead>
                  <tbody>
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

            // Retrieve data from the "rekap_data" table
            $query = "SELECT * FROM hasil_pilihan";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
               while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $row["nama"] . "</td>";
                  echo "<td>" . $row["V1"] . "</td>";
                  echo "<td>" . $row["V2"] . "</td>";
                  echo "<td>" . $row["V3"] . "</td>";
                  echo "<td>" . $row["V4"] . "</td>";
                  echo "<td>" . $row["V5"] . "</td>";
                  echo "<td>" . $row["V6"] . "</td>";
                  echo "<td>" . $row["V7"] . "</td>";
                  echo "<td>" . $row["V8"] . "</td>";
                  echo "<td>" . $row["V9"] . "</td>";
                  echo "<td>" . $row["V10"] . "</td>";
                  echo "<td>" . $row["V11"] . "</td>";
                  echo "<td>" . $row["V12"] . "</td>";
                  echo "<td>" . $row["A1"] . "</td>";
                  echo "<td>" . $row["A2"] . "</td>";
                  echo "<td>" . $row["A3"] . "</td>";
                  echo "<td>" . $row["A4"] . "</td>";
                  echo "<td>" . $row["A5"] . "</td>";
                  echo "<td>" . $row["A6"] . "</td>";
                  echo "<td>" . $row["A7"] . "</td>";
                  echo "<td>" . $row["A8"] . "</td>";
                  echo "<td>" . $row["A9"] . "</td>";
                  echo "<td>" . $row["A10"] . "</td>";
                  echo "<td>" . $row["A11"] . "</td>";
                  echo "<td>" . $row["A12"] . "</td>";
                  echo "<td>" . $row["K1"] . "</td>";
                  echo "<td>" . $row["K2"] . "</td>";
                  echo "<td>" . $row["K3"] . "</td>";
                  echo "<td>" . $row["K4"] . "</td>";
                  echo "<td>" . $row["K5"] . "</td>";
                  echo "<td>" . $row["K6"] . "</td>";
                  echo "<td>" . $row["K7"] . "</td>";
                  echo "<td>" . $row["K8"] . "</td>";
                  echo "<td>" . $row["K9"] . "</td>";
                  echo "<td>" . $row["K10"] . "</td>";
                  echo "<td>" . $row["K11"] . "</td>";
                  echo "<td>" . $row["K12"] . "</td>";
                  echo "<td>";
                  echo "<button>Edit</button>";
                  echo "<button class='delete-btn'>Delete</button>";
                  echo "</td>";
                  echo "</tr>";
               }
            } else {
               echo "<tr><td colspan='40'>No records found</td></tr>";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
                  </tbody>
               </table>
            </div>
         </section>

         <section id="akun" class="section">
            <h1>Akun</h1>
            <div class="table-container">
               <table>
                  <thead>
                     <tr>
                        <th>Nama Siswa</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Options</th>
                     </tr>
                  </thead>
                  <tbody>
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
                  
                     // Retrieve data from the "users" table
                     $query = "SELECT * FROM users WHERE users_level = 'user'";
                     $result = mysqli_query($conn, $query);
                  
                     if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                           echo "<tr>";
                           echo "<td>" . $row["nama"] . "</td>";
                           echo "<td>" . $row["username"] . "</td>";
                           echo "<td>" . $row["password"] . "</td>";
                           echo "<td>";
                           echo "<button>Edit</button>";
                           echo "<button class='delete-btn'>Delete</button>";
                           echo "</td>";
                           echo "</tr>";
                        }
                     } else {
                        echo "<tr><td colspan='5'>No records found</td></tr>";
                     }
                  
                     // Close the database connection
                     mysqli_close($conn);
                     ?>
                  </tbody>
               </table>
            </div>
         </section>
      </div>
   </div>
   <script>
   // ambil semua elemen menu-item dan section
   const menuItems = document.querySelectorAll('.menu-item');
   const sections = document.querySelectorAll('.section');

   // tambahkan event listener untuk setiap menu-item
   menuItems.forEach(item => {
      item.addEventListener('click', () => {
         // ambil href dari menu-item
         const target = item.getAttribute('href');


         // hilangkan semua class active dari menu-item dan section
         menuItems.forEach(item => item.classList.remove('active'));
         sections.forEach(section => section.classList.remove('active'));

         // tambahkan class active ke menu-item yang sesuai dengan target
         item.classList.add('active');

         // tambahkan class active ke section yang sesuai dengan target
         document.querySelector(target).classList.add('active');
      });
   });

   // buat Biodata Siswa section aktif saat halaman pertama kali di-load
   document.querySelector('#biodata-siswa').classList.add('active');

   // buat semua section tidak aktif saat halaman pertama kali di-load
   sections.forEach(section => section.classList.remove('active'));

   // buat section yang aktif hanya yang sesuai dengan menu-item yang diklik
   const initialTarget = menuItems[0].getAttribute('href');
   document.querySelector(initialTarget).classList.add('active');
   </script>
</body>

</html>