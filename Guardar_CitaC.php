<?php

	$Nombre=$_POST['Nombre'];  
	$Telefono=$_POST['Telefono']; 
	$Fecha=$_POST['Fecha'];	
	$Diagnostico=$_POST['Diagnostico'];   	
	$Detalles=$_POST['Detalles'];
	
	
	
	require("Conexion/Connect_db.php");
	mysqli_query($mysqli,"INSERT INTO clientes VALUES('','$Nombre','$Telefono','$Fecha','$Diagnostico','$Detalles')");
	
	echo '<script language="javascript">alert("Cita guardada con exito");location.href ="Clientes.php";</script> ';
	
	
	
?>