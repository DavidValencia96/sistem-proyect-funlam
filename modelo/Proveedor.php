<?php
include_once 'Conexion.php';
class Proveedor{
    var $objetos;
    public function __construct(){
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }
    function crear($nombre,$descripcion,$enlace,$imagen,$fecha,$responsable){
        $sql="SELECT id_proyecto FROM proyectos WHERE nombre_proyecto=:nombre";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':nombre'=>$nombre));
        $this->objetos=$query->fetchall();
        if(!empty($this->objetos)){
            echo 'noadd';
        }
        else{
            $sql="INSERT INTO proyectos(nombre_proyecto,descripcion_proyecto,imagen,enlace_externo,fecha_subida,responsable) VALUES (:nombre,:descripcion,:imagen,:enlace,:fecha,:responsable);";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':nombre'=>$nombre,':descripcion'=>$descripcion,':imagen'=>$imagen,':enlace'=>$enlace,':fecha'=>$fecha,':responsable'=>$responsable));
            echo 'add';
        }
    }
    function buscar(){
        if(!empty($_POST['consulta'])){
            $consulta=$_POST['consulta'];
            $sql="SELECT * FROM proyectos WHERE nombre_proyecto LIKE :consulta";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':consulta'=>"%$consulta%"));
            $this->objetos=$query->fetchall();
            return $this->objetos;
        }
        else{
            $sql="SELECT * FROM proyectos WHERE nombre_proyecto  NOT LIKE '' ORDER BY id_proyecto DESC LIMIT 25";
            $query = $this->acceso->prepare($sql);
            $query->execute();
            $this->objetos=$query->fetchall();
            return $this->objetos;
        }
    }
    function cambiar_logo($id,$nombre){
        $sql ="UPDATE proyectos SET imagen=:nombre WHERE id_proyecto=:id";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id'=>$id,':nombre'=>$nombre));
    }
    function editar($id,$nombre,$descripcion,$enlace){
        $sql="SELECT id_proyecto FROM proyectos WHERE id_proyecto!=:id and nombre_proyecto=:nombre";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id'=>$id,':nombre'=>$nombre));
        $this->objetos=$query->fetchall();
        if(!empty($this->objetos)){
            echo 'noedit';
        }
        else{
            $sql="UPDATE proyectos SET nombre_proyecto=:nombre, descripcion_proyecto=:descripcion, enlace_externo=:enlace WHERE id_proyecto=:id";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':id'=>$id,':nombre'=>$nombre,':descripcion'=>$descripcion,':enlace'=>$enlace));
            echo 'edit';
        }
    }
    function borrar($id){
        $sql="DELETE FROM proyectos WHERE id_proyecto=:id";
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