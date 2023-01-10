$(document).ready(function(){
    validacion()

    $('#btnguardar').click(function(){
        var datos=$('#formdata').serialize();
        
        $.ajax({
            type:"POST",
            url:"./modelo/insertar.php",
            data: datos,
            success:function (response){
                console.log(response);
                if(response){
                    alert("usuario creado");
                    window.location = './index.php';
                }
                else{
                    alert("error al crear");
                    window.location.href='./registro.php';
                }
            }
        });
        return false;
    });

    function validacion() {
        if ('#nombres') {
          // Si no se cumple la condicion...
            alert('[ERROR] El campo nombres debe tener un valor');
            return false;
        }
        else if ('#apellidos') {
          // Si no se cumple la condicion...
            alert('[ERROR] El campo apellidos debe tener un valor');
            return false;
        }
        else if ('#carrera') {
          // Si no se cumple la condicion...
            alert('[ERROR] El campo carrera debe tener un valor');
            return false;
        }
        else if ('#email') {
          // Si no se cumple la condicion...
            alert('[ERROR] El campo email debe tener un valor');
            return false;
        }
        else if ('#user') {
          // Si no se cumple la condicion...
            alert('[ERROR] El campo usuario debe tener un valor');
            return false;
        }
        else if ('#pass') {
          // Si no se cumple la condicion...
            alert('[ERROR] El campo constraseña debe tener un valor');
            return false;
        }

        // Si el script ha llegado a este punto, todas las condiciones
        // se han cumplido, por lo que se devuelve el valor true
        return true;
    }


    //window.onload = function () {
    //    document.formdata.nombres.focus();
    //    document.formdata.addEventListener('submit', validarFormulario);
    //}
    //window.onload = function () {
    //    document.formdata.apellidos.focus();
    //    document.formdata.addEventListener('submit', validarFormulario);
    //}
    //window.onload = function () {
    //    document.formdata.carrera.focus();
    //    document.formdata.addEventListener('submit', validarFormulario);
    //}
//
    //function validarFormulario(evObject) {
    //    evObject.preventDefault();
    //    var todoCorrecto = true;
    //    var formulario = document.formdata;
    //    for (var i=0; i<formulario.length; i++) {
    //        if(formulario[i].type =='text') {
    //            if (formulario[i].value == null || formulario[i].value.length == 0 || /^\s*$/.test(formulario[i].value)){
    //                alert (formulario[i].name+ ' no puede estar vacío o contener sólo espacios en blanco');
    //                todoCorrecto=false;
    //            }
    //        }
    //    }
    //    if (todoCorrecto ==true) {formulario.submit();}
    //}
});
