<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   //koneksi
   require_once('../src/Api/koneksi.php');
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
                           <h3>Kelola Edit</h3>
                        </div>
                     </div>
                     <div class="col-md-12 col-sm-12 ">
                        <br>
                        <?php
                        error_reporting(0);
                        $idUpdate = $_GET['idUpdate'];
                     
                        // Query untuk mendapatkan data yang akan diupdate
                        $query = "SELECT * FROM survey WHERE id = '$idUpdate'";
                        $result = mysqli_query($conn, $query);
                        $infoSurvey = mysqli_fetch_assoc($result);
                        ?>

                        <form method="POST" action="crudKuesioner.php?idUpdate=<?php echo $idUpdate; ?>">
                           <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">Pertanyaan Baru:</label>
                              <div class="col-md-6 col-sm-6 ">
                                 <input type="text" class="form-control" name="newQuestion"
                                    value="<?php echo $infoSurvey['question']; ?>">
                              </div>
                           </div>
                           <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">Isi Pilihan</label>
                              <div class="col-md-6 col-sm-6 ">
                                 <input type="text" class="form-control" name="isiPilihan1"
                                    value="<?php echo $infoSurvey['option_1']; ?>" readonly>
                              </div>
                           </div>
                           <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
                              <div class="col-md-6 col-sm-6 ">
                                 <input type="text" class="form-control" name="isiPilihan2"
                                    value="<?php echo $infoSurvey['option_2']; ?>" readonly>
                              </div>
                           </div>
                           <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
                              <div class="col-md-6 col-sm-6 ">
                                 <input type="text" class="form-control" name="isiPilihan3"
                                    value="<?php echo $infoSurvey['option_3']; ?>" readonly>
                              </div>
                           </div>
                           <div class="item form-group">
                              <div class="col-md-6 col-sm-6 offset-md-3">
                                 <button type="submit" class="btn btn-info" name="edit">Update</button>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
            <br />
         </div>
         <!-- End = isi konten -->
         <!--  -->
      </div>
   </div>
   <!-- Start = Footer -->
   <?php require_once('footer.php'); ?>
   <!-- End = Isi Footer -->
</body>

</html>