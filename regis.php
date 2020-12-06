<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estacionamiento";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$var1 = $_POST['id']; $var2 = $_POST['nombre']; $var3 = $_POST['apellidos'];$var4 = $_POST['correo']; $var5=$_POST['tipo']; $var6=$_POST['contrasena']; 

    $sql = "INSERT INTO usuarios (id, contrasena, nombre, apellido, Correo, imagen, Tipo)
    VALUES ($var1, '$var6', '$var2', '$var3', '$var4', 'imagen/default.png' ,'$var5'  )";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      echo'<script type="text/javascript">
      alert("Usuario Registrado");
      window.location.href="usuarios.php";
    </script>';
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();

//header("Location: usuarios.php");
            //die();
?>