$(document).ready(function(){
    $('#add').hide();
    $('#noadd').hide();
    var funcion;
    $('#form-crear').submit(e=>{
        let nombre = $('#nombres').val();
        let apellido = $('#apellidos').val();
        let carrera = $('#carrera').val();
        let email = $('#email').val();
        let user = $('#user').val();
        let pass = $('#pass').val();
        let pren = $('#pren').val();
        let tipo = $('#tipo').val();
        funcion='crear_usuario';
        $.post('controlador/registroController.php',{nombre,apellido,carrera,email,user,pass,pren,tipo,funcion},(response)=>{
            console.log(response);
            if(response=='add'){
                $('#add').hide('slow');
                $('#add').show(3000);
                $('#add').hide(7000);
                $('#form-crear').trigger('reset');
            }
            else{
                $('#noadd').hide('slow');
                $('#noadd').show(3000);
                $('#noadd').hide(7000);
                $('#form-crear').trigger('reset');
            }
        });
        e.preventDefault();
    });
})