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
      href="../assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="../assets/vendors/aos/dist/aos.css/aos.css" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="../images/S.png" />

    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- endinject -->
  </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <!-- partial:partials/_navbar.html -->
        <header id="header">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="navbar-top">
                <div class="d-flex justify-content-between align-items-center">
                    
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                    
                    <div class="banner-content">
                     
                        <font size="10px" color=white>Alfarissy News</font>
                    </div>
                    
                  <ul class="navbar-top-right-menu">
                    <li class="nav-item">
                        <input class="form-control form-control-drak w-100" type="text" placeholder="Search" aria-label="Search">
                      <a href="#" class="nav-link w-100"><h1 class="mdi mdi-magnify w-100"></h1></a>
                    </li>
                    
                    <li class="nav-item">
                          
                        <a class="nav-link" href="../index.php"><font color=white size="5px">Logout</font></a>
                    </li>
                  </ul>  
                    
                </div>
              </div>
                
                
            </nav>
          </div>
        </header>

        
        <div class="content-wrapper" >
          <div class="container">
           
            <div class="row" data-aos="fade-up">
              <div class="col-lg-3 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h2>Category</h2>
                    <ul class="vertical-menu">
                        <li><img src="../images/home.png" height="24px"
align="left"/><a href="?page=home">Home</a></li>
                        <li><img src="../images/category.png" height="24px"
align="left"/><a href="index.php?page=kategori">Kategori</a></li>
                        <li><img src="../images/user.png" height="24px"
align="left"/><a href="index.php?page=user">User</a></li>
                        <li><img src="../images/berita.png" height="24px"
align="left"/><a href="index.php?page=berita">Berita</a></li>
                      
                    </ul>
                  </div>
                </div>
              </div>
                
              <div class="col-lg-9 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                      <main role="main" >
                        <?php
                          include 'main.php';
                        ?>
                      </main>


                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        
        
        <!-- main-panel ends -->
        
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
        <footer>
          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="d-sm-flex justify-content-between align-items-center">
                    <div class="fs-14 font-weight-600">
                        <a class="text-white" align> 2020 @ Tugas Uas Salman Alfarissy </a>
                    </div>
                 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
    <!-- inject:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="../assets/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="../assets/js/demo.js"></script>
    <script src="../assets/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>
