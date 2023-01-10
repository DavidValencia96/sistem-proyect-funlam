<?php
include_once '../modelo/Emprendimiento.php';
$Emprendimiento =new Emprendimiento();

if($_POST['funcion']=='crear'){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $enlace = $_POST['enlace'];
    $imagen = $_POST['imagen'];
    $fecha = $_POST['fecha'];
    $responsable = $_POST['responsable'];
    $Emprendimiento->crear($nombre,$descripcion,$enlace,$imagen,$fecha,$responsable);
}
if($_POST['funcion']=='buscar'){
    $Emprendimiento->buscar();
    $json=array();
    foreach ($Emprendimiento->objetos as $objeto) {
        $json[]=array(
            'id'=>$objeto->id_emprendimiento ,
            'nombre'=>$objeto->nombre_empren,
            'descripcion'=>$objeto->descripcion_empren,
            'enlace'=>$objeto->enlace_externo,
            'fecha'=>$objeto->fecha_subida,
            'responsable'=>$objeto->responsable,
            'imagen'=>'../images/emprendimiento/'.$objeto->imagen
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
        $ruta='../images/emprendimiento/'.$nombre;
        move_uploaded_file($_FILES['photo']['tmp_name'],$ruta);
        $Emprendimiento->cambiar_logo($id,$nombre);
            if($avatar!='../images/emprendimiento/location.png'){
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
    $Emprendimiento->editar($id,$nombre,$descripcion,$enlace);
}
if($_POST['funcion']=='borrar'){
    $id=$_POST['id'];
    $Emprendimiento->borrar($id);
}
?>