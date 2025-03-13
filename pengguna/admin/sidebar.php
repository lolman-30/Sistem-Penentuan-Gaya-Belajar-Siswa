<html>

<head>
   <title></title>
   <?php
  require_once ('../src/Api/koneksi.php');
  ?>
</head>

<body>
   <div class="col-md-3 left_col">
      <div class="left_col scroll-view">

         <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"> <span>SPPGB ADMIN</span></a>
         </div>
         <div class="clearfix"></div>

         <!-- start = profile admin -->
         <div class="profile clearfix">
            <div class="profile_pic">
               <img src="../src/assets/images/icon.png" class="img-circle profile_img">
            </div>

            <div class="profile_info">
               <span>Selamat Datang,</span>
               <h2>
                  <?php
               $username = $_SESSION['username'];
               $query = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username' ");
               while ($nama=mysqli_fetch_array($query)) {
                  echo $nama['nama'];
               }
               ?>
               </h2>
            </div>
         </div>
         <br />
         <!-- end = profile admin -->

         <!-- start = side menu -->
         <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
               <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                     <ul class="nav child_menu">
                        <li><a href="kelolaBiodata.php">Kelola Biodata Siswa</a></li>
                        <li><a href="kelolaKuesioner.php">Kelola Kuesioner</a></li>
                        <li><a href="kelolaHasil.php">Kelola Hasil</a></li>
                        <li><a href="kelolaAkun.php">Kelola Akun</a></li>

                     </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Rekap Data <span class="fa fa-chevron-down"></span></a>
                     <ul class="nav child_menu">
                        <li><a href="gayaVisual.php"> Kelola Visual </a></li>
                        <li><a href="gayaAuditori.php"> Kelola Auditori </a></li>
                        <li><a href="gayaKinestetik.php"> Kelola Kinestetik </a></li>
                        <li><a href="prediksiAllSVM.php"> Kelola Prediksi SVM </a></li>
                     </ul>
                  </li>
                  <!-- <li><a><i class="fa fa-edit"></i> Penilaian <span class="fa fa-chevron-down"></span></a>
                     <ul class="nav child_menu">
                        <li><a href="pesanSiswa.php"> Kelola Penilaian Siswa </a></li>
                        <li><a href="pesanGuru.php"> Kelola Penilaian Guru </a></li>
                     </ul>
                  </li> -->
               </ul>
            </div>
         </div>
         <!-- end = side menu -->

      </div>
   </div>
</body>

</html>