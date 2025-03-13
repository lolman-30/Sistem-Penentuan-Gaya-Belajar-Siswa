<!DOCTYPE html>
<html lang="en">

<head>
   <?php 
   // Koneksi
   require_once('../src/Api/koneksi.php');
   // Header
   require_once('header.php');
   ?>
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
                           <a href="../index.html" class="btn btn-primary" style="float:right;" target="_blank">LIHAT
                              WEB</a>
                        </div>
                     </div>
                     <div class="col-sm-12">
                        <h3>Rekap Data Kinestetik</h3>
                        <table id="example1" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th>ID</th>
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
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              // Retrieve data from the "hasil_pilihan" table
                              $query = "SELECT * FROM hasil_pilihan";
                              $result = mysqli_query($conn, $query);

                              if (mysqli_num_rows($result) > 0) {
                                 $id = 1;
                                 while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $id++ . "</td>";
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
                                    echo "<a href='editCerita.php?idUpdate=" . $row["id"] . "'>Edit</a> | ";
                                    echo "<a href='crudCerita.php?id=" . $row["id"] . "'>Hapus</a>";
                                    echo "</td>";
                                    echo "</tr>";
                                 }
                              } else {
                                 echo "<tr>";
                                 echo "<td colspan='13'>No records found</td>";
                                 echo "</tr>";
                              }

                              // Close the database connection
                              mysqli_close($conn);
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