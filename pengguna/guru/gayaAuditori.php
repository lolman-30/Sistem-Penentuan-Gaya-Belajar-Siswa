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
                           <a href="../../index.php" class="btn btn-primary" style="float:right;" target="_blank">LIHAT
                              WEB</a>
                        </div>
                     </div>
                     <div class="col-sm-12">
                        <h3>Rekap Data Auditori</h3>
                        <table id="example1" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th>ID</th>
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