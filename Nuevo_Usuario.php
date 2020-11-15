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
   <link rel="stylesheet" href="css/NuevoU.css">
  </head>
 
 
<body>

  <div id="Principal">
   <!-------------Area de trabajo------------>
   <div id="Secundario">
   
   <!-------------Cabecera------------>
    <div id="Header">
	
	</div>
	 <!-------------Menu------------>
	<div id="Menu">
	
	</div>
	 <!-------------Contenedor------------>
	<div id="Contenedor">
	  <div id="Pacientes_Secretaria"> 
	  <font face color= white> <h1>Registrate</h1></font>
	   <font face color= white> <center><h1>Nuevo usuario </h1></center></font>
	   
		<?php
			 
	 ini_set('date.timezone','America/Monterrey');
	 $Time=date("H:i");   
	 $Date=date('d-m-Y');
	 
	 ?>
		
		<form action="Guardar_Nuevo_Usuario.php" method="post">
		
				<font FACE="arial" SIZE=3.5 face color= white ><center><h6>Nombre <br><input type="text" name="Nombre" value= "" ><br></font>
				<font FACE="arial" SIZE=3.5 face color= white >Correo<br><input type="text" name="Correo" value= "" ><br></font>
				<font FACE="arial" SIZE=3.5 face color= white >Password<br><input type="text" name="Password"></font><br>
			    <font FACE="arial" SIZE=3.5 face color= white >Fecha de nacimiento<br> <input type="date" name="Fecha_de_nacimiento" value=""><br></font>
				<font FACE="arial" SIZE=3.5 face color= white >Sexo<br> <select name="Sexo" value=""></font><option>M</option><option>F</option></select><br>
				<font FACE="arial" SIZE=3.5 face color= white >Fecha de alta<br></font> <input type="text" name="Fecha_de_alta" value="<?php echo $Date ?>"readonly="readonly"><br>
				
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary"></center>
	      </form>

	  </div>
	</div>
	
   </div>
   
    <div id="Final">
	</div>
	
  </div>

</body>