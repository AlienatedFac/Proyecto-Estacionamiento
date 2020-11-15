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
	    <center><h1>Nuevas Citas</h1></center>
		<!------------------------------------------------------------------------------------------------------------------------------------------------------>
<div style="overflow-x:auto;">
	   <?php  
	 $_SESSION['id'];
	 
	 ini_set('date.timezone','America/Monterrey');
	 $Time=date("H:i:s");   
	 $Date=date('d-m-Y');
	 ?>
	<form action="Guardar_CitaC.php" method="post">
				<center>Nombre:<br> <input type="text" name="Nombre" value=""><br></center>
				<center>Telefono:<br> <input type="text" name="Telefono" value=""><br></center>
				<center>Fecha: <br> <input type="text" name="Fecha" value=""><br></center>
				<center>Diagnostico: <br> <input type="text" name="Diagnostico" value=""><br></center>
				<center>Detalles: <br> <input type="text" name="Detalles" value=""><br></center> 
			
				<br>
				<center><input type="submit" value="Crear Cita" class="btn btn-success btn-primary"></center>
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