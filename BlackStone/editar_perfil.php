<!DOCTYPE html>
<?php

include("control_sesion/seguridad.php");
include("functions/traductor.php");
include("conexion.php");

$section = "perfil";

$url = $_SERVER["REQUEST_URI"];
$urlArray = explode('=', $url);
$id_url = $urlArray[1];

?>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BlackStone - <?php echo lang("Profile");?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/faces/black-stone-transaprent.png" />
  </head>

  <body class="sidebar-icon-only">


    <div class="container-scroller">

    <?php
      include("nav.php");
    ?>
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        
        <!-- partial:partials/_navbar.html -->
        <?php include("nav_top.php"); ?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            <div class="page-header">
              <h3 class="page-title"> <?php echo lang("Edit profile"); ?> </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="vulnerabilidades.php"><?php echo lang("Profile");?></a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?php echo lang("Edit profile");?></li>
                </ol>
              </nav>
            </div>
            
            

            <div class="row">
              
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <form class="form-sample" form action="" method="post" enctype="multipart/form-data">
                      <div class="row">

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><?php echo lang("Change password");?></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="pass" name="pass"  value="" style="color:white;">
                            </div>
                          </div>
                        </div>

                      </div>
                      <button type="submit" name="submit" class="btn btn-primary me-2"><?php echo lang("Save"); ?></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <?php
    
            if (isset($_POST['submit'])){

              $pass = htmlspecialchars($_POST['pass'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
              $contra_hash = password_hash($pass, PASSWORD_DEFAULT);

              $sentencia = "UPDATE `usuarios` SET `contra`='$contra_hash' WHERE id=1";
              $consulta = mysqli_query($conexion, $sentencia)or die("Error de consulta");

              echo "<script>alert('Saved')</script>";
            }
            ?>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <?php echo lang("Free Hacking reporting tool from ");?> <a href="https://microjoan.com/" target="_blank">MicroJoan</a></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

  </body>
</html>
