const enviar = document.querySelector('.enviar');

enviar.addEventListener('click', function(e){
    e.preventDefault();
    validateForm();
    console.log('Validando...');
})

// Invalidar

function invalidar(input, msj){
    input.invalid.innerHTML = msj;
    input.invalid.style.display = 'block';
}

function validar(input){
    input.content.style.cssText = 'border-color: #01B3A7 !important;';
    input.invalid.style.display = 'none';
}

    function validateForm() {
        let valid = true;
        var name = {
            value: document.getElementById('nombre').value,
            content: document.getElementById('nombre'),
            invalid: document.querySelector('#nombre ~ .invalid-tooltip'),
        }

        var tel = {
            value: document.getElementById('telefono').value,
            content: document.getElementById('telefono'),
            invalid: document.querySelector('#telefono ~ .invalid-tooltip'),
        }

        var email = {
            value: document.getElementById('email').value,
            content: document.getElementById('email'),
            invalid: document.querySelector('#email ~ .invalid-tooltip'),
        }

        var mensaje = {
            value: document.getElementById('mensaje').value,
            content: document.getElementById('mensaje'),
            invalid: document.querySelector('#mensaje ~ .invalid-tooltip'),
        }

        if (name.value == "") {
            invalidar(name, 'El nombre no puede estar vacío');
            valid = false;
        }else{
            validar(name);
        }

        if (tel.value == "") {
            invalidar(tel, 'El telefono no puede estar vacío');
            valid = false;
        }else{
            validar(tel);
        }

        if (email.value == "") {
            invalidar(email, 'El email no puede estar vacío');
            valid = false;
        }else{
            // var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/;
            // if(!re.test(email)){
            //     invalidar(email, 'Debe contener formato tipo email (@dominio.etc)');
            //     valid = false;
            // }else{
                validar(email);
            // }
        }
        
        if (mensaje.value == "") {
            invalidar(mensaje, 'El mensaje no puede estar vacío');
            valid = false;
        }else{
            validar(mensaje);
        }
        
        if(valid){
            document.querySelector('.status').innerHTML = "Sending...";
            document.querySelector('.contact-form').submit();
        }else{
            return false;
        }
       
      
        }

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
            })