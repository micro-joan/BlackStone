<!DOCTYPE html>
<?php

include("control_sesion/seguridad.php");
include("functions/traductor.php");
include("conexion.php");

$section = "vulnerabilidades";

$url = $_SERVER["REQUEST_URI"];
$urlArray = explode('=', $url);
$id_url = $urlArray[1];

?>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BlackStone - <?php echo lang("Customers");?></title>
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
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="<?php echo lang("Search Reports"); ?>">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0"><?php echo lang("Messages");?></h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="https://microjoan.com/" target="_blank">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/microjoan.png" href="https://microjoan.com/" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">MicroJoan</p>
                      <p class="text-muted mb-0">  <?php echo lang("Now");?> </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item" href="future_news.php" target="_blank">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/news.png" href="future_news.php" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">System</p>
                      <p class="text-muted mb-0">  <?php echo lang("Now");?> </p>
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="assets/images/faces/black-stone.png" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">BlackStone</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0"><?php echo lang("Profile");?></h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="editar_perfil.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1"><?php echo lang("Settings"); ?></p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="cerrar_sesion.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1"><?php echo lang("Log out"); ?></p>
                    </div>
                  </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            <div class="page-header">
              <h3 class="page-title"> <?php echo lang("Add client"); echo " ".$id_url?> </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="clientes.php"><?php echo lang("Companies");?></a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?php echo lang("Add client");?></li>
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
                            <label class="col-sm-3 col-form-label"><?php echo lang("Name");?></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="<?php echo lang("Name");?>" value="<?php echo $nombre?>" style="color:white;">
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Web</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="web" name="web" placeholder="Web" value="<?php echo $web?>" style="color:white;">
                            </div>
                          </div>
                        </div>
                         <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                            <h2>Logo</h2>
                                <input id="imagen" name="imagen" size="30" type="file">
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
              
              /*error_reporting(E_ALL);
              ini_set('display_errors', 1);*/

              $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
              $web = htmlspecialchars($_POST['web'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
              $nombre_img = $_FILES['imagen']['name'];
              $nombreOriginal = $_FILES['imagen']['name'];
	      $nombreTemporal = $_FILES['imagen']['tmp_name'];

	      $file_extension = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
	      
	      // Comprobar si la extensión es png
		if (strtolower($file_extension) == 'png') {
		  
		  echo "Archivo subido correctamente.";
		} else {
		    
		    echo "<script>alert('Only PNG images.')</script>";
		    exit;
		}

		//=============================================================
        	// Obtener la extensión del archivo
	      $extension = pathinfo($nombreOriginal, PATHINFO_EXTENSION);
        
                // Generar un nuevo nombre para la imagen
	      $nuevoNombre = uniqid(bin2hex(openssl_random_pseudo_bytes(10)), true).".".$extension;
		
		// Ruta donde se guardará la imagen
	      $rutaDestino = 'logos_clientes/';

		// Mover la imagen al directorio de destino con el nuevo nombre
	      move_uploaded_file($_FILES['imagen']['tmp_name'],$rutaDestino.$nuevoNombre);
		
	      $logo = $rutaDestino.$nuevoNombre;
              
              $ultimo_id = "SELECT * FROM `empresas` ORDER BY id DESC LIMIT 1";
              $consulta_ultimo_id = mysqli_query($conexion, $ultimo_id)or die("Error al conseguir el ultimo id");

              while($fila= mysqli_fetch_array($consulta_ultimo_id)){
                $id=$fila['id'];
              }
              $id = $id + 1;
              
              $sentencia = "INSERT INTO `empresas`(`id`, `nombre`, `web`, `logo`)";
              $sentencia .=" VALUES ($id, '$nombre','$web', '$logo')";

              $consulta = mysqli_query($conexion, $sentencia)or die("Error de consulta");

              echo "<script>alert('Saved')</script>";

              if (mysqli_affected_rows($conexion)!=0) {
                header('Location: clientes.php');
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

    <script>
      // Write on keyup event of keyword input element
      $(document).ready(function(){
      $("#busqueda").keyup(function(){
      _this = this;
      // Show only matching TR, hide rest of them
      $.each($("#tabla_listado_cve tbody tr"), function() {

          if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
          $(this).hide();
          else
              $(this).show();
            });
        });
      });
      </script>
  </body>
</html>
