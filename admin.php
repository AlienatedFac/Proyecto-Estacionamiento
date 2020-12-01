<?php
require("Conexion/Connect_db.php");
$boton="";
$id=$_POST['uname'];
$contra= $_POST['psw'];
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$sql2=mysqli_query($mysqli,"SELECT id, contrasena FROM  usuarios WHERE id='$id' and contrasena= '$contra' and tipo= 'admin' " );
if($f2=mysqli_fetch_assoc($sql2))
{
   
    header("Location: usuarios.php");
    die();  
}   else
    {
        $sql2=mysqli_query($mysqli,"SELECT id, contrasena FROM  usuarios WHERE id='$id' and contrasena= '$contra' and tipo= 'maestro' " );
        if($f2=mysqli_fetch_assoc($sql2))
        {
            header("Location: trabajador.php");
            die();  
        }else{
        header("Location: index.php");
        die();  
    }
     
}
?>