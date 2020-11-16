<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Estacionamiento</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/modal.css">
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
		        <a class="nav-link" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Usuarios<span class="sr-only">(current)</span></a>
		      </li>
		</div>
		     <img src="img/logo2.png" width="12%">
	</nav>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-4">
				<img src="img/qr.jpg" width="50%">
				<br><br>
			</div>
			<div class="col-8">
				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Nombre</th>
				      <th scope="col">Apellidos</th>
				      <th scope="col">Hora de Entrada</th>
				      <th scope="col">Hora de Salida</th>
				      <th scope="col">Estacionamiento</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Jaziel</td>
				      <td>Lopez</td>
				      <td>1:30</td>
				      <td>3:30</td>
				      <td>Estacionamiento 20</td>
				    </tr>
					<tr>
				      <th scope="row">1</th>
				      <td>Fernando</td>
				      <td>Araujo</td>
				      <td>1:30</td>
				      <td>3:30</td>
				      <td>Estacionamiento 22</td>
				    </tr>
					<tr>
				      <th scope="row">1</th>
				      <td>Sergio</td>
				      <td>Aguilar</td>
				      <td>1:30</td>
				      <td>3:30</td>
				      <td>Estacionamiento 23</td>
				    </tr>
				  </tbody>
				</table>
			</div>
			<div class="col-4">
				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Lugar</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Estacionamiento 1</td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Estacionamiento 2</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Estacionamiento 3</td>
				    </tr>
				    <tr>
				      <th scope="row">4</th>
				      <td>Estacionamiento 4</td>
				    </tr>
				    <tr>
				      <th scope="row">5</th>
				      <td>Estacionamiento 5</td>
				    </tr>
				  </tbody>
				</table>
			</div>
		</div>
	</div>
	
	<div id="id01" class="modal">
  
  <form class="modal-content animate" action="admin.php" method="post">
    

    <div class="container">
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