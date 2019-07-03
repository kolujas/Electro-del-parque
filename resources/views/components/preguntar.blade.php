<div class="modal fade"
    id="FormDeContacto"
    tabindex="-1"
    role="dialog"
    aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
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
                <div class="md-form mb-5">
                    <i class="fas fa-user prefix grey-text"></i>

                    <input type="text" id="form34" class="form-control validate">
                    
                    <label data-error="wrong" data-success="right" for="form34">Nombre</label>
                </div>

                <div class="md-form mb-5">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    
                    <input type="email" id="form29" class="form-control validate">
                    
                    <label data-error="wrong" data-success="right" for="form29">Email</label>
                </div>

                <div class="md-form mb-5">
                    <i class="fas fa-tag prefix grey-text"></i>
                    
                    <input id="asunto" type="text" id="form32" class="form-control validate">
                    
                    <label data-error="wrong" data-success="right" for="form32">Asunto</label>
                </div>

                <div class="md-form">
                    <i class="fas fa-comment-alt fa-lg"></i>
                    <i class="fas fa-pencil prefix grey-text"></i>
                    
                    <textarea id="mensaje" type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
                    
                    <label data-error="wrong" data-success="right" for="form8">Tu mensaje</label>
                </div>
            </div>

            <div class="modal-footer d-flex justify-content-center">
                <button class="btn">Enviar
                    <i class="fas fa-paper-plane-o ml-1"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    function cargarModal(boton){
        let padre = boton.parentNode.parentNode.parentNode.id;
        let tipo = document.querySelector('#tipo').innerHTML;
        let marca, modelo;
        if(document.querySelector(padre + ' .marca')){
            marca = document.querySelector(padre + ' .marca').innerHTML;
            document.querySelector('#asunto').value = tipo + ': ' + marca;
        }else if(document.querySelector(padre + ' .modelo')){
            modelo = document.querySelector(padre + ' .modelo').innerHTML;
            document.querySelector('#asunto').value = tipo + ': ' + modelo;
        }else{
            document.querySelector('#asunto').value = tipo;
        }
    }
</script>