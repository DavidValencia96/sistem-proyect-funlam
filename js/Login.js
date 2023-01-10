const inputs = document.querySelectorAll(".input1");

function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}
function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}
inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});

$(document).ready(function(){
    $('#aviso1').hide();
    $('#aviso').hide();
    $('#form-ingresar').submit(e =>{
        let user = $('#user').val();
        let pass = $('#pass').val();
        if(pass == '' || user == ''){ //si los campos son vacios, avise que debe llenarlos
            $('#aviso').show();
            $('#aviso').text('Debe llenar todos los campos');
        }
        else{
            $('#aviso').hide();
            let funcion ='verificar';
            $.post('controlador/LoginController.php',{funcion,pass,user},(response)=>{
                console.log(response);
                $('#aviso').hide();
                $('#aviso1').hide();
                if(response){
                    $('#aviso1').show();
                    $('#aviso1').text('Verifique su usuario y contraseña.');
                    $('#form-ingresar').trigger('reset');
                }
                else{
                    $('#aviso').hide();
                    $('#aviso1').hide();
                    $('#aviso').show();
                    $('#aviso').text('Ingresando');
                    $('#form-ingresar').trigger('reset');
                }
            });
        }
        e.preventDefault();//no se refresque la pagina hasta finalizar
    })
})