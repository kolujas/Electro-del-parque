<?php
    /** @var Tipo[] $tipos */
    /** @var Tipo $tipo */
?>

@extends('layout.index')

@section('css')
    <link href="{{ asset('css/producto/sublistado.css') }}" rel="stylesheet">
@endsection

@section('titulo')
    Electro del parque - {{$tipo->nombre}}
@endsection

@section('nav')
    @component('components.nav', ['tipos' => $tipos])
    @endcomponent
@endsection

@section('main')
    <div class="container-fluid px-0">
        <div class="jumbotron card card-image px-0 d-lg-block m-0"
        style="background-image: url(/bmd/img/bg.png);">
            <div class="text-white text-center py-5 px-4">
                <div>
                    <h2 class="card-title h1-responsive pt-3 mb-5 font-weight-bold text-white">
                        <strong>Electro del parque</strong>
                    </h2>
                    <p class="mx-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Repellat fugiat.
                    </p>
                    <a class="btn btn-outline-white btn-lg" href="/">Ver más</a>
                </div>
            </div>
        </div>

        <div class="row m-0 p-0 d-flex justify-content-center">
            <div class="productos col-12 col-md-12 col-lg-10 col-xl-8 p-0 mb-lg-4">
                <h2 class="h1-responsive mt-4 mb-0 text-center">Productos</h2>
                <div class="row d-flex justify-content-between mx-4 m-lg-0">
                    <div class="card text-center col-12 col-md-5 col-lg-4 m-0 mt-4 px-0">
                        <div class="mx-lg-2">
                            <div class="view overlay">
                                <img class="card-img-top"
                                    src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
                                    alt="Card image cap">
                            </div>

                            <div class="card-body text-center pb-4">
                                <div class="consulta">
                                    <a class="btn btn-md"
                                        data-toggle="modal"
                                        data-target="#FormDeContacto">Consultar</a>
                                </div>
                            </div>
                            
                            <span class="top-line"></span>
                            <span class="right-line"></span>
                            <span class="bottom-line"></span>
                            <span class="left-line"></span>
                        </div>
                    </div>

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
        </div>
    </div>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="js/web/sublistado.js"></script>
@endsection