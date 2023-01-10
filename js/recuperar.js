$(document).ready(function(){
    $('#aviso1').hide();
    $('#aviso').hide();
    $('#form-recuperar').submit(e =>{
        let email = $('#email-recuperar').val();
        let user = $('#user-recuperar').val();
        if(email == '' || user == ''){ //si los campos son vacios, avise que debe llenarlos
            $('#aviso').show();
            $('#aviso').text('Debe llenar todos los campos');
        }
        else{
            $('#aviso').hide();
            let funcion ='verificar';
            $.post('./controlador/recuperarController.php',{funcion,email,user},(response)=>{
                //console.log(response);
                if(response=='encontrado'){
                    let funcion='recuperar';
                    $('#aviso').hide();
                    $.post('./controlador/recuperarController.php',{funcion,email,user},(response2)=>{
                        //console.log(response2);
                        $('#aviso').hide();
                        $('#aviso1').hide();
                        if(response2=='enviado'){
                            $('#aviso1').show();
                            $('#aviso1').text('Se envio una nueva contraseña al E-mail.');
                            $('#form-recuperar').trigger('reset');
                        }
                        else{
                            $('#aviso').show();
                            $('#aviso').text('Error al restablecer contraseña');
                            $('#form-recuperar').trigger('reset');
                        }
                    })
                }
                else{
                    $('#aviso').hide();
                    $('#aviso1').hide();
                    $('#aviso').show();
                    $('#aviso').text('Usuario* o E-mail*, incorrectos, intente de nuevo.');
                }
            });
        }
        e.preventDefault();//no se refresque la pagina hasta finalizar
    })
})