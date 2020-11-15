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
	
	  <div id="MisDatos"> 
	    <center><h1>Mi Cuenta</h1><center>
		
		<div id="">
<!------------------------------------------------------------------------------------------------------------------------------------------------------>	
	 <?php 
		require("Conexion/Connect_db.php");
				$sql=("SELECT * FROM login ");
				$query=mysqli_query($mysqli,$sql);
			$id=$_SESSION['id'];
	 	  while($arreglo=mysqli_fetch_row($query))
	  {
         if ($arreglo[0] == $id) 
		  {
	echo "<table class='table  table-striped  table-hover'>";
	
     echo "<thead>";
	
      echo "<tr>";
      echo"<th ><h5>Número de registro</th>";
	  echo"<th><h5>0000$arreglo[0]</th>";
	  echo"</tr>";
	  
	  echo"<tr>";
      echo"<th><h5>Nombre:</th>";
	  echo"<th><h5>$arreglo[1]</th>";
	  echo"</tr>";
	  
	  echo" <tr>";
      echo" <th><h5>Correo:</th>";
	  echo"<th><h5>$arreglo[2]</th>";
	  echo"  </tr>";
	  
	  echo" <tr>";
      echo" <th><h5>Contraseña:</th>";
	  echo"<th><h5>$arreglo[3]</th>";
	  echo"  </tr>";
	  
	  echo" <tr>";
	  echo"  <th><h5>Editar Datos:</th>";
	  echo"<th><a href='Editar_Mi_cuenta.php?id=$arreglo[0]'><img src='img/descarga (1).png' width='40px' right='50px' class='img-rounded' title='Modifica tus datos'></th>";
      echo" </tr>  ";
	  
	  
	  
	   }}

						                 
		?>
	</table> 
</div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------>		
	  </div>
	</div>
	
   </div>
   
    <div id="Final">
	</div>
	
  </div>

</body>


</html>