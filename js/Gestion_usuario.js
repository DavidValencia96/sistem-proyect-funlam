$(document).ready(function(){
    
    var tipo_usuario = $('#tipo_usuario').val();
    if(tipo_usuario==3){
        $('#button-crear').hide();
    }
    buscar_datos();
    var funcion;
    function buscar_datos(consulta){
        funcion='buscar_usuarios_adm';
        $.post('../controlador/UsuarioController.php',{consulta,funcion},(response)=>{
            const usuarios = JSON.parse(response);
            //console.log(response);
            let template='';
            usuarios.forEach(usuario=>{
                template+=`
                <div usuarioId="${usuario.id}" class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                    <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">`;
                        if(usuario.tipo_usuario==1){
                            template+=`<h1 class="badge badge-danger">${usuario.tipo}</h1>`;
                        }
                        if(usuario.tipo_usuario==2){
                            template+=`<h1 class="badge badge-warning">${usuario.tipo}</h1>`;
                        }
                        if(usuario.tipo_usuario==3){
                            template+=`<h1 class="badge badge-info">${usuario.tipo}</h1>`;
                        }
                        template+=`
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="">
                                    <h2 class="lead"><b>${usuario.nombres} ${usuario.apellidos}</b></h2>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                    
                                    <li class="small"><span class="fa-li"><i class="fas fa-user-cog"></i></span> Usuario: ${usuario.usuario}</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-id-card"></i></span> Carrera: ${usuario.carrera}</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-at"></i></span> Correo: ${usuario.email}</li>
                                    </ul>
                                    <p class="text-muted text-sm"><b>Sobre mi: </b>${usuario.sobre_mi}</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">`;
                            if(tipo_usuario==1){
                                if(usuario.tipo_usuario!=3){
                                    template+=`
                                    <button class="borrar-usuario btn primary small" title="Eliminar usuario" type="button" data-toggle="modal" data-target="#confirmar">
                                        <i class="fas fa-window-close mr-1"></i>
                                    </button>
                                    `;
                                }
                                if(usuario.tipo_usuario==3){
                                    template+=`
                                    <button class="ascender btn btn-success small ml-1" type="button" title="Ascedender" data-toggle="modal" data-target="#confirmar">
                                        <i class="fas fa-sort-amount-up mr-1"></i>
                                    </button>
                                    `;
                                }
                                if(usuario.tipo_usuario==2){
                                    template+=`
                                    <button class="descender btn btn-warning small" type="button" title="Descedender" data-toggle="modal" data-target="#confirmar">
                                        <i class="fas fa-sort-amount-down mr-1"></i>
                                    </button>
                                    `;
                                }
                            }
                            else{  
                                if(tipo_usuario==2 && usuario.tipo_usuario!=2 && usuario.tipo_usuario!=2){
                                    template+=`
                                    <button class="borrar-usuario btn primary small" type="button" title="Eliminar usuario" data-toggle="modal" data-target="#confirmar">
                                        <i class="fas fa-window-close mr-1"></i>elim2
                                    </button>
                                    `;
                                }
                            }
                            template+=`   
                            </div>
                        </div>
                    </div>
                </div>
                `;
            })
            $('#usuarios').html(template);
        });
    }
    $(document).on('keyup','#buscar',function(){
        let valor = $(this).val();
        if(valor!=""){
            buscar_datos(valor);
        }
        else{
            buscar_datos();
        }
    });

    $(document).on('click','.borrar-usuario',(e)=>{
        const elemento= $(this)[0].activeElement.parentElement.parentElement.parentElement.parentElement;
        const id=$(elemento).attr('usuarioId');
        funcion='borrar_usuario';
        $('#id_user').val(id);
        $('#funcion').val(funcion);
    });
    $(document).on('click','.ascender',(e)=>{
        const elemento= $(this)[0].activeElement.parentElement.parentElement.parentElement.parentElement;
        const id=$(elemento).attr('usuarioId');
        funcion='ascender';
        $('#id_user').val(id);
        $('#funcion').val(funcion);
    });
    $(document).on('click','.descender',(e)=>{
        const elemento= $(this)[0].activeElement.parentElement.parentElement.parentElement.parentElement;
        const id=$(elemento).attr('usuarioId');
        funcion='descender';
        $('#id_user').val(id);
        $('#funcion').val(funcion);
    });
    $('#form-confirmar').submit(e=>{
        let pass=$('#oldpass').val();
        let id_usuario=$('#id_user').val();
        funcion=$('#funcion').val();
        $.post('../controlador/UsuarioController.php',{pass,id_usuario,funcion},(response)=>{
            if(response=='ascendido' || response=='descendido' || response=='borrado'){
                $('#confirmado').hide('slow');
                $('#confirmado').show(1000);
                $('#confirmado').hide(5000);
                $('#form-confirmar').trigger('reset');
            }
            else{
                $('#rechazado').hide('slow');
                $('#rechazado').show(1000);
                $('#rechazado').hide(5000);
                $('#form-confirmar').trigger('reset');
            }
            buscar_datos();
        });
        e.preventDefault();
    });

    
    /*$('#form-crear').submit(e=>{
        let nombre = $('#nombres').val();
        let apellido = $('#apellidos').val();
        let carrera = $('#carrera').val();
        let email = $('#email').val();
        let user = $('#user').val();
        let pass = $('#pass').val();
        let pren = $('#pren').val();
        let tipo = $('#tipo').val();
        funcion='crear_usuario';
        $.post('controlador/UsuarioController.php',{nombre,apellido,carrera,email,user,pass,pren,tipo,funcion},(response)=>{
            console.log(response);
            if(response=='add'){
                $('#add').hide('slow');
                $('#add').show(1000);
                $('#add').hide(5000);
                $('#form-crear').trigger('reset');
                buscar_datos();
            }
            else{
                $('#noadd').hide('slow');
                $('#noadd').show(1000);
                $('#noadd').hide(5000);
                $('#form-crear').trigger('reset');
            }
        });
        e.preventDefault();
    });*/
})