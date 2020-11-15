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
   <link rel="stylesheet" href="css/docc.css">
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
	    <center><h1>Citas del dia</h1></center>
<!------------------------------------------------------------------------------------------------------------------------------------------------------>
	   <?php  
	 
	 ini_set('date.timezone','America/Monterrey');
	 $Time=date("H:i:s");   
	 $Date=date('d-m-Y');
	 
	 
	  extract($_GET);
		require("Conexion/Connect_db.php");

		  $sql="SELECT * FROM citas WHERE id=$id";
		  $ressql=mysqli_query($mysqli,$sql);
		  while ($arreglo=mysqli_fetch_row ($ressql))
		   {
		    	$id = $arreglo[0];
				$Proveedor = $arreglo[1];
				$Cantidad_piezas =$arreglo[2];
		    	$Costo= $arreglo[3];
		    	$Fecha_cita= $arreglo[4];
				$Hora_cita= $arreglo[5];
		        $Estado= $arreglo[6];
					
		   }
              

		  ?>
	<form action="Marcar_Cita.php" method="Get">
				<center>Numero de registro<br><input type="text" name="id" value= "<?php echo $_SESSION['id'];  ?>"readonly="readonly" ><br></center>
				<center>Proveedor<br><select type="text" name="Proveedor" value= ""><option>Proveedor 1</option><option>Proveedor 2</option></select><br>
				Cantidad de piezas:<br> <input type="text" name="Cantidad_piezas" value="<?php echo $Cantidad_piezas ?>"><br>
				Costo: <br> <input type="text" name="Costo" value="<?php echo $Costo ?>"><br>
				Fecha cita: <br> <input type="date" name="Fecha_cita" value="<?php echo $Fecha_cita ?>"><br>
				Hora cita: <br> <input type="time" name="Hora_cita" value="<?php echo $Hora_cita ?>"><br>
				Estado <br> <select type="text" name="Estado" value="<?php echo $Estado ?>"><option>Activa</option><option>Pospuesta</option><option>Cancelada</option></select><br>
			
				<br>
				<input type="submit" value="Actualizar Cita" class="btn btn-success btn-primary">
	      </form>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------>
	  </div>
	</div>
	
   </div>
   
    <div id="Final">
	</div>
	
  </div>

</body>


</html>