<?php


extract($_GET);	//Extraer todos los valores del metodo post del formulario de actualizar
require("Conexion/Connect_db.php");


mysqli_query($mysqli,"UPDATE inventario SET Nombre='$Nombre',Marca='$Marca',Costo='$Costo',Foto='$Foto' WHERE id='$id'");
		echo '<script>alert("Datos Actualizados")</script> ';
		echo "<script>location.href='Inventario.php'</script>";
		
?>