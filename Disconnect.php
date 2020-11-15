<?php 
session_start();
if($_SESSION['user']){	
	session_destroy();
echo '<script language="javascript">alert("Cerrando sesion");location.href ="index.php";</script> ';
}
else{
echo '<script language="javascript">alert("Cerrando sesion");location.href ="index.php";</script> ';
}
?>