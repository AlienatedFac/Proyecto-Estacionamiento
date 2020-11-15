<?php

	$Proveedor=$_POST['Proveedor'];  
	$Cantidad=$_POST['Cantidad']; 
	$Costo=$_POST['Costo'];
	$Fecha=$_POST['Fecha'];	
	$Hora=$_POST['Hora'];   	
	$Estado=$_POST['Estado'];
	
	
	
	require("Conexion/Connect_db.php");
	mysqli_query($mysqli,"INSERT INTO citas VALUES('','$Proveedor','$Cantidad','$Costo','$Fecha','$Hora','$Estado')");
	
	echo '<script language="javascript">alert("Cita guardada con exito");location.href ="Citas.php";</script> ';
	
	
	
?>