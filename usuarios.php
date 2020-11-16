<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Usuarios</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
		        <a class="nav-link" href="usuarios.php">Usuarios<span class="sr-only">(current)</span></a>
		      </li>
		</div>
		     <img src="img/logo2.png" width="12%">
	</nav>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-6">
				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Nombre</th>
				      <th scope="col">Apellidos</th>
				      <th scope="col"></th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>JOvenciTO</td>
				      <td>Lopez</td>
				      <td><button type="button">Ver Datos</button></td>
				    </tr>
				  </tbody>
				</table>
			</div>
			<div class="col-6" align="center">
				<img src="img/usuario.png" width="40%">
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<form>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Correo</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Carrera</label>
				    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
				  </div>
				</form>
			</div>
		</div>
	</div>
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>