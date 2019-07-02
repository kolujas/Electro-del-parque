const enviar = document.querySelector('.enviar');

enviar.addEventListener('click', function(e){
    e.preventDefault();
    validateForm();
    console.log('Validando...');
})



    function validateForm() {
        var name =  document.getElementById('nombre').value;
        if (name == "") {
            document.querySelector('#nombre ~ .invalid-tooltip').innerHTML = "hola";
            document.querySelector('#nombre ~ .invalid-tooltip').style.display = 'block';
            console.log(document.querySelector('#nombre + .invalid-tooltip'));
            return false;
        }
        var email =  document.getElementById('email').value;
        console.log(email);
        if (email == "") {
            document.querySelector('#email ~ .invalid-tooltip').innerHTML = "Email cannot be empty";
            document.querySelector('#email ~ .invalid-tooltip').style.display = 'block';
            console.log(document.querySelector('#email + .invalid-tooltip'));
            return false;
        } else {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(!re.test(email)){
                document.querySelector('#email ~ .invalid-tooltip').innerHTML = "Email formato invalido";
                document.querySelector('#email ~ .invalid-tooltip').style.display = 'block';
                return false;
            }else{
                document.querySelector('#email ~ .invalid-tooltip').style.display = 'none';
            }
        }
        // var subject =  document.getElementById('subject').value;
        // if (subject == "") {
        //     document.querySelector('.status').innerHTML = "Subject cannot be empty";
        //     return false;
        // }
        // var message =  document.getElementById('message').value;
        // if (message == "") {
        //     document.querySelector('.status').innerHTML = "Message cannot be empty";
        //     return false;
        // }
        document.querySelector('.status').innerHTML = "Sending...";
        document.querySelector('.contact-form').submit();
      
        }

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
            })