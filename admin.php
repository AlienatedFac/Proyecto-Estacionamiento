<?php

$_POST['psw'];
if ($_POST['uname']=='admin' and $_POST['psw']=='admin' )
{
    header("Location: usuarios.php");
    die();  
}   else
    {
        if ($_POST['uname']=='maestro' and $_POST['psw']=='monaschinas' )
        {
            header("Location: soon/index.html");
            die();  
        }else{
        header("Location: index.php");
        die();  
    }
     
}
?>