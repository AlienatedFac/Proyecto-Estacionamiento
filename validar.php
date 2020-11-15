

<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("Conexion/Connect_db.php");

	$username=$_POST['Correo'];
	$pass=$_POST['Password'];
	


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM  login WHERE Correo='$username'");
	if($f2=mysqli_fetch_assoc($sql2))
	{
		if($pass==$f2['Password'])
		{
			$_SESSION['id']=$f2['id'];
		 
			echo "<script>location.href='Interfaz_Administrador.php'</script>";//Cambiar 
		
		}
	}

   
	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	
	if($f=mysqli_fetch_assoc($sql))
	{
		if($pass==$f['password'])
		{
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];
							
			
			if (2==$f['rol'])
				{   
                     echo '<script>alert("BIENVENIDO USUARIO")</script> ';
		             echo "<script>location.href='Usuario.php'</script>";//Cambiar
					 
				}
			elseif (3==$f['rol'])
			{
			echo '<script>alert("BIENVENIDO PACIENTE")</script> ';	
			echo "<script>location.href='Paciente.php'</script>"; //Quitar 
			}
		else 
		{       echo '<img src="imagenes/universidad.jpg" />';
				echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
                echo "<script>location.href='index.php'</script>"; 
		}
                        	          
		}
		
		else
		{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}
	else
	{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>
