const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    celular: /^9(\d{8})$/, // 9 numeros.
    ruc: /^20(\d{9})$/ // 11 numeros.
}

const campos = {
    correo: false,
    celular: false,
    ruc: false
}

const validarFormulario = (e) => {
    switch (e.target.name) {
        case "ruc":
            validarCampo(expresiones.ruc, e.target, 'ruc');
        break;
        case "correo":
            validarCorreo(expresiones.correo, e.target, 'correo');
        break;
        case "celular":
            validarCampo(expresiones.celular, e.target, 'celular');
        break;
    }
}

const validarCorreo = (expresion, input, campo) => {
    if(expresion.test(input.value) && validarCorreoCorporativo(input.value)){
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        campos[campo] = true;
    } else {
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        campos[campo] = false;
    }
}

const validarCampo = (expresion, input, campo) => {
    if(expresion.test(input.value)){
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        campos[campo] = true;
    } else {
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        campos[campo] = false;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

function validarCorreoCorporativo(email){
    email=email.toLowerCase();
    if (email.indexOf("@gmail.")==-1 && email.indexOf("@hotmail.")==-1 && 
        email.indexOf("@outlook.")==-1 && email.indexOf("@yahoo.")==-1) {
        return true;
    }else{
        return false;
    }
}

function validarForm() {

    var todo_correcto = true;

    var ruc = document.forms["formulario"]["ruc"].value;
    var celular = document.forms["formulario"]["celular"].value;
    var email = document.forms["formulario"]["correo"].value;


    if(!(expresiones.ruc.test(ruc))){
        document.getElementById(`grupo__ruc`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__ruc`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__ruc i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__ruc i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__ruc .formulario__input-error`).classList.add('formulario__input-error-activo');
    }
       
    if(!(expresiones.celular.test(celular))){
        document.getElementById(`grupo__celular`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__celular`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__celular i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__celular i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__celular .formulario__input-error`).classList.add('formulario__input-error-activo');
    }
    
    if(!(expresiones.correo.test(email) && validarCorreoCorporativo(email))){
        document.getElementById(`grupo__correo`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__correo`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__correo i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__correo i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__correo .formulario__input-error`).classList.add('formulario__input-error-activo');
    }



        
    if(expresiones.ruc.test(ruc) && expresiones.celular.test(celular) && expresiones.correo.test(email) && validarCorreoCorporativo(email)){
        todo_correcto = true;
        document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
        setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 10000);
    }
    else{
        todo_correcto = false;
    }

    return todo_correcto;

}

//Esto es para ambos formulario, este corrige el error de al darle enter se envie el submit
$(document).ready(function() {

    $('form').keypress(function(e){   
    if(e == 13){
        return false;
    }
    });

    $('input').keypress(function(e){
    if(e.which == 13){
        return false;
    }
    });

});

