<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estacionamiento";
$id=$_POST['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql2= "DELETE FROM lugares WHERE id= $id";
$sql = "DELETE FROM usuarios WHERE id= $id ";

if ($conn->query($sql) === TRUE) {

  echo'<script type="text/javascript">
  alert("Usuario eliminado :) ");
  window.location.href="../usuarios.php";
</script>';
} 
else 
{
  if ($conn->query($sql2) === TRUE ) 
  {
    if ($conn->query($sql) === TRUE) {

      echo'<script type="text/javascript">
      alert("Usuario eliminado :) ");
      window.location.href="../usuarios.php";
    </script>';
    }
    else
    {
      echo'<script type="text/javascript">
    alert("Error con los datos, no se borro nada ");
    window.location.href="../usuarios.php";
    </script>';
    } 

  }
  else
  {

  
    echo'<script type="text/javascript">
    alert("Error con los datos, no se borro nada ");
    window.location.href="../usuarios.php";
    </script>';

  }
}
?>
