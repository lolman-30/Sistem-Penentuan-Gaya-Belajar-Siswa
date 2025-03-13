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
               <div class="col-md-12 col-sm-12 ">
                  <div class="dashboard_graph">

                     <div class="row x_title">
                        <div class="col-md-6">
                           <h3>Kelola SPPGB</h3>
                        </div>
                        <div class="col-md-6">
                           <a href="../../index.php" class="btn btn-primary " style="float:right;">LIHAT WEB</a>
                        </div>
                     </div>
                     <div class="col-sm-12">
                        <h3>Hasil</h3>
                        <table id="example1" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th>ID</th>
                                 <th>Nama Siswa</th>
                                 <th>Hasil</th>
                                 <th>Tanggal</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                           $loggedInUser = $_SESSION['idUsers'];
                           $query = "SELECT hasil.hasil, users.nama, hasil.tanggal FROM hasil 
                              JOIN hasil_pilihan ON hasil_pilihan.id = hasil.id_hasilPilihan 
                              JOIN users ON users.idUsers = hasil_pilihan.idUsers
                              WHERE users.users_level = 'siswa' AND users.idUsers = $loggedInUser";
                           $result = mysqli_query($conn, $query);

                           if ($result) {
                              $id = 1; // Mulai ID dari 1
                              while ($row = mysqli_fetch_assoc($result)) {
                                 echo "<tr>";
                                 echo "<td>" . $id++ . "</td>";
                                 echo "<td>" . $row["nama"] . "</td>";
                                 echo "<td>" . ($row["hasil"] ?? "-") . "</td>";
                                 echo "<td>" . ($row["tanggal"] ?? "-") . "</td>";
                                 echo "</tr>";
                                 // var_dump($row);
                              }
                           } else {
                              echo "Error: " . mysqli_error($conn);
                           }
                           ?>
                           </tbody>
                        </table>
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
            <br />
         </div>
      </div>
   </div>
   <!-- Start = Footer -->
   <?php require_once('footer.php'); ?>
   <!-- End = Isi Footer -->
</body>

</html>