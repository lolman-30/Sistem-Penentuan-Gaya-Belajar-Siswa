<?php
//koneksi
require_once('../src/Api/koneksi.php');

// Proses Update
if (isset($_POST['edit'])) {
   $idUpdate = $_POST['idUpdate'];
   $newNama = $_POST['nama'];
   $newKelas = $_POST['kelas'];
   $newJenisKelamin = $_POST['jenis_kelamin'];
   $newUsername = $_POST['username'];
   $newPassword = $_POST['password'];

   // Enkripsi password menggunakan password_hash()
   $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

   // Query untuk mengupdate data dengan parameter binding
   $updateQuery = "UPDATE users SET nama = ?, kelas = ?, jenis_kelamin = ?, username = ?, password = ? WHERE idUsers = ?";
   $stmt = $conn->prepare($updateQuery);
   $stmt->bind_param("sssssi", $newNama, $newKelas, $newJenisKelamin, $newUsername, $hashedPassword, $idUpdate);

   if ($stmt->execute()) {
      // Jika update berhasil
      echo "Data berhasil diupdate!";
      header("Location: kelolaAkun.php"); // Redirect to kelolaAkun.php page
      exit(); // Stop further execution after redirection
   } else {
      // Jika update gagal
      echo "Gagal mengupdate data: " . $stmt->error;
   }
   $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <?php 
   //koneksi
   require_once('../src/Api/koneksi.php');
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
                           <h3>Kelola Akun</h3>
                        </div>
                     </div>

                     <div class="col-md-12 col-sm-12 ">
                        <br>


                        <form method="POST" action="editAkun.php" enctype="multipart/form-data"
                           class="form-horizontal form-label-left">
                           <?php
                    $id = $_GET['idUpdate'];
                    $stmt = $conn->prepare("SELECT * FROM users WHERE idUsers = ?");
                    $stmt->bind_param("i", $id);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $infoEdit = $result->fetch_assoc();
                    $stmt->close();
                  ?>
                           <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">Nama:</label>

                              <div class="col-md-6 col-sm-6 ">
                                 <input type="text" required class="form-control" name="nama"
                                    value="<?php echo $infoEdit['nama'] ;?>">
                              </div>
                           </div>

                           <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">Kelas:</label>

                              <div class="col-md-6 col-sm-6 ">
                                 <select class="form-control" name="kelas">
                                    <option value="7A" <?php if ($infoEdit['kelas'] == '7A') echo 'selected'; ?>>
                                       7A</option>
                                    <option value="7B" <?php if ($infoEdit['kelas'] == '7B') echo 'selected'; ?>>
                                       7B</option>
                                    <option value="7C" <?php if ($infoEdit['kelas'] == '7C') echo 'selected'; ?>>
                                       7C</option>
                                    <option value="7D" <?php if ($infoEdit['kelas'] == '7D') echo 'selected'; ?>>
                                       7D</option>
                                    <option value="7E" <?php if ($infoEdit['kelas'] == '7E') echo 'selected'; ?>>
                                       7E</option>
                                    <option value="7F" <?php if ($infoEdit['kelas'] == '7F') echo 'selected'; ?>>
                                       7F</option>
                                    <option value="7G" <?php if ($infoEdit['kelas'] == '7G') echo 'selected'; ?>>
                                       7G</option>
                                    <option value="7H" <?php if ($infoEdit['kelas'] == '7H') echo 'selected'; ?>>
                                       7H</option>
                                    <option value="7I" <?php if ($infoEdit['kelas'] == '7I') echo 'selected'; ?>>
                                       7I</option>
                                    <option value="7J" <?php if ($infoEdit['kelas'] == '7J') echo 'selected'; ?>>
                                       7J</option>
                                 </select>
                              </div>
                           </div>
                           <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin:</label>
                              <div class="col-md-6 col-sm-6 ">
                                 <select class="form-control" name="jenis_kelamin">
                                    <option value="Laki-Laki"
                                       <?php if ($infoEdit['jenis_kelamin'] == 'Laki-Laki') echo 'selected'; ?>>
                                       Laki-Laki</option>
                                    <option value="Perempuan"
                                       <?php if ($infoEdit['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>
                                       Perempuan</option>
                                 </select>
                              </div>
                           </div>
                           <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">Username:</label>
                              <div class="col-md-6 col-sm-6 ">
                                 <input class="form-control" name="username" type="text"
                                    value="<?php echo $infoEdit['username'] ;?>">
                              </div>
                           </div>
                           <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">Password:</label>
                              <div class="col-md-6 col-sm-6 ">
                                 <input class="form-control" name="password" type="password">
                              </div>
                           </div>
                           <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">User Level:</label>
                              <div class="col-md-6 col-sm-6">
                                 <span class="form-control"><?php echo $infoEdit['users_level']; ?></span>
                              </div>
                           </div>

                           <div class="item form-group">
                              <div class="col-md-6 col-sm-6 offset-md-3">
                                 <input type="hidden" name="idUpdate" value="<?php echo $id; ?>">
                                 <button type="submit" class="btn btn-info" name="edit">Simpan</button>
                              </div>
                           </div>
                           <div class="ln_solid"></div>

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