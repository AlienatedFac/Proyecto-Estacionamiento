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
	
	  <div id="Usuarios"> 
	    <center><h1>Usuarios</h1></center>
		<!------------------------------------------------------------------------------------------------------------------------------------------------------>
<div style="overflow-x:auto;">
	   <?php  
	 $_SESSION['id'];
	 ?>
	
	 &nbsp;<h5>Buscador:</h5>
     &nbsp;<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..">
	 
	 
	
	 <table  class="table table-striped  table-hover">
	   <thead>
       <tr>
       <th><h6>Nombre</th>
	   <th><h6>Correo</th> 
	   <th><h6>Fecha de nacimiento</th>
	   <th><h6>Sexo</th>
       <th><h6>Fecha de alta</th>	
	   
       
      </tr>  
	   </thead>	  
	   <tbody id="myTable">
	<?php

		require("Conexion/Connect_db.php");
		$sql=("SELECT  * FROM login");
		$query=mysqli_query($mysqli,$sql);	
		
		while($arreglo=mysqli_fetch_array($query))
			{                    
						echo "<tr class='active'>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[4]</td>";
						echo "<td>$arreglo[5]</td>";
						echo "<td>$arreglo[6]</td>";
				    	
						echo "</tr>";
				 
			} 
			 echo "</tbody>";
				echo "</table>";					
					
				extract($_GET);
					if(@$idborrar==2)
					{
						$sqlborrar="DELETE FROM login WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						echo "<script>location.href='Usuario_Filtro.php'</script>";
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