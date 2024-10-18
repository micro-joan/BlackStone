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
    <title>BlackStone - <?php echo lang("Reports");?></title>
    <style>
        .contenedor {
          width: 300px;
          margin: 20px auto;
          border: 1px solid #ccc;
          padding: 10px;
        }

        #mostrar {
          display: none;
        }

        #contenido {
          display: none;
        }

        #mostrar:checked ~ #contenido {
          display: block;
        }
    </style>
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
                  $conclusiones0=$fila['conclusiones'];

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
                            <label class="col-sm-3 col-form-label"><?php echo lang("Customer name");?></label> 
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
                            <label class="col-sm-3 col-form-label"><?php echo lang("Deadline"); ?></label>
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

                        <div class="col-md-12" style="width:97%">
                          <div class="form-group row">
                            <label for="col-sm-3 col-form-label"><?php echo lang("Conclusions");?></label>
                            <textarea class="form-control m-3 text-white" name="conclusiones" id="conclusiones" style="height:200px;"><?php echo $conclusiones0 ?></textarea>
                          </div>
                        </div>

                      </div>
                      <button type="submit" name="guardar_cambios_informe" id="guardar_cambios_informe" class="btn btn-primary me-2"><?php echo lang("Save"); ?></button>
                      <a type="button" href="gen_word_tecnico.php?id=<?php echo $id_url ?>" target="_blank" class="btn btn-info me-2"><?php echo lang("Overview report"); ?>&nbsp;<i class="mdi mdi-file-word-box" style="font-size:13px"></i></a>
                    </form>
                    <hr>
                    
                    <!--AÑADIMOS LOS OBJETIVOS DE LA AUDITORÍA-->
                    <div class="row">
                      <div class="col-md-12">
                      <label class="page-title pb-3"><?php echo lang("Objectives"); ?></label>
                      <form id="form_interna" action="" method="post">

                        <div class="row">

                        <?php
                          $sentencia = "select * from scope where id_informe=".$id_url;    
                          $consulta = mysqli_query($conexion, $sentencia) or die("Error de Consulta");

                          $contador_java = 0;

                          //vamos a recorrer la consulta y guardar los datos 
                          while($fila= mysqli_fetch_array($consulta)){

                            $id_scope=$fila['id'];
                            $url_scope=$fila['url'];
                            $orden_scope=$fila['orden'];
                            $texto_vulns= lang("Vulnerabilities associated with");
                            
                            echo '<style> #mostrar'.$contador_java.' {display: none;} #contenido'.$contador_java.' {display: none;} #mostrar'.$contador_java.':checked ~ #contenido'.$contador_java.' {display: block;} </style>';
                            
                            echo '
                                <div class="col-sm-1 d-none">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="'.$id_scope.'" name="id">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span type="text" class="form-control" style="color:white; font-size: 17px;">'.$url_scope.'</span>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                  <div class="form-group d-flex">
                                      <a type="submit" class="btn btn-success" href="editar_scope.php?id='.$id_url.'" style="padding-top: 10px;">'.lang("Edit").'</a>
                                      &nbsp;&nbsp;  
                                      <button type="submit" class="btn btn-danger" name="eliminar_objetivo" value="'.$id_scope.'" style="height:38px;">'.lang("Remove").'</button>
                                  </div>
                                </div>
                                 
                                <div class="col-sm-12">
                                  
                                    <input type="checkbox" id="mostrar'.$contador_java.'">
                                    <label for="mostrar'.$contador_java.'" style="border: 1px white solid; padding: 10px; border-radius: 7px;">
                                      <span style="font-size:15px;">'.lang("Manage vulnerabilities").'</span>
                                    </label>

                                    <div class="col-sm-12" id="contenido'.$contador_java.'" style="background-color:#0f1015; border-radius:10px; padding:15px; margin-top: 15px;">
                                      
                                    <div class="row">
                                      <div class="col-md-12">
                                        <label class="page-title pb-3">'.$texto_vulns.' '.$url_scope.':</label>
                                      </div>

                                      <center>
                                      <table class="table table-bordered" style="width:700px;">
                                      
                                      </tbody>';

                                      $sentencia_vulns_asset = "select * from scope_vulnerabilidades where id_scope=".$id_scope;    
                                      $consulta_vulns_asset = mysqli_query($conexion, $sentencia_vulns_asset) or die("Error de Consulta");

                                      //vamos a recorrer la consulta y guardar los datos 
                                      while($fila_vulns_asset = mysqli_fetch_array($consulta_vulns_asset)){

                                        $id_vuln_scope = $fila_vulns_asset['id'];
                                        $nombre=$fila_vulns_asset['nombre'];
                                        $descripcion=htmlspecialchars($fila_vulns_asset['descripcion'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
                                        $nivel=$fila_vulns_asset['nivel'];
        
                                        if($nivel == 1){
                                            $nivel = '<label class="badge badge-success">'.lang('Low').'</label>';
                                        }else if ($nivel == 2){
                                          $nivel = '<label class="badge badge-warning">'.lang('Medium').'</label>';
                                        }else if ($nivel == 3){
                                          $nivel = '<label class="badge badge-danger">'.lang('High').'</label>';
                                        }else if ($nivel == 4){
                                          $nivel = '<label class="badge badge-info">'.lang('Very High').'</label>';
                                        }
                                        $descripcion = substr($descripcion, 0, 90);

                                        echo'
                                          <tr>
                                            <td class="col-md-1">'.$nombre.'</td>
                                            <td>'.$descripcion.'...</td>
                                            <td><center>'.$nivel.'</center></td>
                                            <td><a href="editar_vulnerabilidad_scope.php?id='.$id_vuln_scope.'" target="_blank"><i class="mdi mdi-border-color" style="font-size:20px"></i></a></td>
                                            <td><a href="eliminar_vulnerabilidad_scope.php?id='.$id_vuln_scope.'='.$id_url.'"><i class="mdi mdi-close-circle-outline" style="color:red; font-size:20px"></i></a></td>
                                          </tr>';
                                      }

                                        echo'
                                          </tbody>
                                        </table>
                                      </center>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-12">
                                          <label class="page-title pb-3">';

                                          echo lang('Vulnerabilities');
                                          
                                          echo'
                                            </label>
                                            <input type="text" class="form-control" id="busqueda_'.$id_scope.'" placeholder="'.lang("Search Vulnerabilities...").'" style="color:white;">
                                          <br>
                                        <div class="card" style="overflow:scroll; height:420px">';
                                        ?>
                                        
                                            <table class="table table-bordered" id="tabla_listado_<?php echo $id_scope; ?>">
                                              <thead>
                                                <tr>
                                                  <th><center><?php echo lang("Add"); ?></center></th>
                                                  <th><?php echo lang("Name"); ?></th>
                                                  <th><?php echo lang("Description"); ?></th>
                                                  <th><center><?php echo lang("Criticality");?></center></th>
                                                </tr>
                                              </thead>
                                            
                                            <?php

                                              $sentencia_vulns = "select * from vulnerabilidades";    
                                              $consulta_vulns = mysqli_query($conexion, $sentencia_vulns) or die("Error de Consulta");

                                              //vamos a recorrer la consulta y guardar los datos 
                                              while($fila_vulns = mysqli_fetch_array($consulta_vulns)){

                                                    $id=$fila_vulns['id'];
                                                    $nombre=$fila_vulns['nombre'];
                                                    $descripcion=htmlspecialchars($fila_vulns['descripcion'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
                                                    $nivel=$fila_vulns['nivel'];
                    
                                                    if($nivel == 1){
                                                        $nivel = '<label class="badge badge-success">'.lang('Low').'</label>';
                                                    }else if ($nivel == 2){
                                                      $nivel = '<label class="badge badge-warning">'.lang('Medium').'</label>';
                                                    }else if ($nivel == 3){
                                                      $nivel = '<label class="badge badge-danger">'.lang('High').'</label>';
                                                    }else if ($nivel == 4){
                                                      $nivel = '<label class="badge badge-info">'.lang('Very High').'</label>';
                                                    }

                                                ?>
                                              <tbody>
                                                <tr>
                                                  <td><center><input type="checkbox" name="vuln[]" value="<?php echo $id; ?>"></input></center></td>
                                                  <td class="col-md-1"><?php echo $nombre;?></td>
                                                  <td><?php echo substr($descripcion, 0, 120);?></td>
                                                  <td><center><?php echo $nivel;?></center></td>
                                                </tr>
                                                <?php
                                                  }
                                                ?>
                                              </tbody>
                                            </table>
                                     
                                      <?php 

                                      $insertar_vulns = lang("Add vulns");

                                        echo '
                                        </div>
                                        <br><button type="submit" class="btn btn-success" id="insertar_vuln_scope" name="insertar_vuln_scope" value="'.$id_scope.'">'.$insertar_vulns.'</button>
                                      </div>
                                    </div>
                                    </div><br><br>
                                </div>
                                ';

                                $contador_java ++;

                          }
                        ?>
                            <hr>
                            <label class="page-title pb-3"><?php echo lang("Add objectives"); ?></label>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="https://www.example.com" name="url" style="color:white">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group d-flex">
                                    <input type="submit" class="btn btn-primary" name="añadir_objetivo" value="<?php echo lang("Add objective"); ?>" style="height: 38px;">
                                </div>
                            </div>
                        </div>

                      </form>
                      </div>
                    </div>

                     <div class="row">
                        <div class="col-md-12">
                      </div>
                    </div> 
                    
                  </div>
                </div>

              </div>
            </div>
          
            <?php

                if (isset($_POST['guardar_cambios_informe'])){
                    
                  $nombre_doc = $_POST['nombre_doc'];
                  $id_empresa_auditada = $_POST['id_empresa_auditada'];
                  $fecha = $_POST['fecha'];
                  $estado = $_POST['estado'];
                  $conclusiones = $_POST['conclusiones'];

                  $sentencia = "UPDATE `informes` set `nombre_doc`='$nombre_doc',";
                  $sentencia .="`id_empresa_auditada`='$id_empresa_auditada',";
                  $sentencia .="`estado`='$estado', `fecha`='$fecha',`conclusiones`='$conclusiones' WHERE id=".$id_url.";";

                  $consulta = mysqli_query($conexion, $sentencia)or die("Error de Consulta");

                  if (mysqli_affected_rows($conexion)!=0) {

                    echo '<script type="text/JavaScript"> location.reload(); </script>';
                  } 
                }

                if (isset($_POST['insertar_vuln_scope'])){

                  $id_scope = $_POST['insertar_vuln_scope'];

                   foreach($_POST['vuln'] as $selected){
                       $vulnerabilidades .= $selected.",";

                       //vamos a comprobar que tipo de vulnerabilidad es y a insertarla en la tabla (la zona del informe, si es interna, externa, wifi...)
                       $sentencia_vuln_1 = "select * from vulnerabilidades where id=".$selected;

                       
                       $consulta_vuln_1 = mysqli_query($conexion, $sentencia_vuln_1) or die("Error de Consulta");
          
                       //vamos a recorrer la consulta y guardar los datos
                       while($fila_vuln_asset = mysqli_fetch_array($consulta_vuln_1)){
                           $id_vulnerabilidad=$fila_vuln_asset['id'];
                           $nombre=$fila_vuln_asset['nombre'];
                           $descripcion=$fila_vuln_asset['descripcion'];
                           $solucion=$fila_vuln_asset['solucion'];
                           $nivel=$fila_vuln_asset['nivel'];
                       }

                       //sacamos el último orden de la tabla de este tipo de auditoría
                        $sentencia_ultimo_id = "SELECT id FROM scope_vulnerabilidades ORDER BY id DESC LIMIT 1;" ;
                        $consulta_ultimo_id = mysqli_query($conexion, $sentencia_ultimo_id)or die($sentencia);

                        while($fila_id = mysqli_fetch_array($consulta_ultimo_id)) {
                            $ultimo_id = $fila_id['id'];
                        }

                        $ultimo_id_scope = $ultimo_id +=1;
          
                       $sentencia_insertar_vuln_asset = "INSERT INTO `scope_vulnerabilidades`(`id`, `id_vulnerabilidad`, `nombre`, `descripcion`, `nivel`, `id_scope`, `solucion`)";
                       $sentencia_insertar_vuln_asset .= "VALUES ('$ultimo_id_scope','$id_vulnerabilidad','$nombre','$descripcion','$nivel', '$id_scope', '$solucion')";
          
                       $consulta = mysqli_query($conexion, $sentencia_insertar_vuln_asset)or die("Error de Consulta");
          
                       if (mysqli_affected_rows($conexion)!=0) {
                           echo '<script>window.location.href = "editar_informe.php?id='.$id_url.'";</script>';
                       }
                       
                   }
               }

                //Añadir nuevos scopes al informe
                if (isset($_POST['añadir_objetivo'])){

                  $url = $_POST['url'];

                  //sacamos el último orden de la tabla de este tipo de auditoría
                  $sentencia_ultimo_orden = "SELECT orden FROM scope ORDER BY orden DESC LIMIT 1;" ;
                  $consulta_ultimo_orden = mysqli_query($conexion, $sentencia_ultimo_orden)or die($sentencia);

                  while($fila_orden = mysqli_fetch_array($consulta_ultimo_orden)) {
                      $orden = $fila_orden['orden'];
                  }

                  $ultimo_orden = $orden +=1;

                  //insertamos datos en scope
                  $sentencia_scope = "INSERT INTO `scope` (`url`, `id_informe`, `orden`)";
                  $sentencia_scope .= " VALUES ('$url', '$id_url', '$ultimo_orden')";

                  $consulta_scope = mysqli_query($conexion, $sentencia_scope) or die("error");

                  if (mysqli_affected_rows($conexion)!=0) {
                      echo "<script>alert('Saved')</script>";
                      echo '<script>window.location.href = "editar_informe.php?id='.$id_url.'";</script>';
                  }
              }

              //Editar scopes al informe
              if (isset($_POST['eliminar_objetivo'])){

                  $id_scope = $_POST['eliminar_objetivo'];
          
                  $sentencia = "DELETE FROM scope WHERE id=".$id_scope;
                  $consulta = mysqli_query($conexion, $sentencia)or die($sentencia);

                  $sentencia = "DELETE FROM scope_vulnerabilidades WHERE id_scope=".$id_scope;
                  $consulta = mysqli_query($conexion, $sentencia)or die($sentencia);

                  echo "<script>alert('Saved')</script>";
                  echo '<script>window.location.href = "editar_informe.php?id='.$id_url.'";</script>';
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

    <?php
          $sentencia = "select * from scope where id_informe=".$id_url;    
          $consulta = mysqli_query($conexion, $sentencia) or die("Error de Consulta");

          //vamos a recorrer la consulta y guardar los datos 
          while($fila= mysqli_fetch_array($consulta)){

            $id_scope=$fila['id'];
            
            echo '
                
                <script>

                $(document).ready(function(){
                $("#busqueda_'.$id_scope.'").keyup(function(){
                _this = this;

                $.each($("#tabla_listado_'.$id_scope.' tbody tr"), function() {

                    if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
                    $(this).hide();
                    else
                        $(this).show();
                      });
                  });
                });
                </script>

                ';
              }
                ?>

  </body>
</html>
