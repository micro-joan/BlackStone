<!DOCTYPE html>
<?php

include("control_sesion/seguridad.php");
include("functions/traductor.php");
include("conexion.php");

$section = "reports";

$url = $_SERVER["REQUEST_URI"];
$urlArray = explode('=', $url);
$id_url = $urlArray[1];

//error_reporting(E_ALL);
//ini_set('display_errors', '1');

?>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BlackStone - <?php echo lang("Reports");?></title>
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

          <?php
                $sentencia = "select * from informes where id=".$id_url;    
                $consulta = mysqli_query($conexion, $sentencia) or die("Error de Consulta");

                //vamos a recorrer la consulta y guardar los datos 
                while($fila= mysqli_fetch_array($consulta)){
                  $id=$fila['id'];
                  $nombre_doc=$fila['nombre_doc'];
                  $id_empresa_auditada=$fila['id_empresa_auditada'];
                  $vulnerabilidades=$fila['vulnerabilidades'];
                  $estado=$fila['estado'];
                  $fecha=$fila['fecha'];
                  $recomendaciones=$fila['recomendaciones'];
                  $propuestas=$fila['propuestas'];

                  $sentencia_empresa = "select * from empresas where id=".$id_empresa_auditada;
                  $consulta_empresa = mysqli_query($conexion, $sentencia_empresa) or die("Error de Consulta empresas");

                  //vamos a recorrer la consulta y guardar los datos
                  while($fila= mysqli_fetch_array($consulta_empresa)){
                      $id_empresa=$fila['id'];
                      $nombre_empresa=$fila['nombre'];
                      
                      $empresa_auditada_seleccionada= "<option value=".$id_empresa.">".$nombre_empresa."</option>";
                  }
                }
            ?> 

            <div class="page-header">
              <h3 class="page-title"> <?php echo lang("Edit report"); echo " "."'".$nombre_doc."'"?> </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="informes.php"><?php echo lang("Reports");?></a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?php echo lang("Edit report");?></li>
                </ol>
              </nav>
            </div>
            
            <div class="row">
              
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <form class="form-sample" form action="" method="post">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><?php echo lang("Document name"); ?></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="nombre_doc" name="nombre_doc" value="<?php echo $nombre_doc ?>" style="color:white;">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><?php echo lang("Company to audit");?></label> 
                            <div class="col-sm-8 col-8">
                              <select class="form-control" id="id_empresa_auditada" style="color:white" name="id_empresa_auditada" required>
                                <?php echo $empresa_auditada_seleccionada ?>
                                <?php 
                        
                                  $sentencia_empresa = "select * from empresas";
                                  $consulta_empresa = mysqli_query($conexion, $sentencia_empresa) or die("Error de Consulta empresas");

                                  //vamos a recorrer la consulta y guardar los datos
                                  while($fila= mysqli_fetch_array($consulta_empresa)){
                                      $id=$fila['id'];
                                      $nombre=$fila['nombre'];
                                      
                                      echo "<option value=".$id.">".$nombre."</option>";
                                  }
                                ?>
                              </select>
                            </div>
                            <label class="col-sm-1 col-1 col-form-label"><i class="mdi mdi-format-line-spacing fs-5"></i></label> 
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row" style="color:white;">
                            <label class="col-sm-3 col-form-label"><?php echo lang("Discharge date"); ?></label>
                            <div class="col-sm-9">
                              <input type="date" class="form-control" id="fecha" name="fecha" style="color:white;" value="<?php echo $fecha?>">
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><?php echo lang("State");?></label> 
                            <div class="col-sm-8 col-8">
                              <select class="form-control" id="estado" style="color:white" name="estado">
                                <option value="<?php echo $estado ?>"><?php echo lang($estado); ?></option>
                                <option value="Terminado"><?php echo lang("Terminado"); ?></option>
                                <option value="En proceso"><?php echo lang("En proceso"); ?></option>
                              </select>
                            </div>
                            <label class="col-sm-1 col-1 col-form-label"><i class="mdi mdi-format-line-spacing fs-5"></i></label> 
                          </div>
                        </div>

                      </div>
                      <br>



                     <div class="row">
                        <div class="col-md-12">
                            <label class="page-title pb-3"><?php echo lang("Vulnerabilities"); ?></label>
                              <input type="text" class="form-control" id="busqueda" placeholder="<?php echo lang("Search vulnerabilities"); ?>" style="color:white;">
                            <br>
                          <div class="card"  style="overflow:scroll; height:420px">
                            
                              <table class="table table-bordered" id="tabla_listado_cve">
                                <thead>
                                  <tr>
                                    <th style="width: 40px"><?php echo lang("Add"); ?></th>
                                    <th><center>CVE</center></th>
                                    <th><?php echo lang("Description"); ?></th>
                                    <th><?php echo lang("Section"); ?></th>
                                  </tr>
                                </thead>
                              
                              <?php

                                $sentencia = "select * from vulnerabilidades order by id";    
                                $consulta = mysqli_query($conexion, $sentencia) or die("Error de Consulta");

                                //vamos a recorrer la consulta y guardar los datos 
                                while($fila= mysqli_fetch_array($consulta)){

                                      $id=$fila['id'];
                                      $cve=$fila['cve'];
                                      $descripcion=$fila['descripcion'];
                                      $nivel=$fila['nivel'];
                                      $seccion_auditoria = $fila['seccion_auditoria'];

                                      if($seccion_auditoria == 1){
                                        $seccion_desc = 'Auditoria Interna';
                                      }else if($seccion_auditoria == 2){
                                          $seccion_desc = 'Externa';
                                      }else if($seccion_auditoria == 3){
                                          $seccion_desc = 'Wifi';
                                      }

                                      $vuln_apuntada = '';

                                      $sentencia_check = "select * from informes where id=".$id_url; 
                                      $consulta_check = mysqli_query($conexion, $sentencia_check) or die("Error de Consulta"); 

                                      while($fila_check= mysqli_fetch_array($consulta_check)){

                                        $vulnerabilidades=$fila_check['vulnerabilidades'];
                                        
                                        if (strpos($vulnerabilidades, $id) !== false) {//si vulnerabilidades contiene un caracter como el de id...
                                          $vuln_apuntada = 'checked';
                                        } 

                                      } 
                                  ?>
                                <tbody>
                                  <tr>
                                    <td><center><input type="checkbox" name="vuln[]" value="<?php echo $id ?>" <?php echo $vuln_apuntada ?>></input></center></td>
                                    <td class="col-md-1"><?php echo $cve;?></td>
                                    <td><?php echo substr($descripcion, 0, 120);?></td>
                                    <td class="col-md-2"><?php echo $seccion_desc;?></td>
                                  </tr>
                              <?php
                                }
                              ?>
                                </tbody>
                              </table>
                          </div>
                      </div>


                      <div class="row pt-4">
                        <div class="form-group row">
                          <label for="col-sm-3 col-form-label"><?php echo lang("Recommendations");?></label>
                          <textarea class="form-control m-3 text-white" name="recomendaciones" id="recomendaciones"><?php echo $recomendaciones ?></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group row">
                          <label for="col-sm-3 col-form-label"><?php echo lang("Proposals");?></label>
                          <textarea class="form-control m-3 text-white" name="propuestas" id="propuestas"><?php echo $propuestas ?></textarea>
                        </div>
                      </div>
                    </div>                
                    <button type="submit" name="submit" id="submit" class="btn btn-primary me-2"><?php echo lang("Save"); ?></button>
                    <a type="button" href="gen_word_tecnico.php?id=<?php echo $id_url ?>" target="_blank" class="btn btn-info me-2"><?php echo lang("Overview report"); ?>&nbsp;<i class="mdi mdi-file-word-box" style="font-size:13px"></i></a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          
            <?php

                if (isset($_POST['submit'])){
                    
                  $nombre_doc = $_POST['nombre_doc'];
                  $id_empresa_auditada = $_POST['id_empresa_auditada'];
                  $fecha = $_POST['fecha'];
                  $estado = $_POST['estado'];
                  $vulnerabilidades = " ";
                  $recomendaciones = $_POST['recomendaciones'];
                  $propuestas = $_POST['propuestas'];

                  
                  foreach($_POST['vuln'] as $selected){
                    $vulnerabilidades .= $selected.",";  
                  }

                  if($vulnerabilidades == ","){
                    $vulnerabilidades = "";
                  }
                  
                  $sentencia = "UPDATE `informes` set `nombre_doc`='$nombre_doc'";
                  $sentencia .=", `id_empresa_auditada`='$id_empresa_auditada', `vulnerabilidades`='$vulnerabilidades'";
                  $sentencia .=", `estado`='$estado', `fecha`='$fecha', `recomendaciones`='$recomendaciones', `propuestas`='$propuestas' WHERE id=".$id_url.";";
                  
                  $consulta = mysqli_query($conexion, $sentencia)or die("Error de Consulta");

                  if (mysqli_affected_rows($conexion)!=0) {

                    echo '<script type="text/JavaScript"> location.reload(); </script>';
          
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