$(document).ready(function(){
    var edit=false;
    var funcion;
    buscar_prov();
    $('#form-crear').submit(e=>{
        let id =$('#id_edit_noti').val();
        let nombre =$('#nombre').val();
        let descripcion =$('#descripcion').val();
        let enlace =$('#enlace').val();
        let imagen ='location.png';
        let fecha = $('#fecha').val();
        let responsable =$('#responsable').val();
        if(edit==true){
            funcion="editar";
        }
        else{
            funcion="crear";
        }
        $.post('../controlador/NoticiaController.php',{id,nombre,descripcion,enlace,imagen,fecha,responsable,funcion},(response)=>{
            console.log(response);
            if(response=='add'){
                $('#add-prov').hide('slow');
                $('#add-prov').show(1000);
                $('#add-prov').hide(5000);
                $('#form-crear').trigger('reset');
                buscar_prov();
            }
            if(response=='noadd' || response=='noedit'){
                $('#noadd-prov').hide('slow');
                $('#noadd-prov').show(1000);
                $('#noadd-prov').hide(5000);
                $('#form-crear').trigger('reset');
            }
            if(response=='edit'){
                $('#edit_prov').hide('slow');
                $('#edit_prov').show(1000);
                $('#edit_prov').hide(5000);
                $('#form-crear').trigger('reset');
                buscar_prov();
            }
            edit=false;
        });
        e.preventDefault();
    });
    function buscar_prov(consulta){
        funcion='buscar';
        $.post('../controlador/NoticiaController.php',{consulta,funcion},(response)=>{
            const notice = JSON.parse(response);
            //console.log(response);
            let template='';
            notice.forEach(notice => {
                template+=`
                <div  proyectId="${notice.id}" proyectNombre="${notice.nombre}" proyectDescripcion="${notice.descripcion}" proyectImagen="${notice.imagen}" proyectEnlace="${notice.enlace}" proyectFecha="${notice.fecha} proyectResponsable="${notice.responsable}" class="col-12 col-sm-6 col-md-auto d-flex align-items-stretch">
                    <div class="card bg-light mb-2">
                        <div class="card-header text-muted border-bottom-2">
                            <h1 class="badge badge-success">Noticias publicadas</h1>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-9-large">
                                    <h2 class=""><b>${notice.nombre}</b></h2>
                                    <ul class="ml-0 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"></span><b>Descripción:</b> ${notice.descripcion}</li>
                                        <li class="small"><span class="fa-li"></span> <b>Enlace: </b><a href="${notice.enlace}" target="_blank" >${notice.enlace}</a> </li>
                                        <li class="small"><span class="fa-li"></span> <b>Fecha publicado:</b> ${notice.fecha}</li>
                                        <li class="small"><span class="fa-li"></span> <b>Responsable:</b> ${notice.responsable}</li>
                                    </ul>
                                </div>
                                <div class="col-9 text-center">
                                    <img src="${notice.imagen}" alt="" class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <button  class=" avatar btn btn-sm " title="Agregar-cambiar imagen" type="button" data-toggle="modal" data-target="#cambiologo">
                                    <i class="fas fa-image"></i>
                                </button>
                                <button  class=" editar btn btn-sm " title="Editar notice" type="button" data-toggle="modal" data-target="#crearnoticia">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                                <button  class=" borrar btn btn-sm " title="Borrar notice">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                
                            </div>
                        </div>
                    </div>
                </div>
                `;
            });
            $('#noticias').html(template);
        });
    }
    $(document).on('keyup','#buscar_noticias',function(){
        let valor=$(this).val();
        if(valor!=''){
            buscar_prov(valor);
        }
        else{
            buscar_prov();
        }
    });
    $(document).on('click','.avatar',(e)=>{
        funcion="cambiar_logo";
        const elemento = $(this)[0].activeElement.parentElement.parentElement.parentElement.parentElement;
        const id= $(elemento).attr('proyectId');
        const nombre = $(elemento).attr('proyectNombre');
        const avatar = $(elemento).attr('proyectImagen');
        $('#logoactual').attr('src',avatar);
        $('#nombre_logo').html(nombre);
        $('#id_logo_prov').val(id);
        $('#funcion').val(funcion);
        $('#avatar').val(avatar);
    });
    $(document).on('click','.editar',(e)=>{
        const elemento = $(this)[0].activeElement.parentElement.parentElement.parentElement.parentElement;
        const id= $(elemento).attr('proyectId');
        const nombre = $(elemento).attr('proyectNombre');
        const descripcion = $(elemento).attr('proyectDescripcion');
        const enlace = $(elemento).attr('proyectEnlace');
        $('#id_edit_noti').val(id);
        $('#nombre').val(nombre);
        $('#descripcion').val(descripcion);
        $('#enlace').val(enlace);
        edit=true;
    });
    $('#form-logo').submit(e=>{
        let formData = new FormData($('#form-logo')[0]);
        $.ajax({
            url:'../controlador/NoticiaController.php',
            type:'POST',
            data:formData,
            cache:false,
            processData: false,
            contentType:false
        }).done(function(response){
            const json = JSON.parse(response);
            //console.log(response);
            if(json.alert=='edit'){
                $('#logoactual').attr('src',json.ruta);
                $('#edit-prov').hide('slow');
                $('#edit-prov').show(1000);
                $('#edit-prov').hide(5000);
                $('#form-logo').trigger('reset');
                buscar_prov();
            }
            else{
                $('#noedit-prov').hide('slow');
                $('#noedit-prov').show(1000);
                $('#noedit-prov').hide(5000);
                $('#form-logo').trigger('reset');
            }
            buscar_prov();
        });
        e.preventDefault();
    });
    $(document).on('click','.borrar',(e)=>{
        funcion="borrar";
        const elemento = $(this)[0].activeElement.parentElement.parentElement.parentElement.parentElement;
        const id = $(elemento).attr('proyectId');
        const nombre = $(elemento).attr('proyectNombre');
        const avatar = $(elemento).attr('proyectImagen');
        //console.log(id+nombre+avatar);
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-secondary small',
                cancelButton: 'btn primary small mr-1'
            },
            buttonsStyling: false
        })
        swalWithBootstrapButtons.fire({
            title: '¿Desea eliminar a '+nombre+'?',
            text: "No podrar revertir este cambio.",
            imageUrl:''+avatar+'',
            imageWidth: 100,
            height: 100,
            //icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Si, eliminar esto.',
            cancelButtonText: 'No, !cancelar!',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $.post('../controlador/NoticiaController.php',{id,funcion},(response)=>{
                    // edit==false;
                    console.log(response);
                    if(response=='borrado'){
                        swalWithBootstrapButtons.fire(
                            'Borrado!',
                            'El notice ' +nombre+ ' fue borrado correctamente.',
                            'success'
                        )
                        buscar_prov();
                    }
                    else{
                        swalWithBootstrapButtons.fire(
                            'No se pudo borrar!',
                            'El notice ' +nombre+ ' no fue borrado.',
                            'error'
                        )
                    }
                })  
            } else if (
                result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire(
                'Cancelado',
                'EL notice ' +nombre+ ' no fue borrado',
                'error'
                )
                
            }
        })
    })
});