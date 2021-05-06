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
        <!-- partial:partials/_navbar.html -->
        <?php
        include_once 'Header.php';
        ?>
        
        <div class="content-wrapper">
          <div class="container">
            <div class="row" data-aos="fade-up">
                <?php
                        include_once './main.php';
                ?>

            </div>
 
            <div class="row" data-aos="fade-up">
             
              <div class="col-lg-9 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
<!--                      berita-->
                      <?php
                                      
                        include_once './berita.php';
                       ?>

                  </div>
                </div>
              </div>
                
<!--                 sidebar1-->

                <?php
                       include_once './Sidebar1.php';
                ?>
              
                
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
                    
                    <ul class="social-media mb-3">
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
                    
                  <div class="d-sm-flex justify-content-between align-items-center">
                    <div class="fs-14 font-weight-600">
                      © 2020 @ <a class="text-white"> AlfarissyNews</a>.All rights reserved.
                    </div>
                    <div class="fs-14 font-weight-600">
                      Create by <a class="text-white">Salman Alfarissy</a>
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
