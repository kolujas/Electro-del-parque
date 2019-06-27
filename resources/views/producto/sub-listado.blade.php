<?php
    /** @var Marca[] $marcas */
    /** @var Producto[] $productos */
    /** @var Tipo $tipo */
?>

@extends('layout.index')

@section('css')
    <link href="{{ asset('css/producto/sublistado.css') }}" rel="stylesheet">
@endsection

@section('titulo')
    Electro del parque - 
@endsection

@section('nav')
    @component('components.subnav')        
    @endcomponent
@endsection

@section('main')
    <div class="container-fluid">
        
        
    <div class="tipo">
        <h2 class="text-center mt-4">ELG</h2>
        <div class="my-4 text-center">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(54).jpg" class="img-fluid z-depth-1" alt="1">
        </div>    

        <div class="card-deck col-12 p-5">

            <!-- Card -->
            <div class="card mb-4">

                <!--Card image-->
                <div class="view overlay">
                    <img
                        class="card-img-top"
                        src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
                        alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        
                        <a class="btn btn-light-blue btn-md"
                            data-toggle="modal"
                            data-target="#FormDeContacto">Consultar</a>

                    </div>

                </div>
                <!-- Card -->
            <!-- Card -->
            <div class="card mb-4">

                <!--Card image-->
                <div class="view overlay">
                    <img
                        class="card-img-top"
                        src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
                        alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <a class="btn btn-light-blue btn-md text-center"
                            data-toggle="modal"
                            data-target="#FormDeContacto">Consultar</a>

                    </div>

                </div>
                <!-- Card -->
            <!-- Card -->
            <div class="card mb-4">

                <!--Card image-->
                <div class="view overlay">
                    <img
                        class="card-img-top"
                        src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
                        alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <a class="btn btn-light-blue btn-md text-center"
                            data-toggle="modal"
                            data-target="#FormDeContacto">Consultar</a>
                        </div>
                </div>
                <!-- Card -->
                    </div>
                <!-- Card deck -->

                            <div
                class="modal fade"
                id="FormDeContacto"
                tabindex="-1"
                role="dialog"
                aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Consultanos</h4>
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
                                        <input type="text" id="form32" class="form-control validate">
                                            <label data-error="wrong" data-success="right" for="form32">Asunto</label>
                                        </div>

                                        <div class="md-form">
                                            <i class="fas fa-pencil prefix grey-text"></i>
                                            <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
                                            <label data-error="wrong" data-success="right" for="form8">Tu mensaje</label>
                                        </div>

                                    </div>
                                    <div class="modal-footer d-flex justify-content-center">
                                        <button class="btn btn-primary">Enviar
                                            <i class="fas fa-paper-plane-o ml-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>                        
        </div>
    </div>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="js/web/inicio.js"></script>
@endsection