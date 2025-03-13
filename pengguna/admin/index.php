<!DOCTYPE html>
<html lang="en">

<head>
   <?php 
   //koneksi
   require_once ('../src/Api/koneksi.php');
   //header
   require_once('header.php'); ?>
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
                           <a href="../../index.php" class="btn btn-primary" style="float:right;" target="_blank">LIHAT
                              WEB</a>
                        </div>
                     </div>
                     <div class="col-sm-12">
                        <h3>Biodata Siswa</h3>
                        <table id="example1" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th>ID</th>
                                 <th>Nama Siswa</th>
                                 <th>Kelas</th>
                                 <th>Jenis Kelamin</th>
                                 <th>Username</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              $users = mysqli_query($conn, "SELECT * FROM users WHERE users_level = 'siswa'");
                              $idUsers = 1; // Mulai ID dari 1
                              while ($infoUsers = mysqli_fetch_array($users)) {
                              ?>
                              <tr>
                                 <td><?php echo $idUsers++; ?></td>
                                 <td><?php echo $infoUsers['nama']; ?></td>
                                 <td><?php echo $infoUsers['kelas']; ?></td>
                                 <td><?php echo $infoUsers['jenis_kelamin']; ?></td>
                                 <td><?php echo $infoUsers['username']; ?></td>
                              </tr>
                              <?php
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