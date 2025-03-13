<!DOCTYPE html>
<html lang="en">

<head>
   <?php 
   // Koneksi
   require_once('../src/Api/koneksi.php');
   // Header
   require_once('header.php');
   ?>

   <style>
   .delete-btn {
      color: red;
   }
   </style>
</head>

<body class="nav-md">
   <div class="container body">
      <div class="main_container">
         <!-- Start = Sidebar -->
         <?php 
         // Sidebar
         require_once('sidebar.php');
         // Navbar atas
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
                        <h3>Kuesioner</h3>
                        <table id="example1" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th>ID</th>
                                 <th>Question</th>
                                 <th>Option 1</th>
                                 <th>Option 2</th>
                                 <th>Option 3</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              $query = mysqli_query($conn, "SELECT * FROM survey");

                              // menampilkan data pada tabel
                              while ($infoSurvey = mysqli_fetch_assoc($query)) {
                                 echo "<tr>";
                                 echo "<td>" . $infoSurvey["id"] . "</td>";
                                 echo "<td>" . $infoSurvey["question"] . "</td>";
                                 echo "<td>" . $infoSurvey["option_1"] . "</td>";
                                 echo "<td>" . $infoSurvey["option_2"] . "</td>";
                                 echo "<td>" . $infoSurvey["option_3"] . "</td>";
                                 echo "<td>";
                                 echo "<a href='editKuesioner.php?idUpdate=" . $infoSurvey["id"] . "'>Edit</a>";
                                 echo "</td>";
                                 echo "</tr>";
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