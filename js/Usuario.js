$(document).ready(function() {
    var funcion='';
    var id_usuario = $('#id_usuario').val();
    var edit=false;

    buscar_usuario(id_usuario);
    function buscar_usuario(id_usuario){
        funcion='buscar_usuario';
        $.post('../controlador/UsuarioController.php',{id_usuario,funcion},(response)=>{
            let nombres='';
            let apellidos='';
            let carrera='';
            let email='';
            let sobre_mi='';
            let us_tipo='';
            //console.log(response);
            
            const usuario = JSON.parse(response);
        
            nombres+=`${usuario.nombres}`;
            apellidos+=`${usuario.apellidos}`;
            carrera+=`${usuario.carrera}`;
            email+=`${usuario.email}`;
            sobre_mi+=`${usuario.sobre_mi}`;
            $('#nombres').html(nombres);
            $('#apellidos').html(apellidos);
            $('#carrera').html(carrera);
            $('#email').html(email);
            $('#sobre_mi').html(sobre_mi);
        })
        
    }
    
    $(document).on('click','.edit',(e)=>{
        funcion='capturar_datos';
        edit=true;
        $.post('../controlador/UsuarioController.php',{funcion,id_usuario},(response)=>{
            //console.log(response);
            const usuario = JSON.parse(response);
            $('#nombres1').val(usuario.nombres);
            $('#apellidos1').val(usuario.apellidos);
            $('#carrera1').val(usuario.carrera);
            $('#email1').val(usuario.email);
            $('#sobre_mi1').val(usuario.sobre_mi);
        })
    });

    $('#form-usuario').submit(e=>{
        if(edit==true){
            let nombres=$('#nombres1').val();
            let apellidos=$('#apellidos1').val();
            let carrera=$('#carrera1').val();
            let email=$('#email1').val();
            let sobre_mi=$('#sobre_mi1').val();
            
            funcion='editar_usuario';
            $.post('../controlador/UsuarioController.php',{id_usuario,funcion,nombres,apellidos,carrera,email,sobre_mi},(response)=>{
                //console.log(response);
                if(response=='editado'){
                    $('#editado').hide('slow');
                    $('#editado').show(1000);
                    $('#editado').hide(5000);
                    $('#form-usuario').trigger('reset');
                }
                edit=false;
                buscar_usuario(id_usuario);
            })
        }
        else{
            $('#noeditado').hide('slow');
            $('#noeditado').show(1000);
            $('#noeditado').hide(5000);
            $('#form-usuario').trigger('reset');
        }
        e.preventDefault();
    });
    $('#form-pass').submit(e=>{
        let oldpass=$('#oldpass').val();
        let newpass=$('#newpass').val();
        funcion="cambiar_contra";
        $.post('../controlador/UsuarioController.php',{id_usuario,funcion,oldpass,newpass},(response)=>{
            //console.log(response);
            if(response=='update'){
                $('#update').hide('slow');
                $('#update').show(1000);
                $('#update').hide(4000);
                $('#form-pass').trigger('reset');
            }
            else{
                $('#noupdate').hide('slow');
                $('#noupdate').show(1000);
                $('#noupdate').hide(4000);
                $('#form-pass').trigger('reset');
            }
        })
        e.preventDefault();
    })
}) 