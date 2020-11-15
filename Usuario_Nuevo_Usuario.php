<!DOCTYPE html>
<?php 
session_start()
?>
<html lang="es">

  <head> 
   
   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
   <link rel="shortcut icon" href="assets/ico/favicon.ico">
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
   <script src="bootstrap-3.3.7/js/jQuery-2.1.4.min.js"></script>
   <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
   <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
   <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
   <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
   <meta charset="UTF-8">
   <meta http-equiv="Content-type" content="text/html; charse=iso-8859-1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <link rel="stylesheet" href="css/docc.css"><head>
  </head>
 
 
<body>
<div id="Principal">
   <!-------------Area de trabajo------------>
   <div id="Secundario">
   
   <!-------------Cabecera------------>
    <div id="Header">
	<?php include("include/Cabecera.php");?>
	</div>
	 <!-------------Menu------------>
	<div id="Menu">
	<?php include("include/Menu.php");?>
	</div>
	 <!-------------Contenedor------------>
	<div id="Contenedor">
	
	  <div id="Citas"> 
	    <center><h1>Usuario</h1></center>

	    <center><h1>Nuevo usuario</h1></center>
		<?php
			 
	 ini_set('date.timezone','America/Monterrey');
	 $Time=date("H:i");   
	 $Date=date('d-m-Y');
	 
	 ?>
		
		<form action="Guardar_Nuevo_Usuario.php" method="post">
		
				<center><h6>Nombre <br><input type="text" name="Nombre" value= "" ><br>
				Correo<br><input type="text" name="Sexo" value= "" ><br>
				Contraseña<br><input type="text" name="Edad" value= "" ><br>
			    Fecha de nacimiento<br> <input type="text" name="Fecha_de_nacimiento" value=""><br>
				Sexo<br><input type="text" name="Correo" value= "" ><br>
				Fecha de alta<br><input type="text" name="Fecha_de_alta" value= "" ><br>
				
			
				
				<br>
				<input type="submit" value="Guardar" class="btn btn-danger btn-primary">
	      </form>

	  
   

</body>





