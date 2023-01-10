<?php
include_once '../modelo/Practicas.php';
$practica =new Practica();

if($_POST['funcion']=='crear'){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $enlace = $_POST['enlace'];
    $imagen = $_POST['imagen'];
    $fecha = $_POST['fecha'];
    $responsable = $_POST['responsable'];
    $practica->crear($nombre,$descripcion,$enlace,$imagen,$fecha,$responsable);
}

if($_POST['funcion']=='buscar'){
    $practica->buscar();
    $json=array();
    foreach ($practica->objetos as $objeto) {
        $json[]=array(
            'id'=>$objeto->id_practica,
            'nombre'=>$objeto->nombre_practica,
            'descripcion'=>$objeto->descripcion_practica,
            'enlace'=>$objeto->enlace_externo,
            'fecha'=>$objeto->fecha_subida,
            'responsable'=>$objeto->responsable,
            'imagen'=>'../images/practicas/'.$objeto->imagen
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
if($_POST['funcion']=='cambiar_logo'){
    $id=$_POST['id_logo_prov'];
    $avatar=$_POST['avatar'];
    if(($_FILES['photo']['type']=='image/jpeg')||($_FILES['photo']['type']=='image/png')||($_FILES['photo']['type']=='image/gif')){
        $nombre=uniqid().'-'.$_FILES['photo']['name'];
        $ruta='../images/practicas/'.$nombre;
        move_uploaded_file($_FILES['photo']['tmp_name'],$ruta);
        $practica->cambiar_logo($id,$nombre);
            if($avatar!='../images/practicas/location.png'){
                unlink($avatar);
            }
        $json= array();
        $json[]=array(
            'ruta'=>$ruta,
            'alert'=>'edit'
        );
        $jsonstring = json_encode($json[0]);
        echo $jsonstring;
        }
    else{
        $json= array();
        $json[]=array(
            'alert'=>'noedit'
        );
        $jsonstring = json_encode($json[0]);
        echo $jsonstring;
    }
}
if($_POST['funcion']=='editar'){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $enlace = $_POST['enlace'];
    $practica->editar($id,$nombre,$descripcion,$enlace);
}
if($_POST['funcion']=='borrar'){
    $id=$_POST['id'];
    $practica->borrar($id);
}
?>