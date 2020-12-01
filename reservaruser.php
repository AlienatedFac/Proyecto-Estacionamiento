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
$var1 = $_POST['lugar']; $var3 = $_POST['inicio'];$var4 = $_POST['fin'];
    $sql = "INSERT INTO lugares (id, lugar, hora_entrada, hora_salida, estatus, id_usuario)
    VALUES ($var1, $var1, $var3, $var4, 1, 1100 )";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
     $inicio=$inicio+1;


$conn->close();
header("Location: usuarioprovisional.php");
            die();
?>