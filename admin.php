<?php
require("Conexion/Connect_db.php");
$boton="";
$id=$_POST['uname'];
$contra= $_POST['psw'];
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$sql2=mysqli_query($mysqli,"SELECT id, contrasena FROM  usuarios WHERE id='$id' and contrasena= '$contra' and tipo= 'admin' " );
if($f2=mysqli_fetch_assoc($sql2))
{
   
    echo'<script type="text/javascript">
    alert("¡Bienvenido de nuevo!");
    window.location.href="usuarios.php";
  </script>';
}   else
    {
        $sql2=mysqli_query($mysqli,"SELECT id, contrasena FROM  usuarios WHERE id='$id' and contrasena= '$contra' and tipo= 'maestro' " );
        if($f2=mysqli_fetch_assoc($sql2))
        {
            echo'<script type="text/javascript">
      alert("¡Bienvenido de nuevo!");
      window.location.href="trabajador.php";
    </script>';
        }else{
            echo'<script type="text/javascript">
            alert("Usuario o contraseña incorrectos\n Revisa tus datos");
            window.location.href="index.php";
          </script>';  
    }
     
}
?>