<html>

<head>
   <title></title>
</head>

<body>
   <div class="top_nav">
      <div class="nav_menu">
         <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
         </div>

         <nav class="nav navbar-nav">
            <ul class=" navbar-right">
               <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown"
                     data-toggle="dropdown" aria-expanded="false">
                     <img src="../src/assets/images/icon.png" alt=""><?php echo $_SESSION['username'];?>
                  </a>

                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="logout.php">
                        <i class="fa fa-sign-out pull-right"></i> Log Out
                     </a>
                  </div>
               </li>
            </ul>
         </nav>
      </div>
   </div>
</body>

</html>