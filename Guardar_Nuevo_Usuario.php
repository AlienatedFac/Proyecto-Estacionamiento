<?php

	$Nombre=$_POST['Nombre'];  
	$Correo=$_POST['Correo']; 
	$Password=$_POST['Password'];
	$Fecha_de_nacimiento=$_POST['Fecha_de_nacimiento'];	
	$Sexo=$_POST['Sexo'];   	
	$Fecha_de_alta=$_POST['Fecha_de_alta']; 
	
	
	
	require("Conexion/Connect_db.php");
	mysqli_query($mysqli,"INSERT INTO login VALUES('','$Nombre','$Correo','$Password','$Fecha_de_nacimiento','$Sexo','$Fecha_de_alta')");
	
	echo '<script language="javascript">alert("Registro guardado con exito");location.href ="index.php";</script> ';
	
	
	
?>
<html>
<body>

</body>
</html>