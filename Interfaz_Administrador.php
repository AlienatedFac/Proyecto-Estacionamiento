<!DOCTYPE html>
<?php 
session_start()
?>
<html lang="es">

  <head> 
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="rr.png">
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
   <link rel="shortcut icon" href="assets/ico/favicon.ico">
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
   <script src="bootstrap-3.3.7/js/jQuery-2.1.4.min.js"></script>
   <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
   <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
   <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
   <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="/resources/demos/style.css">
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <meta charset="UTF-8">
   <meta http-equiv="Content-type" content="text/html; charse=iso-8859-1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <link rel="stylesheet" href="css/admin.css?v=<?php echo time(); ?>">
  </head>
 
 
<body>

  <div id="Principal">
   <!-------------Area de trabajo------------>
   <div id="Secundario">
   
   <!-------------Cabecera------------>
    <div id="Header">
	<?php include("include/Cabecera.php");?>
	</div>
	 <!-------------Menu------------------>
	<div id="Menu">
	<?php include("include/Menu.php");?>
	</div>
	 <!-------------Contenedor------------>
	<div id="Contenedor">
	  <div id="Inicio"> 
	    <center><h1>Bienvenido a SmartPark</h1><center>
		<!---Inicio adminitrador----->
	  </div>
	</div>
	
   </div>
   
    <div id="Final">
	</div>
	
  </div>

</body>


</html>