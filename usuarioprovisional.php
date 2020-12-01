<?php 
	require("Conexion/Connect_db.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Estacionamiento</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/modal.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/trab.css">
	<link rel="shortcut icon" href="img/iconos/logo.ico">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<!-- Navbar content -->
  		<a class="navbar-brand" href="index.php">
  			Estacionamiento
  		</a>
  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
			  <a class="nav-link" href="usuarios.php">Usuario Avanzado<span class="sr-only">(current)</span></a>
		      </li>
		</div>
		     <img src="img/logo2.png" width="12%">
	</nav>
    <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Alerta!</strong> Esta es una Interfaz de usuario de Prueba
</div>
	<br>
	<div class="container">
		<div class="row">
		<div class="col-5">
				
				<tbody>
				  <?php
					  $sql3=mysqli_query($mysqli, "SELECT * FROM lugares");
					  
					  $esta = array();
					  $conta=0;

					  while ($f3=mysqli_fetch_assoc($sql3)){
						  $esta[$conta] = $f3["lugar"];
						  $conta++;
					  }
					  
					  $num = count($esta);
					  
					  

					  define('TAM',10); //definimos la constante para el tamaño
					  echo "<table border=1 class='table' bgcolor='white'>"; //creamos la tabla
					  echo "<thead class='thead-dark'>
							  <tr>
									<th scope='col'></th>
									<th scope='col'></th>
									<th scope='col'></th>
									<th scope='col'></th>
									<th scope='col'></th>
									<th scope='col'></th>
									<th scope='col'></th>
									<th scope='col'></th>
									<th scope='col'></th>
									<th scope='col'></th>
							  </tr>
							   </thead>";
						echo "<tbody>";
					  $n=1;
					  
					  for ($n1=1, $rec=0; $n1<=TAM; $n1++)
					  {	
						  if ($n1 % 2 == 0) //Si la división de la variable $n1 entre dos da 0 creamos una fila gris
							  echo "<tr>";
						  else
							  echo "<tr>"; //creamos fila blanca cuando no sea divisible entre 2
						  for ($n2=1; $n2<=TAM; $n2++)
						  {	
							  for ($i=0; $i < 1; $i++) { 
								  
								  if( $rec<$num and $esta[$rec] == $n){
									  echo "<td bgcolor='red'>", $n, "</td>"; //creamos una celda y mostramos el número
									  $n=$n+1;
									  $rec=$rec+1; //sumamos 1 al número mostrado para la siguiente vuelta del bucle	
								  }else{
									  echo "<td bgcolor='green'>", $n, "</td>"; //creamos una celda y mostramos el número
									  $n=$n+1; //sumamos 1 al número mostrado para la siguiente vuelta del bucle	
								  }
							  }
						  }
						  echo "</tr>"; //cerramos la fila
					  }
					  echo "</tbody>";
					  echo "</table>"; //cerramos la tabla
				  ?>
		  </div>
			<div class="col-7">
				<table class="table" bgcolor="white">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">Lugar</th>
				      <th scope="col">Hora de Inicio</th>
				      <th scope="col">Hora de Fin</th>
                      <th scope="col">OK</th>
				    </tr>
				  </thead>
				  <tbody>
							<tr>
                            <form action="reservaruser.php" method="post">
						      <th><input type="text" name="lugar" placeholder="Lugar"></th>
						      <td><input type="text" name="inicio" placeholder="00:00"></td>
						      <td><input type="text" name="fin" placeholder="00:00"></td>
                              <td><button class="btn btn-success"  type="submit">Reservar</button></td>
                            </form>
						    </tr>
					
				  </tbody>
			</div>
			
			
		</div>

	</div>
<!-- Footer -->
	<div id="id01" class="modal">
  
	  <form class="modal-content animate" action="admin.php" method="post">
	    

	    <div class="container">
			<label for="uname"><b>Inserte sus creedenciales de Administrador o Trabajador</b></label>
		      <label for="uname"><b>Usuario</b></label>
		      <input type="text" placeholder="Ingresa el Usuario de administrador" name="uname" required>

		      <label for="psw"><b>Password</b></label>
		      <input type="password" placeholder="Ingresa la contraseña" name="psw" required>
		        
		      <button type="submit">Login</button>
		    </div>

		    <div class="container" style="background-color:#f1f1f1">
		      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
		      <span class="psw">Olvidaste la <a href="#">Constraseña?</a></span>
		    </div>
		  </form>
		</div>
	<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}
	</script>
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>