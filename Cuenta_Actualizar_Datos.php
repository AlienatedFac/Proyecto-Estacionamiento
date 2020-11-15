<?php


extract($_GET);
require("Conexion/Connect_db.php");


mysqli_query($mysqli,"UPDATE login SET Nombre='$Nombre',Correo='$Correo',Password='$Password',Fecha_de_nacimiento='$Fecha_de_nacimiento',Sexo='$Sexo',Fecha_de_alta='$Fecha_de_alta' WHERE id='$id'");
		echo '<script>alert("Datos Actualizados")</script> ';
		echo "<script>location.href='Mi_cuenta.php'</script>";
		
?>