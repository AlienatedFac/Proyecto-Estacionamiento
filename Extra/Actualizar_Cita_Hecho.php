<?php


extract($_GET);
require("Conexion/Connect_db.php");


mysqli_query($mysqli,"UPDATE citas SET Proveedor='$Proveedor',Cantidad='$Cantidad',Costo='$Costo',Fecha='$Fecha',Hora='$Hora',Estado='$Estado' WHERE id='$id'");
		echo '<script>alert("Datos Actualizados");location.href ="Citas.php";</script> ';
		
?>