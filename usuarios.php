<!DOCTYPE html>
<html>
<?php
error_reporting(0); //comentar si hay errores 
if($_POST['id']=='')
{
$_POST['id']='';
$var1=''; $var2=''; $var3=''; $var4=''; 
$var5="img/usuario.png";
$boton="disabled='true'";
}else
{
	require("Conexion/Connect_db.php");
	$boton="";
	$id=$_POST['id'];
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM  usuarios WHERE id='$id'");
	if($f2=mysqli_fetch_assoc($sql2))
	{
		$var1 = $f2["id"];
		$var2 = $f2["nombre"];
		$var3 = $f2["apellido"];
		$var4 = $f2["Correo"];
		$var5 = $f2["imagen"];
		$var6 = $f2["Tipo"];
	}
}
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Usuarios</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/usuarios.css">
	<link rel="shortcut icon" href="img/iconos/logo.ico">
	<script language="JavaScript">
function pregunta(){
    if (confirm('¿Estas seguro de Realizar esta accion?')){
       document.tuformulario.submit()
    }
}
</script>
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
				<img src=<?php echo "$var5"; ?> width="35%">
			</div>
		</div>
		<div class="row" >
			
			<div class="col-4">
				<form class="forma">
					<div class="form-group">
						<label for="exampleInputEmail1">Matricula o ID</label>
				    	<input type="text" readonly="readonly" class="form-control entrada"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo "$var1"; ?>">	
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Nombre</label>
				    	<input type="text" readonly="readonly" class="form-control entrada"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo "$var2"; ?>">	
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Apellidos</label>
				    	<input type="text" readonly="readonly" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo "$var3"; ?>">	
					</div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Correo</label>
				    <input type="text" readonly="readonly" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo "$var4"; ?>">
				  </div>
				  <div class="form-group">
						<label for="exampleInputEmail1">Tipo de Usuario</label>
				    	<input type="text" readonly="readonly" class="form-control entrada"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo "$var6"; ?>">	
					</div>
				</form>
			</div> 
			<div class="col-4"></div>
			<div class="col-4">
			<div class="row">
			<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">Buscar Usuarios</th>
				      <th scope="col"></th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
					<form action="usuarios.php" method="post">
				      <th scope="row"><input type="text" name="id" placeholder="Ingresa el ID" required></th>
					  	
				      <td><button class="btn btn-success"  type="submit" >Ver Datos</button></td>
					</form>  

				    </tr>
				  </tbody>
				</table>
				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">Opciones Avanzadas</th>
				      <th scope="col"></th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
					<form action="actualizar.php" method="post">	
					  <td><button class="btn btn-success"  type="submit" <?php echo $boton;?> >Actualizar</button></td>
					</form>
					<form action="registrar.php" method="post">	
					  <td><button class="btn btn-success"  type="submit">Registrar</button></td>
					</form>
					</tr>	
					<tr>
					<form action="Conexion/delete.php" method="post">
					  <th scope="row"><input type="text" name="id" placeholder="Confirma el ID para Eliminar" <?php echo $boton; ?> required></th> 
				      <td><button class="btn btn-danger" onclick="pregunta()" value="Enviar" type="submit" <?php echo $boton;  ?> >Eliminar</button></td>
					</form>  

				    </tr>
				  </tbody>
				</table>

			
			
			</div>
		</div>
	</div>
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>