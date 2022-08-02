<?php 

include("control_sesion/seguridad.php");
include("functions/traductor.php");

$uri = $_SERVER["REQUEST_URI"];
$uriArray = explode('=', $uri);

$id_url = $uriArray[1];


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

}

//sacamos da de la empresa auditada
$sentencia_empresa_auditada = "select * from empresas where id=".$id_empresa_auditada; 
$consulta_empresa_auditada = mysqli_query($conexion, $sentencia_empresa_auditada) or die("Error de Consulta");

//vamos a recorrer la consulta y guardar los datos
while($fila= mysqli_fetch_array($consulta_empresa_auditada)){
    $id_empresa_audit=$fila['id'];
    $nombre_empresa_auditada=$fila['nombre'];   
}

?>

<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta name=Generator content="Microsoft Word 15 (filtered)">
    <link rel="stylesheet" href="estilos/estilos_informes.css">
    <title> <?php echo $nombre_doc; ?></title>
  </head>
  
<body lang=ES link="#0563C1" vlink="#954F72" style='word-wrap:break-word'>

  <div class=WordSection1>
    <p class=MsoBodyText style='margin-top:.45pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:11.5pt;font-family:"Times New Roman",serif'> </span></p>

    <p class=MsoBodyText align=center style='margin-top:0cm;margin-right:23.05pt;
    margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'><img
    width=300 height=300 id=image1.jpeg src="assets/images/report/logo_portada.png"></p>

    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
    </div>
  <span style='font-size:12.0pt;font-family:"Times New Roman",serif'><br clear=all style='page-break-before:auto'></span>

  <!-- TITULO DEL INFORME -->
  <div class=WordSection2>
    <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=662 style='width:496.5pt;margin-left:11.55pt;border-collapse:collapse'>
      <tr style='height:200.55pt'>
        <td width=662 valign=top style='width:496.5pt;padding:0cm 5.4pt 0cm 5.4pt;height:200.55pt'>
            <p class=TableParagraph align=center style='margin-top:0cm;margin-right:90.05pt; margin-bottom:0cm;margin-bottom:.0001pt;text-align:center;line-height:26.8pt'>
            <b>
              
            <h1 style="align:center; margin-left:-3.0cm;text-align:center">
              <?php echo $nombre_doc; ?><br>
               <br>
               <?php echo $fecha ?>
            </h1>
              

            </b>
          </p>
        </td>
      </tr>
    </table>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>
    <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:13.0pt'>&nbsp;</span></b></p>

    <p class=TableParagraph style='margin-top:0cm;margin-right:23.05pt;
    margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'> 
    <img width=220 height=67 id=image2.jpeg src="assets/images/report/banner-mini.png"
    alt=""></p>
  </td>
  </div>
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
        <span style='font-family:"Calibri",sans-serif;color:white'><?php echo lang("Description activities");?></span></b></p>
    </td>
  </tr>

  <!--AUDITORIA INTERNA-->
  <tr style='height:23.9pt'>
    <td width=70 nowrap style='width:52.75pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:23.9pt'>
      <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
        <span style='font-family:"Calibri",sans-serif;color:black'>1</span>
      </p>
    </td>
    <td width=380 nowrap style='width:284.7pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:23.9pt'>
      <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
        <span style='font-family:"Calibri",sans-serif;color:black'><?php echo lang("Internal audit");?></span>
      </p>
    </td>
  </tr>

  <!--AUDITORIA EXTERNA-->
  <tr style='height:23.9pt'>
    <td width=70 nowrap style='width:52.75pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:23.9pt'>
      <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
        <span style='font-family:"Calibri",sans-serif;color:black'>2</span>
      </p>
    </td>
    <td width=380 nowrap style='width:284.7pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:23.9pt'>
      <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
        <span style='font-family:"Calibri",sans-serif;color:black'><?php echo lang("External audit");?></span>
      </p>
    </td>
  </tr>

  <!--AUDITORIA WIFI-->
  <tr style='height:23.9pt'>
    <td width=70 nowrap style='width:52.75pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:23.9pt'>
      <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
        <span style='font-family:"Calibri",sans-serif;color:black'>3</span>
      </p>
    </td>
    <td width=380 nowrap style='width:284.7pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:23.9pt'>
      <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>
        <span style='font-family:"Calibri",sans-serif;color:black'><?php echo lang("Wifi audit");?></span>
      </p>
    </td>
  </tr>
</table>

</div>

<span style='font-size:11.0pt;font-family:"Verdana",sans-serif'><br clear=all style='page-break-before:always'></span>

<div class=WordSection9>
  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt'>&nbsp;</span></p>
  
  <h1 style="color:<?php echo $color; ?>" >
    2&nbsp;<?php echo lang("EXECUTIVE SUMMARY");?>
  </h1><br>

<span style='font-size:12.0pt;font-family:"Times New Roman",serif'><br clear=all style='page-break-before:always'></span>

<div class=WordSection10>

  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'><span style='font-size:10.0pt'>&nbsp;</span></p>

  <h1 style="color:<?php echo $color; ?>" >
    3&nbsp;<?php echo lang("TEST RESULTS");?>
  </h2><br>

  <h2 style="color:<?php echo $color; ?>" >
    3.1&nbsp;<?php echo lang("Internal audit");?>
  </h2><br>

   <!--LISTAMOS LAS VULNERABILIDADES DE LA AUDITORÍA INTERNA-->
   <?php 
        
        $sentencia = "select * from informes where id=".$id_url;
        $consulta = mysqli_query($conexion, $sentencia) or die("4.1.2 error consulta=".$sentencia);

        //vamos a recorrer la consulta y guardar los datos
        while($fila= mysqli_fetch_array($consulta)){
            $vulnerabilidades=$fila['vulnerabilidades'];
            
            $separador = ",";
            $vulns_separadas = explode($separador, $vulnerabilidades);//aqui obtenemos los id de cada una de las vulns del informe

           foreach ($vulns_separadas as $vuln){//obtenemos el id de la vulnerabilidad

            if($vuln > ''){

             $sentencia_vuln_1 = "select * from vulnerabilidades where id=".$vuln;
             $consulta_vuln_1 = mysqli_query($conexion, $sentencia_vuln_1) or die("Error en listado de vulnerabilidades globales= ".$sentencia_vuln_1);

             while($fila_vuln= mysqli_fetch_array($consulta_vuln_1)){
                $descripcion=$fila_vuln['descripcion'];
                $solucion=$fila_vuln['solucion'];
                $seccion_auditoria=$fila_vuln['seccion_auditoria'];

                if($seccion_auditoria == 1){//si la vulnerabilidad es de la sección 1 la listamos

                  echo 
                  "<p style='text-align:justify !important; '>
                    ".$descripcion."<br>
                  </p><br>";


                  echo "
                  <p class=MsoBodyText style='margin-top:.15pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
                    <span style='position:relative;z-index:251655680'>
                      <span style='left:0px;position:absolute;left:67px;top:-1060px;width:477px;height:199px'>
                        <img width=450 height=120 src='assets/images/report/vuln_sample.png'>
                      </span>
                    </span>
                  </p><br>";

                  echo 
                  "<p style='text-align:justify !important; '>
                      <b>Se recomienda: </b>".$solucion."
                  </p><br><br>";
                  
                  
                  echo "<p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:1.0cm;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:17.0pt'>&nbsp;</span></b></p>

                  ";
                }
              } 
            }
           }
        }
    ?>

  <span style='font-size:12.0pt;font-family:"Times New Roman",serif'><br clear=all style='page-break-before:always'></span>

  <h2 style="color:<?php echo $color; ?>" >
    3.2&nbsp;<?php echo lang("External audit");?>
  </h2><br>

  <!--LISTAMOS LAS VULNERABILIDADES DE LA AUDITORÍA EXTERNA-->
   <?php 
        $sentencia = "select * from informes where id=".$id_url;
        $consulta = mysqli_query($conexion, $sentencia) or die("Error de Consulta");

        //vamos a recorrer la consulta y guardar los datos
        while($fila= mysqli_fetch_array($consulta)){
            $vulnerabilidades=$fila['vulnerabilidades'];
            $separador = ",";
            $vulns_separadas = explode($separador, $vulnerabilidades);//aqui obtenemos los id de cada una de las vulns del informe

           foreach ($vulns_separadas as $vuln){//obtenemos el id de la vulnerabilidad

            if($vuln > ''){

             $sentencia_vuln_1 = "select * from vulnerabilidades where id=".$vuln;
             $consulta_vuln_1 = mysqli_query($conexion, $sentencia_vuln_1) or die("Error de Consulta");

             while($fila_vuln= mysqli_fetch_array($consulta_vuln_1)){
                $descripcion=$fila_vuln['descripcion'];
                $solucion=$fila_vuln['solucion'];
                $seccion_auditoria=$fila_vuln['seccion_auditoria'];

                if($seccion_auditoria == 2){//si la vulnerabilidad es de la sección 1 la listamos

                  echo 
                  "<p style='text-align:justify !important; '>
                    ".$descripcion."<br>
                  </p><br>";


                  echo "
                  <p class=MsoBodyText style='margin-top:.15pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
                    <span style='position:relative;z-index:251655680'>
                      <span style='left:0px;position:absolute;left:67px;top:-1060px;width:477px;height:199px'>
                        <img width=450 height=120 src='assets/images/report/vuln_sample.png'>
                      </span>
                    </span>
                  </p><br>";

                  echo 
                  "<p style='text-align:justify !important; '>
                      <b>Se recomienda: </b>".$solucion."
                  </p><br><br>";
                  
                  
                  echo "<p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:1.0cm;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:17.0pt'>&nbsp;</span></b></p>

                  ";
                }
              } 
            }
           }
        }
    ?>


  <span style='font-size:11.0pt;font-family:"Verdana"'><br clear=all style='page-break-before:always'></span>

  <h2 style="color:<?php echo $color; ?>" >
        3.3&nbsp;<?php echo lang("Wifi audit");?>
  </h2><br>

  <p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>&nbsp;</p>

  <!--LISTAMOS LAS VULNERABILIDADES DE LA AUDITORÍA WIFI-->
  <?php 
        $sentencia = "select * from informes where id=".$id_url;
        $consulta = mysqli_query($conexion, $sentencia) or die("Error de Consulta");

        //vamos a recorrer la consulta y guardar los datos
        while($fila= mysqli_fetch_array($consulta)){
            $vulnerabilidades=$fila['vulnerabilidades'];
            $separador = ",";
            $vulns_separadas = explode($separador, $vulnerabilidades);//aqui obtenemos los id de cada una de las vulns del informe

           foreach ($vulns_separadas as $vuln){//obtenemos el id de la vulnerabilidad

            if($vuln > ''){

             $sentencia_vuln_1 = "select * from vulnerabilidades where id=".$vuln;
             $consulta_vuln_1 = mysqli_query($conexion, $sentencia_vuln_1) or die("Error de Consulta");

             while($fila_vuln= mysqli_fetch_array($consulta_vuln_1)){
                $descripcion=$fila_vuln['descripcion'];
                $solucion=$fila_vuln['solucion'];
                $seccion_auditoria=$fila_vuln['seccion_auditoria'];

                if($seccion_auditoria == 3){//si la vulnerabilidad es de la sección 1 la listamos

                  echo 
                  "<p style='text-align:justify !important; '>
                    ".$descripcion."<br>
                  </p><br>";


                  echo "
                  <p class=MsoBodyText style='margin-top:.15pt;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
                    <span style='position:relative;z-index:251655680'>
                      <span style='left:0px;position:absolute;left:67px;top:-1060px;width:477px;height:199px'>
                        <img width=450 height=120 src='assets/images/report/vuln_sample.png'>
                      </span>
                    </span>
                  </p><br>";

                  echo 
                  "<p style='text-align:justify !important; '>
                      <b>Se recomienda: </b>".$solucion."
                  </p><br><br>";
                  
                  
                  echo "<p class=MsoBodyText style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:1.0cm;margin-bottom:.0001pt;text-align:justify'><b><span style='font-size:17.0pt'>&nbsp;</span></b></p>

                  ";
                }
              } 
            }
           }
        }
    ?>

  <span style='font-size:11.0pt;font-family:"Verdana",sans-serif'><br clear=all style='page-break-before:always'></span>


  <!--CONCLUSIONES-->
  <h1 style="color:<?php echo $color; ?>" >
    4&nbsp;<?php echo lang("CONCLUSIONS");?>
  </h1><br>

  

  <span style='font-size:11.0pt;font-family:"Verdana",sans-serif'><br clear=all style='page-break-before:always'></span>

  <!--RECOMENDACIONES-->
  <h1 style="color:<?php echo $color; ?>" >
    5&nbsp;<?php echo lang("RECOMMENDATIONS");?>
  </h1><br>

  <ul>
    <?php 
        $sentencia = "select * from informes where id=".$id_url;
        $consulta = mysqli_query($conexion, $sentencia) or die("Error de Consulta");

        //vamos a recorrer la consulta y guardar los datos
        while($fila= mysqli_fetch_array($consulta)){
            $recomendaciones=$fila['recomendaciones'];
            $recomendaciones = nl2br($recomendaciones);//convertimos el espacio de SQL por \n
            $separador = "\n";
            $recomendaciones_separadas = explode($separador, $recomendaciones);

            foreach ($recomendaciones_separadas as $recomendacion){

              if (strlen($recomendacion) != 7){

                echo "
                  <li style='margin-bottom: 9px; font-family:verdana; font-size:11pt'>
                    <span>".$recomendacion."</span>
                  </li>
                ";

              }
              
            }
        }
      ?>
  </ul>
  
  <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify'>&nbsp;</p>

  <h2 style="color:<?php echo $color; ?>" >
    5.1&nbsp;<?php echo lang("Infrastructure improvement proposals");?>
  </h2><br>

  <ul>
    <?php 
        $sentencia = "select * from informes where id=".$id_url;
        $consulta = mysqli_query($conexion, $sentencia) or die("Error de Consulta");

        //vamos a recorrer la consulta y guardar los datos
        while($fila= mysqli_fetch_array($consulta)){
            $propuestas=$fila['propuestas'];
            $propuestas = nl2br($propuestas);//convertimos el espacio de SQL por \n
            $separador = "\n";
            $propuestas_separadas = explode($separador, $propuestas);

            foreach ($propuestas_separadas as $propuesta){

              if (strlen($propuesta) != 7){

                echo "
                  <li style='margin-bottom: 9px; font-family:verdana; font-size:11pt'>
                    <span>".$propuesta."</span>
                  </li>
                ";

              }
              
            }
        }
      ?>
  </ul>


  <span style='font-size:11.0pt;font-family:"Verdana",sans-serif'><br clear=all style='page-break-before:always'></span>


  <!--TABLA DE CRITICIDAD-->
  <h2 style="color:<?php echo $color; ?>" >
    5.2&nbsp;<?php echo lang("Criticality table");?>
  </h2><br>

<table>
  <tr style='height:14.8pt'>

    <!--CABECERAS-->
      <td width=175 nowrap valign=bottom style='width:300.1pt;border:solid windowtext 1.0pt; background:#191c24;padding:0cm 3.5pt 0cm 3.5pt;height:14.8pt'>
        <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:3.5pt;margin-bottom:.0001pt;'>
          <b>
            <span style='font-family:"Calibri",sans-serif;color:white'><?php echo lang("Recommendation");?></span>
          </b>
        </p>
      </td>
      <td width=165 nowrap valign=bottom style='width:7.55pt;border:solid windowtext 1.0pt;border-left:none;background:#191c24;padding:0cm 3.5pt 0cm 3.5pt;height:14.8pt'>
        <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
          <b>
            <span style='font-family:"Calibri",sans-serif;color:white'><?php echo lang("Criticality");?></span>
          </b>
        </p>
      </td>
      <td width=187 nowrap valign=bottom style='width:90.55pt;border:solid windowtext 1.0pt;border-left:none;background:#191c24;padding:0cm 3.5pt 0cm 3.5pt;height:14.8pt'>
        <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
          <b>
            <span style='font-family:"Calibri",sans-serif;color:white'><?php echo lang("Effort");?></span>
          </b>
        </p>
      </td>
    </tr>




      <!--LISTAMOS LAS VULNERABILIDADES DE LA AUDITORÍA EXTERNA-->
   <?php 
        $sentencia = "select * from informes where id=".$id_url;
        $consulta = mysqli_query($conexion, $sentencia) or die("Error de Consulta");

        //vamos a recorrer la consulta y guardar los datos
        while($fila= mysqli_fetch_array($consulta)){
            $vulnerabilidades=$fila['vulnerabilidades'];
            $separador = ",";
            $vulns_separadas = explode($separador, $vulnerabilidades);//aqui obtenemos los id de cada una de las vulns del informe

           foreach ($vulns_separadas as $vuln){//obtenemos el id de la vulnerabilidad

            if($vuln > ''){

             $sentencia_vuln_1 = "select * from vulnerabilidades where id=".$vuln;
             $consulta_vuln_1 = mysqli_query($conexion, $sentencia_vuln_1) or die("Error de Consulta");

             while($fila_vuln= mysqli_fetch_array($consulta_vuln_1)){
                $descripcion=$fila_vuln['descripcion'];
                $solucion=$fila_vuln['solucion'];
                $seccion_auditoria=$fila_vuln['seccion_auditoria'];
                $recomendacion=$fila_vuln['recomendacion'];
                $criticidad = $fila_vuln['nivel'];
                $esfuerzo = $fila_vuln['esfuerzo'];

                if($criticidad == 1){
                    $nivel = lang("Low");
                }else if ($criticidad == 2){
                    $nivel = lang("Medium");
                }else if ($criticidad == 3){
                    $nivel = lang("High");
                }else if ($criticidad == 4){
                    $nivel = lang("Very High");
                }

                if($esfuerzo == 1){
                    $esfuerzo_desc = 'Quick Win';
                }else if($esfuerzo == 2){
                    $esfuerzo_desc = lang("Low");
                }else if($esfuerzo == 3){
                  $esfuerzo_desc = lang("Medium");
                }else if($esfuerzo == 4){
                  $esfuerzo_desc = lang("High");
                }else if($esfuerzo == 5){
                  $esfuerzo_desc = lang("Very High");
                }

                ?>

                  <tr>
                    <td width=175 nowrap style='width:300.1pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:14.8pt'>
                      <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-bottom:.0001pt;margin-left:3.5pt;'>
                        <span style='font-size:10.0pt;font-family:"Verdana";color:black'><?php echo $recomendacion ?></span>
                      </p>
                    </td>
                    <td width=165 nowrap style='width:70.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:14.8pt;font-family:"Verdana";font-size:10pt;'>
                      <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
                        <span style='font-size:10.0pt;font-family:"Verdana";color:black'><?php echo $nivel ?></span>
                      </p>
                    </td>
                      <td width=187 nowrap style='width:90.55pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:14.8pt'>
                        <p class=MsoNormal style='margin-top:0cm;margin-right:23.05pt;margin-bottom:0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-align:center'>
                        <span style='font-size:9.0pt;font-family:"Verdana";color:black'><?php echo $esfuerzo_desc ?></span>
                      </p>
                    </td>
                  </tr>
                   
              <?php
              } 
            }
           }
        }
    ?>
</table>


<p class=Cabeceraypie>&nbsp;</p>

</div>

</body>

</html>
