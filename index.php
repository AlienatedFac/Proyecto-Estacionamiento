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
		        <a class="nav-link" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Usuario Avanzado<span class="sr-only">(current)</span></a>
		      </li>
		</div>
		     <img src="img/logo2.png" width="12%">
	</nav>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-5" align="center">
				<img src="img/qr.jpg" width="40%">
				<br><br>
			</div>
			<div class="col-7">
				<table class="table" bgcolor="white">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Nombre</th>
				      <th scope="col">Apellidos</th>
				      <th scope="col">Estacionamiento</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  		$sql2=mysqli_query($mysqli, "SELECT usuarios.id, usuarios.nombre, usuarios.apellido, lugares.lugar FROM usuarios INNER JOIN lugares ON usuarios.id = lugares.id_usuario");
						while($f2=mysqli_fetch_assoc($sql2))
						{
					?>
							<tr>
						      <th scope="row"><?php echo $f2["id"]; ?></th>
						      <td><?php echo $f2["nombre"]; ?></td>
						      <td><?php echo $f2["apellido"]; ?></td>
						      <td><?php echo $f2["lugar"]; ?></td>
						    </tr>
					<?php
						}
				  	?>
				  </tbody>
				</table>
			</div>
			<div class="col-4">
				
				  <tbody>
				    <?php
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
						for ($n1=1; $n1<=TAM; $n1++)
						{
							if ($n1 % 2 == 0) //Si la división de la variable $n1 entre dos da 0 creamos una fila gris
								echo "<tr>";
							else
								echo "<tr>"; //creamos fila blanca cuando no sea divisible entre 2
							for ($n2=1; $n2<=TAM; $n2++)
							{
								// if(){
								// 	echo "<td>", $n, "</td>"; //creamos una celda y mostramos el número
							 // 		$n=$n+1; //sumamos 1 al número mostrado para la siguiente vuelta del bucle
								// }else{
								// 	echo "<td>", $n, "</td>"; //creamos una celda y mostramos el número
							 // 		$n=$n+1; //sumamos 1 al número mostrado para la siguiente vuelta del bucle
								// }
								echo "<td>", $n, "</td>"; //creamos una celda y mostramos el número
								$n=$n+1; //sumamos 1 al número mostrado para la siguiente vuelta del bucle				
							}
							echo "</tr>"; //cerramos la fila
						}
						echo "</tbody>";
						echo "</table>"; //cerramos la tabla
					?>
			</div>
			
		</div>

	</div>
<footer class="page-footer font-small pt-4 foot">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Footer Content</h5>
        <p>Here you can use rows and columns to organize your footer content.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
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