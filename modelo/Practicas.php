<?php
include_once 'Conexion.php';
class Practica{
    var $objetos;
    public function __construct(){
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }
    function crear($nombre,$descripcion,$enlace,$imagen,$fecha,$responsable){
        $sql="SELECT id_practica FROM practicas WHERE nombre_practica=:nombre";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':nombre'=>$nombre));
        $this->objetos=$query->fetchall();
        if(!empty($this->objetos)){
            echo 'noadd';
        }
        else{
            $sql="INSERT INTO practicas(nombre_practica,descripcion_practica,imagen,enlace_externo,fecha_subida,responsable) VALUES (:nombre,:descripcion,:imagen,:enlace,:fecha,:responsable);";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':nombre'=>$nombre,':descripcion'=>$descripcion,':imagen'=>$imagen,':enlace'=>$enlace,':fecha'=>$fecha,':responsable'=>$responsable));
            echo 'add';
        }
    }
    function buscar(){
        if(!empty($_POST['consulta'])){
            $consulta=$_POST['consulta'];
            $sql="SELECT * FROM practicas WHERE nombre_practica LIKE :consulta";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':consulta'=>"%$consulta%"));
            $this->objetos=$query->fetchall();
            return $this->objetos;
        }
        else{
            $sql="SELECT * FROM practicas WHERE nombre_practica  NOT LIKE '' ORDER BY id_practica DESC LIMIT 25";
            $query = $this->acceso->prepare($sql);
            $query->execute();
            $this->objetos=$query->fetchall();
            return $this->objetos;
        }
    }
    function cambiar_logo($id,$nombre){
        $sql ="UPDATE practicas SET imagen=:nombre WHERE id_practica=:id";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id'=>$id,':nombre'=>$nombre));
    }
    function editar($id,$nombre,$descripcion,$enlace){
        $sql="SELECT id_practica FROM practicas WHERE id_practica!=:id and nombre_practica=:nombre";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id'=>$id,':nombre'=>$nombre));
        $this->objetos=$query->fetchall();
        if(!empty($this->objetos)){
            echo 'noedit';
        }
        else{
            $sql="UPDATE practicas SET nombre_practica=:nombre, descripcion_practica=:descripcion, enlace_externo=:enlace WHERE id_practica=:id";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':id'=>$id,':nombre'=>$nombre,':descripcion'=>$descripcion,':enlace'=>$enlace));
            echo 'edit';
        }
    }
    function borrar($id){
        $sql="DELETE FROM practicas WHERE id_practica=:id";
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