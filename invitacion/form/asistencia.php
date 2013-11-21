<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="es"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Dejando Huella invitaciones</title>
	<meta name="description" content="esta es la plataforma que crea tus invitaciones de papel a una forma digital
	info: invitaciones@dh-gc.com / 312 803 1077">
	<meta name="author" content="DH-GC-SAS">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="../css/estilos.css" />
  <link rel="stylesheet" href="../css/normalize.css" />
  <link rel="stylesheet" href="../css/responsive.css" />
  <link rel="stylesheet" href="../css/responsive-ipad-horizontal.css" />

  <link rel="stylesheet" type="text/css" href="../font/roboto_thin/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="../font/roboto_bold/stylesheet.css">


  


	

	

	

</head>




<body>

<?php
if (!isset($_POST['Mail'])) {
?>
  
<?php
}else{
  $mensaje="Lista asistencia de mi fiesta / Events";
  $mensaje.= "\nNombre y Apellido familia: ". $_POST['Nombre'];
  $mensaje.= "\nConfirmacion Asistencia: ".$_POST['Mail'];
  
  

  $destino= "dhbairon@gmail.com";
  $remitente = $_POST['Mail'];
  $asunto = "Asistencia evento: ".$_POST['Nombre'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");
?>

  <section id="menu_principal_formcoti">
    <div id="cont_menu_principal_formcoti">
      <img src="../img/logo-w.png">
      <div id="cont_rs_mp_formcoti">
        <a href="https://www.facebook.com/eventsdh" target="blank">F</a>
        <a href="https://twitter.com/dhcolevent" target="blank">T</a>
      </div>
    </div>
  </section>

 
  <section id="box_msn_send_form_coti">
    <div id="cont_box_msn_send_form_coti">

      <p id="title_recibido_form">Mensaje recibido - gracias por contactarnos</p>
      <img src="https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-prn1/1394_359188700892952_1876555254_n.jpg">
      <p>Arbey eventos , tu mejor elección</p>

  </section>

  <section id="footer">
    <div id="cont_footer">
      <img src="../img/logo.png">
      <p>© 2013 DH-GC S.A.S All Rights Reserved.</p>
    </div>
  </section>

<?php
}
?>



</body>
</html>