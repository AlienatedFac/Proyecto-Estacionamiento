<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estacionamiento";
$id=$_POST['id'];
echo $id;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM usuarios WHERE id= $id ";

if ($conn->query($sql) === TRUE) {
    header("Location: ../usuarios.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>