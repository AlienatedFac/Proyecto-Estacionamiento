<?php


extract($_GET);
require("Conexion/Connect_db.php");


mysqli_query($mysqli,"UPDATE citas SET Proveedor='$Proveedor',Cantidad_piezas='$Cantidad_piezas',Costo='$Costo',Fecha_cita='$Fecha_cita',Hora_cita='$Hora_cita',Estado='$Estado' WHERE id='$id'");
		echo '<script>alert("Datos Actualizados")</script> ';
		echo "<script>location.href='Citas.php'</script>";
		
?>