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


         <!-- Start = table list tamu undangan-->
         <div class="right_col" role="main">
            <div class="row">
               <div class="col-md-12 col-sm-12 ">
                  <div class="dashboard_graph">
                     <div class="row x_title">
                        <div class="col-md-6">
                           <h3>List Penilaian Guru</h3>
                        </div>
                        <div class="col-md-6">
                           <a href="../../index.php" class="btn btn-primary " style="float:right;" target="_blank">LIHAT
                              WEB</a>
                        </div>
                     </div>
                     <div class="col-md-12 col-sm-12 ">
                        <table id="example1" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th>No</th>
                                 <th>Nama Pengirim</th>
                                 <th>Tampilan</th>
                                 <th>Navigasi</th>
                                 <th>Informasi</th>
                                 <th>Gaya Belajar</th>
                                 <th>Memfasilitasi</th>
                                 <th>Halaman Admin</th>
                                 <th>Fitur Admin</th>
                                 <th>Kinerja Admin</th>
                                 <th>Harapan</th>
                                 <th>Saran</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              // Mengambil data penilaian guru dari tabel penilaian_guru
                              $sql = "SELECT * FROM penilaian_guru";
                              $result = $conn->query($sql);

                              if ($result->num_rows > 0) {
                                 $no = 1;
                                 while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $no . "</td>";
                                    echo "<td>" . $row['nama_pendek'] . "</td>";
                                    echo "<td>" . $row['tampilan'] . "</td>";
                                    echo "<td>" . $row['navigasi'] . "</td>";
                                    echo "<td>" . $row['informasi'] . "</td>";
                                    echo "<td>" . $row['gaya_belajar'] . "</td>";
                                    echo "<td>" . $row['memfasilitasi'] . "</td>";
                                    echo "<td>" . $row['halaman_admin'] . "</td>";
                                    echo "<td>" . $row['fitur_admin'] . "</td>";
                                    echo "<td>" . $row['kinerja_admin'] . "</td>";
                                    echo "<td>" . $row['harapan'] . "</td>";
                                    echo "<td>" . $row['saran'] . "</td>";
                                    echo "</tr>";
                                    $no++;
                                 }
                              } else {
                                 echo "<tr><td colspan='12'>Tidak ada data penilaian.</td></tr>";
                              }
                              ?>
                           </tbody>
                        </table>
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End = table list tamu undangan -->

         <!--  -->
      </div>

      <!-- Start = Footer -->
      <?php require_once('footer.php'); ?>
      <!-- End = Isi Footer -->
</body>

</html>