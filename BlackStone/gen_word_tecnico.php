<?php 


include("control_sesion/seguridad.php");
include("functions/traductor.php");

$frase_inicial = lang("Guarda esta web en formato .mhtml y abrela en Word para editar el informe!!");
echo "<script>alert('$frase_inicial')</script>";

$uri = $_SERVER["REQUEST_URI"];
$uriArray = explode('=', $uri);

$id_url = $uriArray[1];

if (is_numeric($id_url)) {
  // Aquí puedes continuar con el procesamiento si $id_url es numérico
  //"OK";
} else {
  // Mostrar un mensaje si $id_url no es numérico
  echo "<script>alert('The value entered is not correct.')</script>";
  exit;
}

include("conexion.php");
$sentencia = "select * from informes where id=".$id_url;
$consulta = mysqli_query($conexion, $sentencia) or die("Error de Consulta");

//vamos a recorrer la consulta y guardar los datos
while($fila= mysqli_fetch_array($consulta)){

  $nombre_doc=$fila['nombre_doc'];
  $id_empresa_auditada = $fila['id_empresa_auditada'];
  $fecha = $fila['fecha'];
  $estado = $fila['estado'];
  $recomendaciones = $fila['recomendaciones'];
  $conclusiones = $fila['conclusiones'];

}

//sacamos da de la empresa auditada
$sentencia_empresa_auditada = "select * from empresas where id=".$id_empresa_auditada; 
$consulta_empresa_auditada = mysqli_query($conexion, $sentencia_empresa_auditada) or die("Error de Consulta");

//vamos a recorrer la consulta y guardar los datos
while($fila= mysqli_fetch_array($consulta_empresa_auditada)){
    $id_empresa_audit=$fila['id'];
    $nombre_empresa_auditada=$fila['nombre'];   
    $logo_empresa=$fila['logo']; 
}

?>

<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta name=Generator content="Microsoft Word 15 (filtered)">
    <link rel="stylesheet" href="estilos/estilos_informes.css">
    <title> <?php echo $nombre_doc; ?></title>
  </head>


  <style>

      body{
          max-width: 750px;
          margin: 0 auto;
          padding: 20px;
          background-color:#444d55;
      }

      .contenedor{
          background-color:white;
          padding:70px;
      }
  </style>
  
<body lang=ES link="#0563C1" vlink="#954F72" style='word-wrap:break-word'>
<div class="contenedor">
  <div class=WordSection1>
    
    <p class=MsoBodyText >
      <center><img src="assets/images/report/top-banner.jpg"></center>
    </p>
          
          <p style="margin-left:-3.0cm;text-align:center;font-size:25px;">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <?php echo lang("Penetration Test Report for");?> 
                
                <br>
                <center>
                  <span style="font-family:'Verdana',sans-serif; font-size: 20px;">
                    <b><?php echo $nombre_empresa_auditada; ?></b>
                  </span>
                </center>
                <br>
                <hr>
                <br>
                <span style="font-family:'Verdana',sans-serif;"><?php echo lang("Date");?>: <?php echo $fecha ?></span><br>
                <span style="font-family:'Verdana',sans-serif;"><?php echo lang("Document name");?>: <?php echo $nombre_doc ?></span>
                <br><br><br><br>
          </p>

    <p class=MsoBodyText align=center style='margin-top:0cm;margin-right:23.05pt; margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
      <img width=200 height=200 id=image1.jpeg src="<?php echo $logo_empresa?>" style="border-radius:100px;">
      <img width=100 height=100 id=image1.jpeg src="assets/images/report/logo_portada2.png" style="margin-left:-75px;">
      <br><br><br>
    </p>
    <center>
    <?php $anioActual = date("Y"); ?>

    <span style="font-family:'Verdana',sans-serif; font-size: 12px;">
      Copyright &copy; <?php echo $anioActual; ?> BlackStone Project. All rights reserved.
    </span>
    </center>

    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
    </div>
  <span style='font-size:12.0pt;font-family:"Times New Roman",serif'><br clear=all style='page-break-before:auto'></span>

  <!-- TITULO DEL INFORME -->
  <div class=WordSection2>
    
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    
    <p class=TableParagraph style='margin-top:0cm;margin-right:23.05pt; margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'> 
    <img width=220 height=67 id=image2.jpeg src="assets/images/report/banner-mini.png">
  </p>
  </td>
  </div>

  <span style='font-size:12.0pt;font-family:"Times New Roman",serif'>
    <br clear=all style='page-break-before:always'>
  </span>


  <div style="height: 10px; background-color: #444d55; margin-left: -75px; margin-right: -75px;"></div>


  <!--SE AÑADE PUBLICIDAD DE LA HERRAMIENTA-->
  <span style='font-size:12.0pt;font-family:"Times New Roman",serif'><br clear=all style='page-break-before:auto'></span>

  <p style='margin-top:0cm;margin-right:23.05pt; margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
      <img width=200 height=200 id=image1.jpeg src="assets/images/report/logo_portada2.png" style="margin-left:-75px;">
      <br><br><br>
  </p>

  <p style='margin-top:0cm;margin-right:23.05pt; margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
      <?php echo lang("YOU CAN MAKE REPORTS ON AUDITS AND CERTIFICATION EXAMS WITH THE FREE REPORTING TOOL FOR KALI AND PARROT");?> "<b>BLACKSTONE</b>"
      <br><br>
  </p>

  <p style='margin-top:0cm;margin-right:23.05pt; margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
      <img width=600 height=330 id=image1.jpeg src="assets/images/report/example_interface.png" style="margin-left:-75px;">
      <br><br><br>
  </p>

  <p style='margin-top:0cm;margin-right:23.05pt; margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
      <a href="https://github.com/micro-joan/BlackStone" style="color:blue;">https://github.com/micro-joan/BlackStone</a>
      <br><br>
  </p>
  
  <span style='font-size:12.0pt;font-family:"Times New Roman",serif'>
    <br clear=all style='page-break-before:always'>
  </span>


  <div class=WordSection3>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>

    <h4 style="color:<?php echo $color;?> !important;">
      <?php echo lang("LEGAL WARNING");?>
    </h4>

    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>

    <p>
        <?php echo lang("This document contains confidential and proprietary information which is for the exclusive use of ");?><?php echo $nombre_empresa_auditada?>. <?php echo lang("Unauthorized reproduction or use of this document is strictly prohibited.");?>
    </p>

    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>

    <h4 style="color:<?php echo $color;?> !important;">
        <?php echo lang("DOCUMENT CONTROL");?>
    </h4>

    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>

    <table>
      <!--NOMBRE DOCUMENTO-->
      <tr style='height:35.0pt'>
        <td width=122 valign=top style='width:91.8pt;border:solid black 1.0pt;background:#191c24;padding:0cm 5.4pt 0cm 5.4pt;height:35.0pt'>
          <p class=TableParagraph style='margin-top:6.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
            <b>
              <span style='font-size:10.0pt;font-family:"Verdana",sans-serif;color:white'><?php echo lang("NAME");?><span style='letter-spacing:.05pt'> 
              </span><?php echo lang("DOCUMENT:");?></span>
            </b>
          </p>
        </td>
        <td width=523 valign=top style='width:392.2pt;border:solid black 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:35.0pt'>
          <p class=TableParagraph style='margin-top:.25pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
            <b> <span style='font-size:9.5pt'>&nbsp;</span> </b>
          </p>
          <p class=TableParagraph style='margin-top:.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
            <b>
              <span style='font-size:10.0pt;font-family:"Verdana",sans-serif'><?php echo $nombre_doc; ?><span style='letter-spacing:-.05pt'> 
            </b>
          </p>
        </td>
      </tr>

      <!--AUTOR-->
      <tr style='height:35.0pt'>
        <td width=122 valign=top style='width:91.8pt;border:solid black 1.0pt;background:#191c24;padding:0cm 5.4pt 0cm 5.4pt;height:35.0pt'>
          <p class=TableParagraph style='margin-top:11.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
            <b>
              <span style='font-size:10.0pt;font-family:"Verdana",sans-serif;color:white;'><?php echo lang("AUTHOR:");?><span style='letter-spacing:-.05pt'> 
            </b>
          </p>
        </td>
        <td width=523 valign=top style='width:392.2pt;border:solid black 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:35.0pt'>
          <p class=TableParagraph style='margin-top:.25pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
            <b> <span style='font-size:9.5pt'>&nbsp;</span> </b>
          </p>
          <p class=TableParagraph style='margin-top:.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
            <b>
              <span style='font-size:10.0pt;font-family:"Verdana",sans-serif'>BlackStone<span style='letter-spacing:-.05pt'> 
            </b>
          </p>
        </td>
      </tr>

      <!--CLIENTE-->
      <tr style='height:35.0pt'>
        <td width=122 valign=top style='width:91.8pt;border:solid black 1.0pt;background:#191c24;padding:0cm 5.4pt 0cm 5.4pt;height:35.0pt'>
          <p class=TableParagraph style='margin-top:11.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
            <b>
              <span style='font-size:10.0pt;font-family:"Verdana",sans-serif;color:white'><?php echo lang("CUSTOMER:");?><span style='letter-spacing:.05pt'> 
            </b>
          </p>
        </td>
        <td width=523 valign=top style='width:392.2pt;border:solid black 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:35.0pt'>
          <p class=TableParagraph style='margin-top:.25pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
            <b> <span style='font-size:9.5pt'>&nbsp;</span> </b>
          </p>
          <p class=TableParagraph style='margin-top:.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
            <b>
              <span style='font-size:10.0pt;font-family:"Verdana",sans-serif'><?php echo $nombre_empresa_auditada; ?><span style='letter-spacing:-.05pt'> 
            </b>
          </p>
        </td>
      </tr>
    </table>

    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>

    <h4 style="color:<?php echo $color;?> !important;">
        <?php echo lang("CONFIDENTIALITY STATEMENT");?>
    </h4>

    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>

    <p>
        <?php echo lang("This report contains information regarding possible security breaches of ");?><?php echo $nombre_empresa_auditada?>
        <?php echo lang("and their systems.");?> BlackStone  <?php echo lang("recommends that special precautions be taken to");?>
        <?php echo lang(" protect the confidentiality of this document and the information contained in it.");?> 
        <?php echo lang("All other copies of the report have been delivered to ");?><?php echo $nombre_empresa_auditada?>. <?php echo lang("The security assessment");?> 
        <?php echo lang("it is an uncertain process, based on experiences, currently available information and known threats.");?>
        <?php echo lang("It must be understood that all information systems, by their nature, depend on human beings and are vulnerable in some degree.");?>
    </p>
    
    <p class=MsoBodyText style='margin-top:.4pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>&nbsp;</p>

    <p>
      <?php echo lang("This report");?>
      <?php echo lang("may recommend that");?> <?php echo $nombre_empresa_auditada?> <?php echo lang("use certain software or hardware products manufactured");?>
      <?php echo lang("or maintained by other providers. BlackStone bases these recommendations on of your previous experience with the capabilities of these products. However, Blackstone cannot and should not guarantee that any particular product will perform as advertised by the seller.");?>
    </p>
</div>

<span style='font-size:11.0pt;font-family:"Verdana",sans-serif'><br clear=all style='page-break-before:always'></span>

<div class=WordSection4>


<p class=MsoBodyText style='margin-top:.4pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>&nbsp;</p>

</div>

<div class=WordSection5>
  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:10.0pt'>&nbsp;</span></b></p>
  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b>&nbsp;</b></p>

  <h4 style="color:<?php echo $color;?> !important; text-align: center;">
    <?php echo lang("INDEX");?>
  </h4>
  
  <br><br>
  <h4 style="color:<?php echo $color;?> !important; text-align: center;">
    <?php echo lang("(GENERATE INDEX WITH WORD)");?>
  </h4>
</div>

<span style='font-size:12.0pt;font-family:"Verdana",sans-serif'><br clear=all style='page-break-before:always'></span>

<div class=WordSection6>

<p class=MsoBodyText style='margin-top:.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:21.0pt'>&nbsp;</span></p>

  <h1 style="color:<?php echo $color; ?>" >
      1&nbsp;<?php echo lang("INTRODUCTION");?>
  </h1><br>

  <p>
    <?php echo lang("During the tests, the activities that a real attacker would carry out are simulated, discovering the vulnerabilities, their level of risk, and generating recommendations that allow the client to carry out the remediation of these. Each section of this report details important aspects of how an attacker could use the vulnerability to compromise and gain unauthorized access to sensitive information. Are included In addition, guidelines that, when applied, will improve the levels of confidentiality, integrity and availability of the analyzed systems.");?>
  </p><br>

  <p class=MsoBodyText style='margin-top:.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:21.0pt'>&nbsp;</span></p>
 
  <h2 style="color:<?php echo $color; ?>" >
      1.1&nbsp;<?php echo lang("OBJECTIVE");?>
  </h2><br>

  <p>
    <?php echo lang("The objective of the security evaluation is to detect the existing security vulnerabilities in the analyzed systems in order to subsequently generate a report with the findings and recommendations that allow their remediation.");?>
  </p>  

  <p class=MsoBodyText style='margin-top:.05pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:21.0pt'>&nbsp;</span></p>

  <h2 style="color:<?php echo $color; ?>" >
    1.2&nbsp;<?php echo lang("SCOPE");?>
  </h2><br>

  <p>
    <?php echo lang("The evaluation carried out has focused on the objectives approved in the scope of the contract, which establishes:");?>
  </p> <br>


<table>
  <tr style='height:23.9pt'>
    <td width=70 nowrap style='width:52.75pt;border:solid windowtext 1.0pt; background:#191c24;padding:0cm 3.5pt 0cm 3.5pt;height:23.9pt'>
      <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b>
        <span style='font-family:"Calibri",sans-serif;color:white'>No.</span></b></p>
    </td>
    <td width=380 nowrap style='width:284.7pt;border:solid windowtext 1.0pt;border-left:none;background:#191c24;padding:0cm 3.5pt 0cm 3.5pt;height:23.9pt'>
      <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b>
        <span style='font-family:"Calibri",sans-serif;color:white'><?php echo lang("Objectives");?></span></b></p>
    </td>
  </tr>

  <?php 
  
        $cantidad_objetivos_informe = "select * from scope where id_informe=".$id_url;  
        $consulta_objetivos_informe = mysqli_query($conexion, $cantidad_objetivos_informe) or die("Error de conexión");
        
        $contador_scope = 1;

        while($fila_scope = mysqli_fetch_array($consulta_objetivos_informe)){
            $id_scope=$fila_scope['id'];
            $url_scope=$fila_scope['url'];

            echo"
            
            <tr style='height:23.9pt'>
              <td width=70 nowrap style='width:52.75pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:23.9pt'>
                <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
                  <span style='font-family:'Calibri',sans-serif;color:black'>$contador_scope</span>
                </p>
              </td>
              <td width=380 nowrap style='width:284.7pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:23.9pt'>
                <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
                  <span style='font-family:'Calibri',sans-serif;color:black'>$url_scope</span>
                </p>
              </td>
            </tr>
            ";

            $contador_scope ++;
        }
  
  ?>

</table>

</div>

<span style='font-size:11.0pt;font-family:"Verdana",sans-serif'><br clear=all style='page-break-before:always'></span>

<div class=WordSection9>
  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt'>&nbsp;</span></p>
  
  <h1 style="color:<?php echo $color; ?>" >
    2&nbsp;<?php echo lang("EXECUTIVE SUMMARY");?>
  </h1><br>

  <!--DESARROLLO DE GRAFICO EJECUTIVO--->
  <?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

      $cantidad_criticas = 0;
      $cantidad_altas = 0;
      $cantidad_medias = 0;
      $cantidad_bajas = 0;
      $total_vulnerabilidades = 0;

      $cantidad_objetivos_informe = "select * from scope where id_informe=".$id_url;  
      $consulta_objetivos_informe = mysqli_query($conexion, $cantidad_objetivos_informe) or die("Error de conexión");
      
      
      while($fila_scope = mysqli_fetch_array($consulta_objetivos_informe)){

          $id_scope=$fila_scope['id'];
          $nombre_scope=$fila_scope['url'];

          $cantidad_vulns_scope = "select * from scope_vulnerabilidades where id_scope=".$id_scope." order by nivel desc";  
          $consulta_vulns_scope = mysqli_query($conexion, $cantidad_vulns_scope) or die("Error de conexión");
      
          while($fila_vulns_scope = mysqli_fetch_array($consulta_vulns_scope)){

            $nivel_scope=$fila_vulns_scope['nivel'];
           
            if($nivel_scope == 0){
              $total_vulnerabilidades ++;
            }

            if($nivel_scope == 1){
              $cantidad_bajas ++;
            }else if ($nivel_scope == 2){
              $cantidad_medias ++;
            }else if ($nivel_scope == 3){
              $cantidad_altas ++;
            }else if ($nivel_scope == 4){
              $cantidad_criticas ++;
            }
          }
      }

      $total_vulnerabilidades = $cantidad_altas + $cantidad_bajas + $cantidad_medias + $cantidad_criticas;

      if($cantidad_altas > 0 || $cantidad_criticas > 0 || $cantidad_medias > 0 || $cantidad_bajas > 0){

        $porcentaje_criticas = $cantidad_criticas * 100 / $total_vulnerabilidades;
        $porcentaje_altas = $cantidad_altas * 100 / $total_vulnerabilidades;
        $porcentaje_medias = $cantidad_medias * 100 / $total_vulnerabilidades;
        $porcentaje_bajas = $cantidad_bajas * 100 / $total_vulnerabilidades;

        $porcentaje_criticas = round($porcentaje_criticas, 1);
        $porcentaje_altas = round($porcentaje_altas, 1);
        $porcentaje_medias = round($porcentaje_medias, 1);
        $porcentaje_bajas = round($porcentaje_bajas, 1);

      }else{
        $porcentaje_criticas = 0;
        $porcentaje_altas = 0;
        $porcentaje_medias = 0;
        $porcentaje_bajas = 0;
      }
      
    ?>

  <span style='font-size:11.0pt;font-family:"Verdana",sans-serif'>
    <?php echo lang("You have to capture a screenshot of this graphic to insert it into Word.");?>
  </span>
  <br><br>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>td{border: 1px black solid} th{border: 1px black solid; background-color:black; color:white;}</style>
  <center><canvas id="grafico" width="400" height="300"></canvas></center>
  <br>
  <table id="tabla" style='font-size:11.0pt;font-family:"Verdana",sans-serif;'>
    <tr>
      <th><center><?php echo lang("Vulnerability");?></center></th>
      <th><center><?php echo lang("Amount");?></center></th>
      <th><center><?php echo lang("Percentage");?></center></th>
    </tr>
    <tr>
      <td><center><?php echo lang("Very High");?></center></td>
      <td id="cantidad-criticas"><center><?php echo $cantidad_criticas;?></center></td>
      <td id="porcentaje-criticas"><center><?php echo $porcentaje_criticas;?>%</center></td>
    </tr>
    <tr>
      <td><center><?php echo lang("High");?></center></td>
      <td id="cantidad-altas"><center><?php echo $cantidad_altas;?></center></td>
      <td id="porcentaje-altas"><center><?php echo $porcentaje_altas;?>%</center></td>
    </tr>
    <tr>
      <td><center><?php echo lang("Medium");?></center></td>
      <td id="cantidad-medias"><center><?php echo $cantidad_medias;?></center></td>
      <td id="porcentaje-medias"><center><?php echo $porcentaje_medias;?>%</center></td>
    </tr>
    <tr>
      <td><center><?php echo lang("Low");?></center></td>
      <td id="cantidad-bajas"><center><?php echo $cantidad_bajas;?></center></td>
      <td id="porcentaje-bajas"><center><?php echo $porcentaje_bajas;?></center></td>
    </tr>
  </table>

<script>
  const datos = {
    labels: ['<?php echo lang("Very High");?>', '<?php echo lang("High");?>', '<?php echo lang("Medium");?>', '<?php echo lang("Low");?>'],
    datasets: [{
      data: [<?php echo $cantidad_criticas;?>, <?php echo $cantidad_altas;?>, <?php echo $cantidad_medias;?>, <?php echo $cantidad_bajas;?>], // Reemplaza estos valores con tus datos reales
      backgroundColor: ['#ff1e16', '#ff8018', '#faef22', '#00a933']
    }]
  };

  const ctx = document.getElementById('grafico').getContext('2d');
  const myChart = new Chart(ctx, {
    type: 'doughnut',
    data: datos,
    options: {
      responsive: false,
      maintainAspectRatio: false
    }
  });

  // Función para calcular y mostrar porcentajes en la tabla
  function mostrarPorcentajes() {
    const cantidadTotal = datos.datasets[0].data.reduce((acc, val) => acc + val, 0);
    datos.labels.forEach((label, index) => {
      const cantidad = datos.datasets[0].data[index];
      const porcentaje = ((cantidad / cantidadTotal) * 100).toFixed(2) + '%';
      document.getElementById(`cantidad-${label.toLowerCase()}`).innerText = cantidad;
      document.getElementById(`porcentaje-${label.toLowerCase()}`).innerText = porcentaje;
    });
  }

  // Mostrar porcentajes al cargar la página
  mostrarPorcentajes();
</script>


<!--###############################################-->

<span style='font-size:12.0pt;font-family:"Times New Roman",serif'><br clear=all style='page-break-before:always'></span>

<div class=WordSection10>

  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt'>&nbsp;</span></p>

  <h1 style="color:<?php echo $color; ?>" >
    3&nbsp;<?php echo lang("TEST RESULTS");?>
  </h2><br>

  <h2 style="color:<?php echo $color; ?>" >
    3.1&nbsp;<?php echo lang("Objectives details");?>
  </h2><br>

<?php 

      $cantidad_objetivos_informe = "select * from scope where id_informe=".$id_url;  
      $consulta_objetivos_informe = mysqli_query($conexion, $cantidad_objetivos_informe) or die("Error de conexión");
      
      while($fila_scope = mysqli_fetch_array($consulta_objetivos_informe)){
          $id_scope=$fila_scope['id'];
          $nombre_scope=$fila_scope['url'];

          echo "<h3><u>$nombre_scope</u></h3><br>";

          $cantidad_vulns_scope = "select * from scope_vulnerabilidades where id_scope=".$id_scope." order by nivel desc";  
          $consulta_vulns_scope = mysqli_query($conexion, $cantidad_vulns_scope) or die("Error de conexión");
      
          while($fila_vulns_scope = mysqli_fetch_array($consulta_vulns_scope)){

            $desc_nombre  = lang("Name");
            $criticidad_nivel  = lang("Criticality");
            $desc_descripcion = lang("Description");
            $desc_recomendacion  = lang("Recommendation");

            $id_scope=$fila_vulns_scope['id'];
            $nivel_scope0=$fila_vulns_scope['nivel'];
            $nivel_scope=$fila_vulns_scope['nivel'];
            $nombre_scope=$fila_vulns_scope['nombre'];
            $descripcion_scope=$fila_vulns_scope['descripcion'];
            $recomendacion_scope=$fila_vulns_scope['solucion'];

            if($nivel_scope == 1){
              $nivel_scope = '<label>'.lang('Low').'</label>';
            }else if ($nivel_scope == 2){
              $nivel_scope = '<label>'.lang('Medium').'</label>';
            }else if ($nivel_scope == 3){
              $nivel_scope = '<label>'.lang('High').'</label>';
            }else if ($nivel_scope == 4){
              $nivel_scope = '<label>'.lang('Very High').'</label>';
            }

            echo 
            "<br>
            <p style='text-align:justify !important;'>
              <b>$desc_nombre:</b> ".$nombre_scope."<br>
            </p>";

            echo
            "<p style='text-align:justify !important; '>
              <b>$criticidad_nivel:</b> ".$nivel_scope."<br>
            </p><br>";

            echo 
            "<p style='text-align:justify !important; '>
              <b>$desc_descripcion</b><br><br>".$descripcion_scope."
            </p><br><br>";
            
            $cantidad_vulns_imagen = "select * from pocs where id_scope_vulnerabilidad=".$id_scope;  
            $consulta_vulns_imagen = mysqli_query($conexion, $cantidad_vulns_imagen) or die("Error de conexión");
      
            while($fila_vulns_imagen = mysqli_fetch_array($consulta_vulns_imagen)){
              $scope_imagen=$fila_vulns_imagen['ruta'];
              $descripcion_imagen=$fila_vulns_imagen['descripcion'];
            
              if($scope_imagen > ''){
                  echo "<center><img src='$scope_imagen' width=436 height=300 ><br></center>";
                  echo "<br><p>$descripcion_imagen</p><br>";
              }
            }

            echo
            "<br><p style='text-align:justify !important;'>
              <b>$desc_recomendacion:</b> ".$recomendacion_scope."<br><br>
            </p>";

            echo "<hr>";
          }
      }
  
?>

  <span style='font-size:12.0pt;font-family:"Times New Roman",serif'><br clear=all style='page-break-before:always'></span>

  <!--RECOMENDACIONES-->
  <h1 style="color:<?php echo $color; ?>" >
    4&nbsp;<?php echo lang("Criticality table");?>
  </h1><br>
  
<?php 

      $cantidad_objetivos_informe = "select * from scope where id_informe=".$id_url;  
      $consulta_objetivos_informe = mysqli_query($conexion, $cantidad_objetivos_informe) or die("Error de conexión");
      
      while($fila_scope = mysqli_fetch_array($consulta_objetivos_informe)){
          $id_scope=$fila_scope['id'];
          $nombre_scope=$fila_scope['url'];

          echo "<br><h3>$nombre_scope</h3><br>";

          echo"
          
          <table>
            <tr style='height:14.8pt'>

              <!--CABECERAS-->
                <td width=175 nowrap valign=bottom style='width:300.1pt;border:solid windowtext 1.0pt; background:#191c24;padding:0cm 3.5pt 0cm 3.5pt;height:14.8pt;color:white;'>
                  <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:3.5pt;margin-bottom:.0001pt;'>
                    <b>
                      <span style='font-family:'Calibri',sans-serif;color:white'>$desc_nombre</span>
                    </b>
                  </p>
                </td>
                <td width=165 nowrap valign=bottom style='width:7.55pt;border:solid windowtext 1.0pt;border-left:none;background:#191c24;padding:0cm 3.5pt 0cm 3.5pt;height:14.8pt;color:white;'>
                  <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
                    <b>
                      <span style='font-family:'Calibri',sans-serif;color:white'>$criticidad_nivel</span>
                    </b>
                  </p>
                </td>
              </tr>
          ";

          $cantidad_vulns_scope = "select * from scope_vulnerabilidades where id_scope=".$id_scope." order by nivel desc";  
          $consulta_vulns_scope = mysqli_query($conexion, $cantidad_vulns_scope) or die("Error de conexión");
      
          while($fila_vulns_scope = mysqli_fetch_array($consulta_vulns_scope)){

            $desc_nombre  = lang("Name");
            $criticidad_nivel  = lang("Criticality");
            $desc_descripcion = lang("Description");
            $desc_recomendacion  = lang("Recommendation");

            $id_scope=$fila_vulns_scope['id'];
            $nivel_scope0=$fila_vulns_scope['nivel'];
            $nivel_scope=$fila_vulns_scope['nivel'];
            $nombre_scope=$fila_vulns_scope['nombre'];
            $descripcion_scope=$fila_vulns_scope['descripcion'];
            $recomendacion_scope=$fila_vulns_scope['solucion'];

            if($nivel_scope == 1){
              $nivel_scope = '<label>'.lang('Low').'</label>';
            }else if ($nivel_scope == 2){
              $nivel_scope = '<label>'.lang('Medium').'</label>';
            }else if ($nivel_scope == 3){
              $nivel_scope = '<label>'.lang('High').'</label>';
            }else if ($nivel_scope == 4){
              $nivel_scope = '<label>'.lang('Very High').'</label>';
            }

            echo "
            
            <tr>
              <td width=175 nowrap style='width:300.1pt;border:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:14.8pt'>
                <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-bottom:.0001pt;margin-left:3.5pt;'>
                  <span style='font-size:10.0pt;font-family:'Calibri',sans-serif;color:black'>$nombre_scope</span>
                </p>
              </td>
              
              <td width=165 nowrap style='width:70.55pt;border:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:14.8pt'>
                <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-bottom:.0001pt;margin-left:3.5pt;'>
                  <span style='font-size:10.0pt;font-family:'Calibri',sans-serif;color:black'><center>$nivel_scope</center></span>
                </p>
              </td>
            </tr>
            ";
          }
          echo "</table>";
      }
  
?>



<span style='font-size:11.0pt;font-family:"Verdana",sans-serif'><br clear=all style='page-break-before:always'></span>

  <!--CONCLUSIONES-->
  <h1 style="color:<?php echo $color; ?>" >
    5&nbsp;<?php echo lang("Conclusions");?>
  </h1><br>
  <p>
      <?php echo $conclusiones; ?>
  </p>

<p class=Cabeceraypie>&nbsp;</p>

</div>

</body>

</html>
