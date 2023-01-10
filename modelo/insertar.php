<?php 
	$conexion=mysqli_connect('localhost','root','','sistema_ingenieriasoft');

	$nombre=$_POST['nombres'];
	$apellido=$_POST['apellidos'];
	$carrera=$_POST['carrera'];
	$email=$_POST['email'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$tipo=$_POST['tipo'];

	$sql="INSERT into usuarios (usuario,contrasena,nombres,apellidos,nombre_carrera,email,us_tipo)
			values ('$user','$pass','$nombre','$apellido','$carrera','$email','$tipo')";
			echo 'registro correcto';
			header('Location: ../index.php?registerSuccess');  
	echo mysqli_query($conexion,$sql);
?> 