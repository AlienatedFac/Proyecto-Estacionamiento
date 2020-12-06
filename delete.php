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
$var1 = $_POST['de']; $var2 = $_POST['hasta'];
$inicio=$var1;
$tope=$var2 + 1; 
while($inicio<$tope)
{
    $sql = "DELETE FROM  lugares WHERE lugar=$inicio";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record DELETED successfully";
      echo'<script type="text/javascript">
      alert("¡Lugares Eliminados!");
      window.location.href="reservaradmin.php";
    </script>';
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      echo "New record DELETED successfully";
      echo'<script type="text/javascript">
      alert("¡Error, puerba de nuevo!");
      window.location.href="reservaradmin.php";
    }
     $inicio=$inicio+1;
}
?>
