<!DOCTYPE html>
<html lang="en">

<head>
   <?php 
    require_once('header.php');
    require_once('../src/Api/koneksi.php');
   ?>
</head>

<body class="nav-md">
   <div class="container body">
      <div class="main_container">
         <!-- Start = Sidebar -->
         <?php require_once('sidebar.php');?>
         <!-- End = Sidebar -->

         <!-- Start = navbar atas -->
         <?php require_once('topNavigation.php');?>
         <!-- End = navbar atas -->


         <!-- Start = penilaian siswa-->
         <div class="right_col" role="main">
            <div class="row">
               <div class="col-md-12 col-sm-12 ">
                  <div class="dashboard_graph">

                     <div class="col-md-9 col-sm-9 text-dark">
                        <form method="POST">
                           <h3>Berikan Penilaian</h3><br>
                           <div>
                              <label for="nama_pendek" class="h5">Nama Guru:</label>
                              <input type="text" name="nama_pendek" id="nama_pendek" required>
                           </div><br>
                           <ol class="h5">
                              <li>
                                 <p>Bagaimana penilaian Anda terhadap tampilan halaman depan website ini?</p>
                                 <ul class="list-unstyled">
                                    <li><input type="radio" name="tampilan" value="Sangat Menarik"> Sangat Menarik</li>
                                    <li><input type="radio" name="tampilan" value="Menarik"> Menarik</li>
                                    <li><input type="radio" name="tampilan" value="Cukup Menarik"> Cukup Menarik</li>
                                    <li><input type="radio" name="tampilan" value="Kurang Menarik"> Kurang Menarik</li>
                                    <li><input type="radio" name="tampilan" value="Tidak Menarik"> Tidak Menarik</li>
                                 </ul>
                              </li><br>
                              <li>
                                 <p>Sejauh mana Anda merasa mudah untuk menavigasi tampilan-tampilan website ini?</p>
                                 <ul class="list-unstyled">
                                    <li><input type="radio" name="navigasi" value="Sangat Menarik"> Sangat Menarik</li>
                                    <li><input type="radio" name="navigasi" value="Menarik"> Menarik</li>
                                    <li><input type="radio" name="navigasi" value="Cukup Menarik"> Cukup Menarik</li>
                                    <li><input type="radio" name="navigasi" value="Kurang Menarik"> Kurang Menarik</li>
                                    <li><input type="radio" name="navigasi" value="Tidak Menarik"> Tidak Menarik</li>
                                 </ul>
                              </li><br>
                              <li>
                                 <p>Bagaimana pendapat Anda tentang informasi yang disajikan pada halaman depan website
                                    ini?</p>
                                 <ul class="list-unstyled">
                                    <li><input type="radio" name="informasi" value="Sangat Menarik"> Sangat Menarik</li>
                                    <li><input type="radio" name="informasi" value="Menarik"> Menarik</li>
                                    <li><input type="radio" name="informasi" value="Cukup Menarik"> Cukup Menarik</li>
                                    <li><input type="radio" name="informasi" value="Kurang Menarik"> Kurang Menarik</li>
                                    <li><input type="radio" name="informasi" value="Tidak Menarik"> Tidak Menarik</li>
                                 </ul>
                              </li><br>
                              <li>
                                 <p>Apakah Anda merasa gaya belajar Anda tercakup dengan baik dalam pilihan yang
                                    disediakan?</p>
                                 <ul class="list-unstyled">
                                    <li><input type="radio" name="gaya_belajar" value="Sangat Menarik"> Sangat Menarik
                                    </li>
                                    <li><input type="radio" name="gaya_belajar" value="Menarik"> Menarik</li>
                                    <li><input type="radio" name="gaya_belajar" value="Cukup Menarik"> Cukup Menarik
                                    </li>
                                    <li><input type="radio" name="gaya_belajar" value="Kurang Menarik"> Kurang Menarik
                                    </li>
                                    <li><input type="radio" name="gaya_belajar" value="Tidak Menarik"> Tidak Menarik
                                    </li>
                                 </ul>
                              </li><br>
                              <li>
                                 <p>Apakah Anda merasa perhitungan gaya belajar memakan waktu yang cukup lama?</p>
                                 <ul class="list-unstyled">
                                    <li><input type="radio" name="memfasilitasi" value="Sangat Menarik"> Sangat Menarik
                                    </li>
                                    <li><input type="radio" name="memfasilitasi" value="Menarik"> Menarik</li>
                                    <li><input type="radio" name="memfasilitasi" value="Cukup Menarik"> Cukup Menarik
                                    </li>
                                    <li><input type="radio" name="memfasilitasi" value="Kurang Menarik"> Kurang Menarik
                                    </li>
                                    <li><input type="radio" name="memfasilitasi" value="Tidak Menarik"> Tidak Menarik
                                    </li>
                                 </ul>
                              </li><br>
                              <li>
                                 <p>Bagaimana penilaian Anda terhadap terhadap isi kuesioner gaya belajar yang ada?</p>
                                 <ul class="list-unstyled">
                                    <li><input type="radio" name="halaman_admin" value="Sangat Menarik"> Sangat Menarik
                                    </li>
                                    <li><input type="radio" name="halaman_admin" value="Menarik"> Menarik</li>
                                    <li><input type="radio" name="halaman_admin" value="Cukup Menarik"> Cukup Menarik
                                    </li>
                                    <li><input type="radio" name="halaman_admin" value="Kurang Menarik"> Kurang Menarik
                                    </li>
                                    <li><input type="radio" name="halaman_admin" value="Tidak Menarik"> Tidak Menarik
                                    </li>
                                 </ul>
                              </li><br>
                              <li>
                                 <p>Apakah Anda merasa mudah menggunakan fitur-fitur yang tersedia pada halaman akun
                                    website ini?</p>
                                 <ul class="list-unstyled">
                                    <li><input type="radio" name="fitur_admin" value="Sangat Menarik"> Sangat Menarik
                                    </li>
                                    <li><input type="radio" name="fitur_admin" value="Menarik"> Menarik</li>
                                    <li><input type="radio" name="fitur_admin" value="Cukup Menarik"> Cukup Menarik</li>
                                    <li><input type="radio" name="fitur_admin" value="Kurang Menarik"> Kurang Menarik
                                    </li>
                                    <li><input type="radio" name="fitur_admin" value="Tidak Menarik"> Tidak Menarik</li>
                                 </ul>
                              </li><br>
                              <li>
                                 <p>Sejauh mana Anda merasa puas dengan kinerja halaman guru pada website ini?</p>
                                 <ul class="list-unstyled">
                                    <li><input type="radio" name="kinerja_admin" value="Sangat Menarik"> Sangat Menarik
                                    </li>
                                    <li><input type="radio" name="kinerja_admin" value="Menarik"> Menarik</li>
                                    <li><input type="radio" name="kinerja_admin" value="Cukup Menarik"> Cukup Menarik
                                    </li>
                                    <li><input type="radio" name="kinerja_admin" value="Kurang Menarik"> Kurang Menarik
                                    </li>
                                    <li><input type="radio" name="kinerja_admin" value="Tidak Menarik"> Tidak Menarik
                                    </li>
                                 </ul>
                              </li><br>
                              <li>
                                 <p>Apakah Anda memiliki harapan website pakar gaya belajar ini?</p>
                                 <textarea name="harapan" rows="3" cols="50" style="width: 500px;" required></textarea>
                              </li><br>
                              <li>
                                 <p>Apakah Anda memiliki saran atau masukan untuk meningkatkan pengalaman pengguna pada
                                    website ini?</p>
                                 <textarea name="saran" rows="3" cols="50" style="width: 500px;" required></textarea>
                              </li>
                           </ol><br>
                           <input type="submit" value="Submit" class="btn btn-primary">
                        </form>
                     </div>

                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Start = Footer -->
         <?php require_once('footer.php'); ?>
         <!-- End = Isi Footer -->
      </div>
</body>

</html>

<?php
   // Memeriksa apakah form telah dikirim
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
      // Mengambil nilai-nilai yang dikirimkan dari form
      $nama_pendek = $_POST['nama_pendek'];
      $tampilan = $_POST['tampilan'];
      $navigasi = $_POST['navigasi'];
      $informasi = $_POST['informasi'];
      $gaya_belajar = $_POST['gaya_belajar'];
      $memfasilitasi = $_POST['memfasilitasi'];
      $halaman_admin = $_POST['halaman_admin'];
      $fitur_admin = $_POST['fitur_admin'];
      $kinerja_admin = $_POST['kinerja_admin'];
      $harapan = $_POST['harapan'];
      $saran = $_POST['saran'];

      // Menyimpan data ke database
      // Sesuaikan dengan detail koneksi dan nama tabel di database Anda
      $servername = 'localhost';
      $username = 'root';
      $password = '';
      $database = 'db_nentuin';
      
      // Membuat koneksi ke database
      $conn = new mysqli($servername, $username, $password, $database);
      
      // Memeriksa apakah koneksi berhasil
      if ($conn->connect_error) {
         die("Koneksi gagal: " . $conn->connect_error);
      }
      
      // Menyimpan data penilaian guru ke dalam tabel penilaian_guru
      $sql = "INSERT INTO penilaian_siswa (nama_pendek, tampilan, navigasi, informasi, gaya_belajar, memfasilitasi, halaman_admin, fitur_admin, kinerja_admin, harapan, saran) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
      
      // Prepare the statement
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("sssssssssss", $nama_pendek, $tampilan, $navigasi, $informasi, $gaya_belajar, $memfasilitasi, $halaman_admin, $fitur_admin, $kinerja_admin, $harapan, $saran);
      
      // Cek keberhasilan eksekusi statement
      // if ($stmt->execute()) {
      //    echo "Data berhasil disimpan.";
      // } else {
      //    echo "Terjadi kesalahan saat menyimpan data: " . $stmt->error;
      // }

      $stmt->execute();
      
      // Menutup statement dan koneksi
      $stmt->close();
      $conn->close();
   }
?>