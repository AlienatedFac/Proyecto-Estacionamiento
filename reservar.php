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
$var1 = $_POST['de']; $var2 = $_POST['hasta']; $var3 = $_POST['inicio'];$var4 = $_POST['fin'];
$inicio=$var1;
$tope=$var2 + 1; 
while($inicio<$tope)
{
    $sql = "INSERT INTO lugares (id, lugar, hora_entrada, hora_salida, estatus, id_usuario)
    VALUES ($inicio, $inicio, $var3, $var4, 1, 1000 )";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
     $inicio=$inicio+1;
}

$conn->close();
header("Location: trabajador.php");
            die();
?>