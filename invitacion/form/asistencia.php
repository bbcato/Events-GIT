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
  <link rel="stylesheet" href="../css/stilos.css" />
  <link rel="stylesheet" href="../css/normalize.css" />
  
  <link rel="stylesheet" type="text/css" href="../css/font/Raleway/stylesheet.css">


</head>




<body>

<?php
if (!isset($_POST['Mail'])) {
?>
  
<?php
}else{
  $mensaje="Lista asistencia de mi fiesta / Events";
  $mensaje.= "\nNombre y Apellido familia: ". $_POST['Nombre'];
  $mensaje.= "\nConfirmacion Asistencia: ".$_POST['Confirmacion'];
  $mensaje.= "\nCorreo electronico: ".$_POST['Mail'];
  
  

  $destino= "dhbairon@gmail.com";
  $remitente = $_POST['Mail'];
  $asunto = "Asistencia evento: ".$_POST['Nombre'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");
?>

  <nav>
    <div id="cont_nav">
      <div class="box_btn_menu">
        <a href="../index.html" class="btn_menu_inv"><img src="../images/perfil.png"></a>
      </div>
      <div class="box_btn_menu">
        <a href="../ubicacion.html" class="btn_menu_inv"><img src="../images/locacion.png"></a>
      </div>
      <div class="box_btn_menu">
        <a href="../mensaje.html" class="btn_menu_inv"><img src="../images/mensaje.png"></a>
      </div>
      <div class="box_btn_menu color_bc">
        <a href="../organizador.html" class="btn_menu_inv"><img src="../images/favorito.png"></a>
      </div>
      
    </div>
  </nav>


  <section id="Datos_inv">
    <div id="Cont_Datos_inv">

      <p id="Name_principal">Tu Confirmacion a sido recibida.</p>
      <p id="Type_evento">Este evento es coordinado y organizado por:</p>
      <div id="cont_fecha_inv">
        <figure><img src="../images/icon_calendar.png" class="object_fecha_inv"> <p id="Fecha_evento" class="object_fecha_inv">Arbey eventos , tu mejor elección</p></figure>
        
      </div>

    </div>

  </section>

 
  <section id="Descripcion_msn_send">
    <div id="Cont_Description_msn_send">

      <img src="https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-ash4/1003899_377147855763703_928844088_n.png">
      <p>Vas aorganizar una fiesta pronto?</p>
      <p> Cotizar tu evento con nosotros.</p>
      <button><a href="#">Aqui</a></button>

  </section>

  <footer>
      <p>© 2013 DH-GC S.A.S All Rights Reserved.</p>
  </footer>
    

<?php
}
?>



</body>
</html>