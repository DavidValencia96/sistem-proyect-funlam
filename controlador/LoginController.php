<?php
include_once '../modelo/Usuario.php';

session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];

$usuario = new Usuario();

if($_POST['funcion']=='verificar'){
    $pass = $_POST['pass'];
    $user = $_POST['user'];
    $usuario->verificar_user_log($pass,$user);
}

//algoritmo que permite saber que session esta iniciada
if(!empty($_SESSION['us_tipo'])){
    switch($_SESSION['us_tipo']){
        case 1:
            header('location: ../vista/index.php');
        break;
        case 2:
            header('location: ../vista/index.php');
        break;
        case 3:
            header('location: ../vista/index.php');
        break;
    }
}
else{
    //verificador de usuarios
    if(!empty($usuario->loguearse($user,$pass)=="logueado")){
        $usuario->obtener_datos_logueo($user);
        foreach($usuario->objetos as $objeto){
            $_SESSION['usuario']=$objeto->id_usuario;
            $_SESSION['us_tipo']=$objeto->us_tipo;
            $_SESSION['nombre_us']=$objeto->nombres;
        }
        switch($_SESSION['us_tipo']){
            case 1:
                header('location: ../vista/index.php');
            break;
            case 2:
                header('location: ../vista/index.php');
            break;
            case 3:
                header('location: ../vista/index.php');
            break;
        }
    }
    else{
        header('location: ../index.php');
    }
}



?>