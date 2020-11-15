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
		<br><a href="Nuevas_Citas.php"><button type='button' class='btn btn-success'>+ Agregar</button></a><br><br>
<!------------------------------------------------------------------------------------------------------------------------------------------------------>
<div style="overflow-x:auto;">
	   <?php  
	 $_SESSION['id'];
	 ?>
	
	 &nbsp;<h5>Buscador:</h5>
     &nbsp;<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..">
	 <script type="text/javascript" src="/js/list.min.js"></script>

	 
		<table  class="table table-striped  table-hover">	 
		<thead>
		<tr>
		<th><h6>Proveedor</th>
		<th><h6>Cantidad de piezas</th>
		<th><h6>Costo</th>
		<th><h6>Fecha</th>
		<th><h6>Hora</th>
		<th><h6>Estado</th>
		<button class="sort" data-sort="Fecha">Ordenar por fecha</button>
		<button class="sort" data-sort="Estado">Ordenar por estado</button>
	 
       
      </tr>  
	   </thead>	  
	   <tbody id="myTable">
	<?php

		require("Conexion/Connect_db.php");
		$sql=("SELECT  * FROM citas");
		$query=mysqli_query($mysqli,$sql);	

		while($arreglo=mysqli_fetch_array($query))
			{ 
					  	echo "<tr class='active'>";				    	
				    	echo "<td>$arreglo[1]</td>";						
						echo "<td>$arreglo[2]</td>";
						echo "<td>$arreglo[3]</td>";
						echo "<td>$arreglo[4]</td>";
						echo "<td>$arreglo[5]</td>";
						echo "<td>$arreglo[6]</td>";
						
						echo "<td><a href='Actualizar_Cita.php?id=$arreglo[0]'><button type='button' class='btn btn-primary'>Actualizar</button></td>";
						echo "<td><a href='Citas.php?id=$arreglo[0]&idborrar=2'><button type='button' class='btn btn-danger'>Eliminar</button></td>";
					echo "</tr>";
							 
			} 
			 echo "</tbody>";
				echo "</table>";	
				
				extract($_GET);
					if(@$idborrar==2)
					{
						$sqlborrar="DELETE FROM citas WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						echo "<script>location.href='Citas.php'</script>";
					}
			?>
</div>
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