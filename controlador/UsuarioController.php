<?php
include_once '../modelo/Usuario.php';
$usuario = new Usuario();
session_start();
$id_usuario= $_SESSION['usuario'];
//datos generales de usuarios
if($_POST['funcion']=='buscar_usuarios_adm'){
    $json=array();
    $usuario->buscar();
    foreach ($usuario->objetos as $objeto){
        $json[]=array(
            'id'=>$objeto->id_usuario,
            'usuario'=>$objeto->usuario, 
            'nombres'=>$objeto->nombres,            
            'apellidos'=>$objeto->apellidos,            
            'carrera'=>$objeto->nombre_carrera,            
            'email'=>$objeto->email,            
            'sobre_mi'=>$objeto->sobre_mi,
            'tipo'=>$objeto->nombre_tipo,
            'tipo_usuario'=>$objeto->us_tipo
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
// end datos generales de usuarios

//datos personales
if($_POST['funcion']=='buscar_usuario'){
    $json=array();
    $usuario->obtener_datos($id_usuario);
    foreach ($usuario->objetos as $objeto){
        $json[]=array(
            'id'=>$objeto->id_usuario,
            'nombres'=>$objeto->nombres,            
            'apellidos'=>$objeto->apellidos,            
            'carrera'=>$objeto->nombre_carrera,            
            'email'=>$objeto->email,            
            'sobre_mi'=>$objeto->sobre_mi,
            'tipo_usuario'=>$objeto->us_tipo
        );
    }
    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
}

if($_POST['funcion']=='capturar_datos'){
    $json=array();
    $id_usuario=$id_usuario;
    $usuario->obtener_datos($id_usuario);
    foreach ($usuario->objetos as $objeto){
        $json[]=array(            
            'nombres'=>$objeto->nombres,            
            'apellidos'=>$objeto->apellidos,   
            'carrera'=>$objeto->nombre_carrera,   
            'email'=>$objeto->email,   
            'sobre_mi'=>$objeto->sobre_mi
        );
    }
    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
}

if($_POST['funcion']=='editar_usuario'){
    $id_usuario=$id_usuario;
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $carrera=$_POST['carrera'];
    $email=$_POST['email'];
    $sobre_mi=$_POST['sobre_mi'];
    $usuario->editar($id_usuario,$nombres,$apellidos,$carrera,$email,$sobre_mi);
    echo 'editado';
}
if($_POST['funcion']=='cambiar_contra'){
    $id_usuario=$id_usuario;
    $oldpass=$_POST['oldpass'];
    $newpass=$_POST['newpass'];
    $usuario->cambiar_contra($id_usuario,$oldpass,$newpass);
}
//end datos personales

//eliminar, ascender y descender usuario
if($_POST['funcion']=='borrar_usuario'){
    $pass=$_POST['pass'];
    $id_borrado=$_POST['id_usuario'];
    $usuario->borrar($pass,$id_borrado,$id_usuario);
}
if($_POST['funcion']=='ascender'){
    $pass = $_POST['pass'];
    $id_ascendido=$_POST['id_usuario'];
    $usuario->ascender($pass,$id_ascendido,$id_usuario);
}
if($_POST['funcion']=='descender'){
    $pass=$_POST['pass'];
    $id_descendido=$_POST['id_usuario'];
    $usuario->descender($pass,$id_descendido,$id_usuario);
}
// end eliminar, ascender y descender usuario

////crear
//if($_POST['funcion']=='crear_usuario'){
//    $nombre = $_POST['nombre'];
//    $apellido = $_POST['apellido'];
//    $carrera = $_POST['carrera'];
//    $email = $_POST['email'];
//    $user = $_POST['user'];
//    $pass = $_POST['pass'];
//    $pren = $_POST['pren'];
//    $tipo = $_POST['tipo'];
//    $usuario->crear($nombre,$apellido,$carrera,$email,$user,$pass,$pren,$tipo);
//}
////end crear
?>