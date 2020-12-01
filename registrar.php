<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Usuarios</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/usuarios.css">
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
			  <li class="nav-item active">
				<a class="nav-link" href="reservaradmin.php">Reservar<span class="sr-only">(current)</span></a>
				
		      </li>
		</div>
		     <img src="img/logo2.png" width="12%">
	</nav>
	<br>
	<div class="container">
		<div class="row">
			
			<div class="col-4" align="center">
				
			</div>
		</div>
		<div class="row" >
			<div class="col-4"> </div>
			<div class="col-4">
				<form action="regis.php" method="post">
                <div class="form-group">
						<label for="exampleInputEmail1">ID o Matricula</label>
				    	<input type="text" name="id" placeholder="Matricula">	
						<label for="exampleInputEmail1">Contraseña</label>
				    	<input type="text" name="contrasena"  placeholder="Contraseña">	
						<label for="exampleInputEmail1">Nombre</label>
				    	<input type="text" name="nombre" placeholder="Nombre">
						<label for="exampleInputEmail1">Apellidos</label>
				    	<input type="text" name="apellidos" placeholder="Apellidos">	
				        <label for="exampleInputEmail1">Correo</label>
				        <input type="text" name="correo"  placeholder="Correo">
				        <label for="exampleInputPassword1">tipo</label>
				        <input type="text" name="tipo"  placeholder="tipo">
                        <button class="btn btn-success"  type="submit" >Registrar</button>
                </div>
				</form>
			</div> 
            <div class="col-4"> </div>
			
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>