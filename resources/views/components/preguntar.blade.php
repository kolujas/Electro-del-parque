<div class="modal fade"
    id="FormDeContacto"
    tabindex="-1"
    role="dialog"
    aria-labelledby="myModalLabel"
    aria-hidden="true">
    <form class="modal-dialog needs-validation contact-form m-auto" role="document" novalidate="novalidate" action="/preguntar" method="post" data-text="El contacto aún no funciona, Si desea enviar un mensaje personalmente hágalo a: electromedicadelparque@gmail.com">
        @csrf

        <div class="modal-content">
            <div class="modal-header text-center">
                <div class="col-12">
                    <h4 class="modal-title w-100 font-weight-bold">Consultanos</h4>
                </div>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body mx-3">
                <div class="row form-row d-flex justify-content-center">
                    <div class="col-md-10 col-lg-5 my-3">
                        <label for="nombre">Nombre</label>
                        <input type="text"
                            class="form-control"
                            id="nombre"
                            placeholder="Nombre"
                            name="nombre"
                            value="{{old('nombre')}}"
                            required="required">
                        <div class="invalid-tooltip mb-4"
                            @if($errors->has('mensaje'))
                                style="display: block;"
                            @endif>
                            @if($errors->has('nombre'))
                                {{ $errors->first('nombre') }}
                            @endif
                        </div>
                    </div>

                    <div class="col-md-10 col-lg-5 my-3">
                        <label for="asunto">Asunto</label>
                        <input type="text"
                            class="form-control"
                            id="asunto"
                            placeholder="Asunto"
                            name="asunto"
                            value="{{old('asunto')}}"
                            required="required">
                        <div class="invalid-tooltip mb-4"
                            @if($errors->has('nombre'))
                                style="display: block;"
                            @endif>
                            @if($errors->has('nombre'))
                                {{ $errors->first('nombre') }}
                            @endif
                        </div>
                    </div>

                    <div class="col-md-10 col-lg-5 my-3">
                        <label for="telefono">Teléfono</label>
                        <input type="number"
                            class="form-control"
                            id="telefono"
                            placeholder="Teléfono"
                            name="telefono"
                            value="{{old('telefono')}}"
                            required="required">
                        <div class="invalid-tooltip mb-4"
                            @if($errors->has('telefono'))
                                style="display: block;"
                            @endif>
                            @if($errors->has('telefono'))
                                {{ $errors->first('telefono') }}
                            @endif
                        </div>
                    </div>

                    <div class="col-md-10 col-lg-5 my-3">
                        <label for="email">Email</label>
                        <input type="email"
                            class="form-control"
                            id="email"
                            placeholder="Email"
                            name="correo"
                            value="{{old('correo')}}"
                            required="required">
                        <div class="invalid-tooltip mb-4"
                            @if($errors->has('correo'))
                                style="display: block;"
                            @endif>
                            @if($errors->has('correo'))
                                {{ $errors->first('correo') }}
                            @endif
                        </div>
                    </div>

                    <div class="md-form col-12 col-md-10 shadow-textarea">
                        <p>Mensaje</p>
                        <textarea id="mensaje"
                            class="md-textarea form-control form-control z-depth-1"
                            rows="3"
                            name="mensaje" placeholder="Mensaje">{{old('mensaje')}}</textarea>
                        <div class="invalid-tooltip mb-4"
                            @if($errors->has('mensaje'))
                                style="display: block;"
                            @endif>
                            @if($errors->has('mensaje'))
                                {{ $errors->first('mensaje') }}
                            @endif
                        </div>
                    </div>
                </div>   
            </div>

            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" class="btn enviar modalEnviar submit">Enviar
                    <i class="fas fa-paper-plane-o ml-1"></i>
                </button>
            </div>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        maintenance.load();
    });

    function cargarModal(boton){
        let id_padre = boton.parentNode.parentNode.parentNode.parentNode.id;
        let tipo, slug;
        if(document.querySelector('#slug')){
            slug = document.querySelector('#slug').innerHTML
            tipo = document.querySelector('#tipo span:first-child').innerHTML + slug;
        }else{
            tipo = document.querySelector('#tipo').innerHTML;
        }
        let marca, modelo;
        if(document.querySelector('#' + id_padre + ' .marca')){
            marca = document.querySelector('#' + id_padre + ' .marca').innerHTML;
            document.querySelector('#asunto').value = 'Consulta web - ' + tipo + ' - ' + marca;
        }else{
            document.querySelector('#asunto').value = 'Consulta web - ' + tipo;
        }
    }

    // validacion

    const enviar = document.querySelector('.enviar');

    enviar.addEventListener('click', function(e){
        e.preventDefault();
        validateForm();
    })

    function invalidar(input, msj){
        input.invalid.innerHTML = msj;
        input.invalid.style.display = 'block';
        input.content.style.cssText = 'border-color: red !important;';
    }

    function validar(input){
        input.content.style.cssText = 'border-color: #01B3A7 !important;';
        input.invalid.style.display = 'none';
    }

    function validateForm() {
        let valid = true;

        let name = {
            value: document.getElementById('nombre').value,
            content: document.getElementById('nombre'),
            invalid: document.querySelector('#nombre ~ .invalid-tooltip'),
        }

        let asunto = {
            value: document.getElementById('asunto').value,
            content: document.getElementById('asunto'),
            invalid: document.querySelector('#asunto ~ .invalid-tooltip'),
        }

        let tel = {
            value: document.getElementById('telefono').value,
            content: document.getElementById('telefono'),
            invalid: document.querySelector('#telefono ~ .invalid-tooltip'),
        }

        let email = {
            value: document.getElementById('email').value,
            content: document.getElementById('email'),
            invalid: document.querySelector('#email ~ .invalid-tooltip'),
        }

        let mensaje = {
            value: document.getElementById('mensaje').value,
            content: document.getElementById('mensaje'),
            invalid: document.querySelector('#mensaje ~ .invalid-tooltip'),
        }

        if(name.value == ""){
            invalidar(name, 'El nombre no puede estar vacío');
            valid = false;
        }else{
            validar(name);
        }

        if(asunto.value == ""){
            invalidar(asunto, 'El asunto no puede estar vacío');
            valid = false;
        }else{
            validar(asunto);
        }

        if(tel.value == ""){
            invalidar(tel, 'El telefono no puede estar vacío');
            valid = false;
        }else{
            validar(tel);
        }

        if(email.value == ""){
            invalidar(email, 'El email no puede estar vacío');
            valid = false;
        }else{
            validar(email);
        }
        
        if(mensaje.value == ""){
            invalidar(mensaje, 'El mensaje no puede estar vacío');
            valid = false;
        }else{
            validar(mensaje);
        }
        
        if(valid){
            if(!document.querySelector('.maintenance.contact-form')){
                document.querySelector('.contact-form').submit();
            }
        }else{
            return false;
        }
    }

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>