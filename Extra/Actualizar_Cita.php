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
	    <center><h1>Citas</h1></center>

	    <center><h1>Actualizar Cita</h1></center>
		<?php
			 
	 ini_set('date.timezone','America/Monterrey');
	 $Time=date("H:i");   
	 $Date=date('d-m-Y');
	 

		
		extract($_GET);
		require("Conexion/Connect_db.php");

		  $sql="SELECT * FROM citas WHERE ID=$id";
		  $ressql=mysqli_query($mysqli,$sql);
		  while ($arreglo=mysqli_fetch_row ($ressql))
		   {
		    	$idcita = $arreglo[0];
				$Proveedor = $arreglo[1];
				$Cantidad = $arreglo[2];
		    	$Costo = $arreglo[3];
		    	$Fecha = $arreglo[4];
				$Hora = $arreglo[5];
		        $Estado = $arreglo[6];
				
		   }
          ?>
		
		<form action="Actualizar_Cita_Hecho.php" method="get">
				<center>Numero de registro<br><input type="text" name="id" value= "<?php echo $_SESSION['id'];  ?>"readonly="readonly" ><br></center>
				<center>Proveedor<br><select type="text" name="Proveedor" value= "">
				<option>ACdelco</option>
				<option>Arca</option>
				<option>ATE</option>
				<option>Autopar</option>
				<option>BOSCH</option>
				<option>BRENBO</option>
				<option>BRUCK</option>
				<option>Castrol</option>
				<option>Dorma</option>
				<option>Duralast</option>
				<option>Gonher</option>
				<option>Kitaco</option>
				<option>LUK</option>
				<option>MORESA</option>
				<option>OSRAM</option>
				<option>ProSport</option>
				<option>Recal</option>
				<option>Roda</option>
				<option>Stock</option>
				<option>TAYLOR</option>
				<option>Universal Obd2</option>
				<option>WiSeco</option>
				<option>Marca del vehículo</option>
				</select><br>
				Cantidad de piezas<br> <input type="text" name="Cantidad" value="<?php echo $Cantidad ?>"><br>
				Costo <br> <input type="text" name="Costo" value="<?php echo $Costo ?>"><br>
				Fecha cita <br> <input type="date" name="Fecha" value="<?php echo $Fecha ?>"><br>
				Hora cita <br> <input type="time" name="Hora" value="<?php echo $Hora ?>"><br>
				Estado <br> <select type="text" name="Estado" value=""><option>Activa</option><option>Pospuesta</option><option>Cancelada</option></select><br>
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
	      </form>
   

</body>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

</script>