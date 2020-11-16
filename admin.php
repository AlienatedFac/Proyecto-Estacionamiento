<?php

$_POST['psw'];
if ($_POST['uname']=='admin' and $_POST['psw']=='admin' )
{
    header("Location: usuarios.php");
    die();  
}else
{
    header("Location: index.php");
    die();   
}
?>