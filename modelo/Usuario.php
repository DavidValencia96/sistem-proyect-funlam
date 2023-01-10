<?php 
include_once 'Conexion.php';

class Usuario{
    var $objetos;
    public function __construct(){
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }
    function loguearse($user, $pass){
        $sql="SELECT * FROM usuarios INNER JOIN tipo_us ON us_tipo=id_tipo_us WHERE usuario=:user AND contrasena=:pass";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':user'=>$user,':pass'=>$pass));
        $objetos = $query->fetchall();
        return "logueado";
        
    }
    function obtener_datos_logueo($user){
        $sql ="SELECT * FROM usuarios join tipo_us on us_tipo=id_tipo_us and usuario=:user";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':user'=>$user));
        $this->objetos= $query->fetchall();
        return $this->objetos;
    }
    function buscar(){
        if(!empty($_POST['consulta'])){
            $consulta=$_POST['consulta'];
            $sql="SELECT * FROM usuarios JOIN  tipo_us on us_tipo=id_tipo_us WHERE nombres LIKE :consulta";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':consulta'=>"%$consulta%"));
            $this->objetos=$query->fetchall();
            return $this->objetos;
        }
        else{
            $sql="SELECT * FROM usuarios JOIN tipo_us on us_tipo=id_tipo_us WHERE nombres NOT LIKE '' ORDER BY id_usuario LIMIT 25";
            $query = $this->acceso->prepare($sql);
            $query->execute(array());
            $this->objetos=$query->fetchall();
            return $this->objetos;
        }
    }
    function crear($nombre,$apellido,$carrera,$email,$user,$pass,$pren,$tipo){
        $sql="SELECT id_usuario FROM usuarios WHERE usuario=:user";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':user'=>$user));
        $this->objetos=$query->fetchall();
        if(!empty($this->objetos)){
            echo 'noadd';
        }
        else{
            $sql="INSERT INTO usuarios(nombres,apellidos,nombre_carrera,email,usuario,contrasena,sobre_mi,us_tipo ) VALUES (:nombre,:apellido,:carrera,:email,:user,:pass,:pren,:tipo);";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':nombre'=>$nombre,':apellido'=>$apellido,':carrera'=>$carrera,':email'=>$email,':user'=>$user,':pass'=>$pass,':pren'=>$pren,':tipo'=>$tipo));
            echo 'add';
        }
    }
    function obtener_datos($id_usuario){
        $sql ="SELECT * FROM usuarios join tipo_us on us_tipo=id_tipo_us and id_usuario=:id";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id'=>$id_usuario));
        $this->objetos= $query->fetchall();
        return $this->objetos;
    }
    function editar($id_usuario,$nombres,$apellidos,$carrera,$email,$sobre_mi){
        $sql ="UPDATE usuarios SET nombres=:nombres, apellidos=:apellidos, nombre_carrera=:carrera, email=:email, sobre_mi=:sobre_mi WHERE id_usuario=:id";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id'=>$id_usuario,':nombres'=>$nombres,':apellidos'=>$apellidos,':carrera'=>$carrera,':email'=>$email,':sobre_mi'=>$sobre_mi));
    }
    function cambiar_contra($id_usuario,$oldpass,$newpass){
        $sql ="SELECT * FROM usuarios WHERE id_usuario=:id AND contrasena=:oldpass";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id'=>$id_usuario,':oldpass'=>$oldpass));
        $this->objetos = $query->fetchall();
        if(!empty($this->objetos)){
            $sql ="UPDATE usuarios SET contrasena=:newpass WHERE id_usuario=:id";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':id'=>$id_usuario,':newpass'=>$newpass));
            echo 'update';
        }
        else{
            echo 'noupdate';
        }
        
        
    }

    function borrar($pass,$id_borrado,$id_usuario){
        $sql="SELECT * FROM usuarios WHERE id_usuario=:id_usuario AND contrasena=:pass";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id_usuario'=>$id_usuario,':pass'=>$pass));
        $this->objetos=$query->fetchall();
        if(!empty($this->objetos)){
            $sql ="DELETE FROM usuarios WHERE id_usuario=:id";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':id'=>$id_borrado));
            echo 'borrado';
        }
        else{
            echo 'noborrado';
        }
        
    }
/* se reemplaza funcion por la siguiente de abajo
    function ascender1($pass,$id_ascendido,$id_usuario){
        $sql="SELECT id_usuario FROM usuarios WHERE id_usuario=:id_usuario AND contrasena=:pass";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id_usuario'=>$id_usuario,':pass'=>$pass));
        $this->objetos=$query->fetchall();
        if(!empty($this->objetos)){
            $tipo=2;
            $sql="UPDATE usuarios SET us_tipo=:tipo WHERE id_usuario=:id";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':id'=>$id_ascendido,':tipo'=>$tipo));
            echo 'ascendido';
        }
        else{
            echo 'noascendido';
        }
    }
*/

function ascender($pass,$id_ascendido,$id_usuario){
    $sql="SELECT * FROM usuarios WHERE id_usuario=:id_usuario";
    $query = $this->acceso->prepare($sql);
    $query->execute(array(':id_usuario'=>$id_usuario));
    $this->objetos=$query->fetchall();
    foreach ($this->objetos as $objeto) {
        $contrasena_actual = $objeto;
    }
    if(strpos($contrasena_actual,'$2y$10$')===0){
        if(password_verify($pass,$contrasena_actual)){
            $tipo=2;
            $sql="UPDATE usuarios SET us_tipo=:tipo WHERE id_usuario=:id";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':id'=>$id_ascendido,':tipo'=>$tipo));
            echo 'ascendido';
        }
        else{
            echo 'noascendido';
        }
    }
    else{
        if($pass==$contrasena_actual){
            $tipo=2;
            $sql="UPDATE usuarios SET us_tipo=:tipo WHERE id_usuario=:id";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':id'=>$id_ascendido,':tipo'=>$tipo));
            echo 'ascendido';
        }
        else{
            echo 'noascendido';
        }
    }
}

/*se reemplaza funcion por la siguiente de abajo
    function descender($pass,$id_descendido,$id_usuario){
        $sql="SELECT id_usuario FROM usuarios WHERE id_usuario=:id_usuario AND contrasena=:pass";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id_usuario'=>$id_usuario,':pass'=>$pass));
        $this->objetos=$query->fetchall();
        if(!empty($this->objetos)){
            $tipo=3;
            $sql="UPDATE usuarios SET us_tipo=:tipo WHERE id_usuario=:id";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':id'=>$id_descendido,':tipo'=>$tipo));
            echo 'descendido';
        }
        else{
            echo 'nodescendido';
        }
    }
*/
    function descender($pass,$id_descendido,$id_usuario){
        $sql="SELECT * FROM usuarios WHERE id_usuario=:id_usuario";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id_usuario'=>$id_usuario));
        $this->objetos=$query->fetchall();
        foreach ($this->objetos as $objeto) {
            $contrasena_actual = $objeto;
        }
        if(strpos($contrasena_actual,'$2y$10$')===0){
            if(password_verify($pass,$contrasena_actual)){
                $tipo=3;
                $sql="UPDATE usuarios SET us_tipo=:tipo WHERE id_usuario=:id";
                $query = $this->acceso->prepare($sql);
                $query->execute(array(':id'=>$id_descendido,':tipo'=>$tipo));
                echo 'ascendido';
            }
            else{
                echo 'noascendido';
            }
        }
        else{
            if($pass==$contrasena_actual){
                $tipo=3;
                $sql="UPDATE usuarios SET us_tipo=:tipo WHERE id_usuario=:id";
                $query = $this->acceso->prepare($sql);
                $query->execute(array(':id'=>$id_descendido,':tipo'=>$tipo));
                echo 'ascendido';
            }
            else{
                echo 'noascendido';
            }
        }
    }

    //verificar usuarios logeo
    function verificar_user_log($pass,$user){
        $sql="SELECT * FROM usuarios WHERE contrasena=:pass AND usuario=:user";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':pass'=>$pass, ':user'=>$user));
        $this->objetos=$query->fetchall();
        if(!empty($this->objetos)){
            if($query->rowCount()==1){ //aqui sabemos cuantos registros nos esta enviando la bd
                echo 'encontrado';
            }
            else{
                echo "noencontrado";    
            }
        }
        else{
            echo "noencontrado";
        }
    }


    //reestablecer contraseña, verificacion de correo y envio
    function verificar($email,$user){
        $sql="SELECT * FROM usuarios WHERE email=:email AND usuario=:user";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':email'=>$email, ':user'=>$user));
        $this->objetos=$query->fetchall();
        if(!empty($this->objetos)){
            if($query->rowCount()==1){ //aqui sabemos cuantos registros nos esta enviando la bd
                echo 'encontrado';
            }
            else{
                echo "noencontrado";    
            }
        }
        else{
            echo "noencontrado";
        }
    }

    function reemplazar($codigo,$email,$user){
        $sql="UPDATE usuarios SET contrasena=:codigo WHERE email=:email AND usuario=:user";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':codigo'=>$codigo,':email'=>$email, ':user'=>$user));
        //echo 'remplazado';
    }
}
?>