console.log("Prueba validar");


    var campoNOmbre = document.querySelector('input[name=name]');
    var campoEmail = document.querySelector('input[name=email]');
    var boton = document.querySelector('button[id=boton]');

    var password = document.querySelector('input[name=password]');
    var passwordConfirm = document.querySelector('input[name=password_confirmation]');






//REGISTER
campoNOmbre.onblur = function() {
    if(this.value.trim()==''){

        alert("El campo nombre no puede estar vacio");
        campoNOmbre.style.background='red';
        boton.setAttribute("disabled", "");

    }else if(this.value.length < 5){
        alert("El campo nombre no puede tener menos de 5 caracteres");
        campoNOmbre.style.background='red';
        boton.setAttribute("disabled", "");
    }else{
        boton.disabled = false;
        campoNOmbre.style.background='green';
    }
}

var regex = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
campoEmail.onblur = function() {
    if(this.value.trim()==''){

        alert("El campo email no puede estar vacio");
        campoEmail.style.background='red';
        boton.setAttribute("disabled", "");

    }else if(!regex.test(this.value)){
        alert("El campo email no cumple con el formato valido");
        campoEmail.style.background='red';
        boton.setAttribute("disabled", "");
    }else{
        boton.disabled = false;
        campoEmail.style.background='green';
    }
}

password.onblur = function() {
    if(this.value.trim()==''){

        alert("El campo Contraseña no puede estar vacio");
        password.style.background='red';
        boton.setAttribute("disabled", "");

    }else if(this.value.length < 5){
        alert("El campo Contraseña no puede tener menos de 8 caracteres");
        password.style.background='red';
        boton.setAttribute("disabled", "");
    }else{
        boton.disabled = false;
        password.style.background='green';
    }
}

passwordConfirm.onblur = function() {
    if(this.value.trim()==''){

        alert("El campo Confirmar contraseña no puede estar vacio");
        passwordConfirm.style.background='red';
        boton.setAttribute("disabled", "");

    }else if(this.value!=password.value){
        alert("El campo Confirmar contraseña no coincide con la contraseña original");
        passwordConfirm.style.background='red';
        boton.setAttribute("disabled", "");
    }else{
        boton.disabled = false;
        passwordConfirm.style.background='green';
    }
}

//NUEVO Producto
var campoNombre = document.querySelector('input[name=nombre]');
var campoPrecio = document.querySelector('input[name=precio]');
var campoStock = document.querySelector('input[name=stock]');
var campoDescripcion = document.querySelector('input[name=descripcion]');


campoNombre.onblur = function() {
    if(this.value.trim()==''){

        alert("El campo nombre no puede estar vacio");
        campoNombre.style.background='red';
        boton.setAttribute("disabled", "");
        }
        else
        {
        boton.disabled = false;
        campoNombre.style.background='green';
    }
}



campoPrecio.onblur = function() {
    if(this.value.trim()==''){
        alert("El campo precio no puede estar vacio");
        campoPrecio.style.background='red';
        boton.setAttribute("disabled", "");
    }
    else
    {
        boton.disabled = false;
        campoPrecio.style.background='green';
    }
}

campoStock.onblur = function() {
    if(this.value.trim()==''){
        alert("El campo stock no puede estar vacio");
        campoStock.style.background='red';
        boton.setAttribute("disabled", "");
    }
    else
    {
        boton.disabled = false;
        campoStock.style.background='green';
    }
}


campoDescripcion.onblur = function() {
    if(this.value.trim()==''){
        alert("El campo descripcion no puede estar vacio");
        campoDescripcion.style.background='red';
        boton.setAttribute("disabled", "");
    }
    else
    {
        boton.disabled = false;
        campoDescripcion.style.background='green';
    }
}



password.onfocus = function(){
    console.log("Hiciste foco en el campo nombre");
}




/*function Habilitar(){
    var password = document.getElementById("password");
    var passwordConfirm = document.getElementById("password-confirm1");
    var boton =  document.getElementById("boton");
    console.log("Hola js");
    if(password.value != passwordConfirm.value)
    {
        boton.disabled =true;


    }
    else
    {
        boton.disabled = false;

    }
}
*/
