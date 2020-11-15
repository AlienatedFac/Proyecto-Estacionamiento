<?php

	$Cajon=$_POST['Cajon'];  	
	$Estado=$_POST['Estado']; 
	$Llegada=$_POST['Llegada']; 
	$Salida=$_POST['Salida'];  	
	
	
	
	require("Conexion/Connect_db.php");
	mysqli_query($mysqli,"INSERT INTO inventario VALUES('','$Cajon','Reservado','$Llegada','$Salida')");
	
	echo '<script language="javascript">alert("Reservacion guardada con exito");location.href ="Inventario.php";</script> ';
	
	
	
?>
<html>
<body>

</body>
</html>