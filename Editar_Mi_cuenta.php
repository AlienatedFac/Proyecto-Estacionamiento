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
	 <!-------------Menu------------>
	<div id="Menu">
	<?php include("include/Menu.php");?>
	</div>
	 <!-------------Contenedor------------>
	<div id="Contenedor">
	
	  <div id="Citas"> 
	    <center><h1>Usuario</h1></center>

	    <center><h1>Editar usuario</h1></center>
		<?php
			 
	 ini_set('date.timezone','America/Monterrey');
	 $Time=date("H:i");   
	 $Date=date('d-m-Y');
	 

		
		extract($_GET);
		require("Conexion/Connect_db.php");

		  $sql="SELECT * FROM login WHERE ID=$id";
		  $ressql=mysqli_query($mysqli,$sql);
		  while ($arreglo=mysqli_fetch_row ($ressql))
		   {
		        $ID = $arreglo[0]; 
				$Nombre = $arreglo[1];
				$Correo =$arreglo[2];
		    	$Password = $arreglo[3];
		    	$Fecha_de_nacimiento = $arreglo[4];
				$Sexo = $arreglo[5];
				$Fecha_de_alta = $arreglo[6];
				
		   }
          ?>
		
		<form action="Cuenta_Actualizar_Datos.php" method="Get">
		       <center>  <h6>ID<br><input type="text" name="id" value= "<?php echo $ID ?>" readonly="readonly"><br>
				Nombre<br><input type="text" name="Nombre" value= "<?php echo $Nombre ?>" ><br>
				Correo<br><input type="text" name="Correo" value= "<?php echo $Correo ?>" ><br>
				Password<br><input type="text" name="Password" value= "<?php echo $Password?>" ><br>
				Fecha de nacimiento<br><input type="text" name="Fecha_de_nacimiento" value= "<?php echo $Fecha_de_nacimiento ?>" ><br>
				Sexo<br><select type="text" name="Sexo" value= "<?php echo $Sexo ?>" ><option>M</option><option>F</option></select><br>
				Fecha de alta<br><input type="text" name="Fecha_de_alta" value= "<?php echo $Fecha_de_alta ?>" ><br>
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
	      </form>
   

</body>
