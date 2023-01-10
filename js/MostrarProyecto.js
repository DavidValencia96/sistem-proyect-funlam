$(document).ready(function(){
    var edit=false;
    var funcion;
    buscar_prov();
    function buscar_prov(consulta){
        funcion='buscar';
        $.post('../controlador/ProveedorController.php',{consulta,funcion},(response)=>{
            const proyecto = JSON.parse(response);
            //console.log(response);
            let template='';
            proyecto.forEach(proyecto => {
                template+=`
                <div class="col-6 col-12-small">
                    <h4><b>${proyecto.nombre}</b></h4>
                    <p min="150">${proyecto.descripcion}<a href="./info_proyectos.php">Más Información.</a></p>
                    <h6 class="mb-2">Publicado por: ${proyecto.responsable}, fecha de publicación:  ${proyecto.fecha}</h6>
                </div>
                <hr class="major">
                `;
            });
            $('#proyectopublic').html(template);
        });
    }
});

