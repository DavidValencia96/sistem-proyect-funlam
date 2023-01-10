<?php
include_once 'Conexion.php';
class Portafolio{
    var $objetos;
    public function __construct(){
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }
    function crear($nombre,$descripcion,$enlace,$imagen,$fecha,$responsable){
        $sql="SELECT id_portafolio FROM portafolio WHERE nombre_portafolio=:nombre";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':nombre'=>$nombre));
        $this->objetos=$query->fetchall();
        if(!empty($this->objetos)){
            echo 'noadd';
        }
        else{
            $sql="INSERT INTO portafolio(nombre_portafolio,descripcion_portafolio,imagen,enlace_externo,fecha_subida,responsable) VALUES (:nombre,:descripcion,:imagen,:enlace,:fecha,:responsable);";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':nombre'=>$nombre,':descripcion'=>$descripcion,':imagen'=>$imagen,':enlace'=>$enlace,':fecha'=>$fecha,':responsable'=>$responsable));
            echo 'add';
        }
    }
    function buscar(){
        if(!empty($_POST['consulta'])){
            $consulta=$_POST['consulta'];
            $sql="SELECT * FROM portafolio WHERE nombre_portafolio LIKE :consulta";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':consulta'=>"%$consulta%"));
            $this->objetos=$query->fetchall();
            return $this->objetos;
        }
        else{
            $sql="SELECT * FROM portafolio WHERE nombre_portafolio  NOT LIKE '' ORDER BY id_portafolio DESC LIMIT 25";
            $query = $this->acceso->prepare($sql);
            $query->execute();
            $this->objetos=$query->fetchall();
            return $this->objetos;
        }
    }
    function cambiar_logo($id,$nombre){
        $sql ="UPDATE portafolio SET imagen=:nombre WHERE id_portafolio=:id";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id'=>$id,':nombre'=>$nombre));
    }
    function editar($id,$nombre,$descripcion,$enlace){
        $sql="SELECT id_portafolio FROM portafolio WHERE id_portafolio!=:id and nombre_portafolio=:nombre";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id'=>$id,':nombre'=>$nombre));
        $this->objetos=$query->fetchall();
        if(!empty($this->objetos)){
            echo 'noedit';
        }
        else{
            $sql="UPDATE portafolio SET nombre_portafolio=:nombre, descripcion_portafolio=:descripcion,enlace_externo=:enlace WHERE id_portafolio=:id";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':id'=>$id,':nombre'=>$nombre,':descripcion'=>$descripcion,':enlace'=>$enlace));
            echo 'edit';
        }
    }
    function borrar($id){
        $sql="DELETE FROM portafolio WHERE id_portafolio=:id";
        $query=$this->acceso->prepare($sql);
        $query->execute(array(':id'=>$id));
        if(!empty($query->execute(array(':id'=>$id)))){
            echo 'borrado';
        }
        else{
            echo 'noborrado';
        }
    }
}
?>