<!DOCTYPE html>
<?php

include("control_sesion/seguridad.php");
include("functions/traductor.php");
include("conexion.php");

$section = "reports";

$url = $_SERVER["REQUEST_URI"];
$urlArray = explode('=', $url);
$id_url = $urlArray[1];

if (is_numeric($id_url)) {
  // Aquí puedes continuar con el procesamiento si $id_url es numérico
  //"OK";
} else {
  // Mostrar un mensaje si $id_url no es numérico
  echo "<script>alert('The value entered is not correct.')</script>";
  exit;
}

?>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BlackStone - <?php echo lang("Scope");?></title>
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
              <h3 class="page-title"> <?php echo lang("Edit asset"); ?> </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="editar_informe.php?id=<?php echo $id_url ?>"><?php echo lang("Report");?></a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?php echo lang("Edit asset");?></li>
                </ol>
              </nav>
            </div>
            
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">

                    <?php
                        $sentencia = "select * from scope where id_informe=".$id_url." order by orden";    
                        $consulta = mysqli_query($conexion, $sentencia) or die("Error de Consulta");

                            //vamos a recorrer la consulta y guardar los datos 
                            while($fila= mysqli_fetch_array($consulta)){

                                $id_scope=$fila['id'];
                                $url_scope=$fila['url'];
                                $orden_scope=$fila['orden'];
                                
                                $nombre= lang("Name");
                                $orden= lang("Order");

                                echo '
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-sm-1 d-none">
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="'.$id_scope.'" name="id">
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="col-sm-3 col-form-label">'.$nombre.'</label>
                                                <input type="text" class="form-control" value="'.$url_scope.'" name="url" style="color:white">
                                            </div>
                                        </div>

                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label class="col-sm-3 col-form-label">'.$orden.'</label>
                                                <input type="text" class="form-control" value="'.$orden_scope.'" name="orden" style="color:white">
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group d-flex">
                                                <button type="submit" class="btn btn-success" name="boton" style="padding-top: 10px; margin-top: 35px;">'.lang("Save").'</button> 
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                ';
                            }
                    ?>
                        <a class="btn btn-primary" href="editar_informe.php?id=<?php echo $id_url ?>" name="boton" style="padding-top: 10px; margin-top: 35px;"><?php echo lang("Return"); ?></a> 
                    </div>
                </div>
            </div>
        </div>
                        

                    
          <?php

            if (isset($_POST['boton'])){

                $id = $_POST['id'];
                $url = $_POST['url'];
                $orden = $_POST['orden'];

                $sentencia = "UPDATE `scope` SET `url`='$url', `orden`='$orden' WHERE id=".$id;

                $consulta = mysqli_query($conexion, $sentencia)or die($sentencia);

                if (mysqli_affected_rows($conexion)!=0) {
                    echo '<script>location.reload();</script>';
                }
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
