<?php 
    $conexion=mysqli_connect('localhost','root','','sistema_ingenieriasoft');
    
	$user2=$_POST['user2'];
	$newpass=$_POST['newpass'];

	$sql="SELECT * FROM usuarios WHERE usuario='".$user2."'";
	$nr=mysqli_num_rows($sql);
	if ($nr==1) {  
		echo "error";
		header('Location: ../recovery.php?error=NotChange'); 
	}  
	else {  
	$sql="UPDATE usuarios SET contrasena='$newpass' WHERE usuario='".$user2."'";
		print '<script type="text/javascript">alert("Usuario no existe")</script>';
        header('Location: ../index.php?Success');  
    }
    echo mysqli_query($conexion,$sql);
?>