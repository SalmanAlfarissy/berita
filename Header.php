<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Salman Alfarissy Web</title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="./assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="assets/vendors/aos/dist/aos.css/aos.css" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="images/S.png" />

    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
  </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <!-- partial:partials/_navbar.html header-->
        <header id="header">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="navbar-top">
                <div class="d-flex justify-content-between align-items-center">
                 
                    <div class="banner-content">
                     
                        <font size="10px" color=white>Alfarissy News</font>
                    </div>
                    
                  <ul class="navbar-top-right-menu">
                    <li class="nav-item">
                        <input class="form-control form-control-drak w-100" type="text" placeholder="Search" aria-label="Search">
                      <a href="#" class="nav-link w-100"><h1 class="mdi mdi-magnify w-100"></h1></a>
                    </li>
                    <li class="nav-item">
                      <a href="admin/signin.php" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                      <!-- <a href="#" class="nav-link">Sign in</a> -->
                    </li>
                  </ul>
                </div>
              </div>
              <div class="navbar-bottom">
                  
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a class="navbar-brand" href="#"
                      ><img src="assets/images/logo.svg" alt=""
                    /></a>
                  </div>
                  <div>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                      class="navbar-collapse justify-content-center collapse"
                      id="navbarSupportedContent"
                    >
                      <ul
                        class="navbar-nav d-lg-flex justify-content-between align-items-center"
                      >
                        <li>
                          <button class="navbar-close">
                            <i class="mdi mdi-close"></i>
                          </button>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="index.php?page=home">Home</a>
                        </li>
                        
<?php

include "admin/koneksi.php";
    
         $pilih = mysqli_query($koneksi, "SELECT * FROM kategori");
         
                while($p=mysqli_fetch_array($pilih)){
		
                    echo "<li class='nav-item'>
                          <a class='nav-link' href='index.php?idkat=$p[id]&n=$p[nama_kategori]'>$p[nama_kategori]</a>
                        </li>";
                 
	}
     
?>       
                        
                        <li class="nav-item">
                      <a href="index.php?page=about" class="nav-link">About</a>
                    </li>
                      </ul>
                    </div>
                  </div>
                  <ul class="social-media">
                    <li>
                      <a href="https://web.facebook.com">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.youtube.com">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://twitter.com">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </header>

        <!-- partial -->
        <div class="flash-news-banner">
          <div class="container">
            <div class="d-lg-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                
                <p class="mb-0">    
                    
                </p>
                
              </div>
              <div class="d-flex">
                <span class="mr-3 text-danger">
                    <?php
                    echo date('l, d-M-Y');      
                  ?>
                </span>
              </div>
            </div>
          </div>
        </div>
        
       

        <!-- partial -->
      </div>
    </div>
    <!-- inject:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="assets/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="./assets/js/demo.js"></script>
    <script src="./assets/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>
