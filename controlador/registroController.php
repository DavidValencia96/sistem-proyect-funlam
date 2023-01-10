<?php
include_once '../modelo/Usuario.php';
$usuario = new Usuario();

if($_POST['funcion']=='crear_usuario'){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $carrera = $_POST['carrera'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $pren = $_POST['pren'];
    $tipo = $_POST['tipo'];
    $usuario->crear($nombre,$apellido,$carrera,$email,$user,$pass,$pren,$tipo);
}
?>