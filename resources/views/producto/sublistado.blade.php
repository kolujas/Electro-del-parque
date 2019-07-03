<?php
    /** @var Tipo[] $tipos */
    /** @var Tipo $tipo */
    /** @var array[object] $productos */
    /** @var object $banner */
    /** @var string $aclaracion */
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
        <div class="row m-0 p-0 d-flex justify-content-center">
            <div class="col-12">
                <h2 class="h1-responsive mt-4 mb-0 text-center">{{$tipo->nombre}}</h2>
            </div>

            <div class="productos col-12 col-md-12 col-lg-10 col-xl-8 p-0 mb-lg-4">
                <div class="row d-flex justify-content-between mx-4 m-lg-0">
                    @foreach($productos as $producto)
                        <div class="card text-center col-12 col-md-5 col-lg-4 m-0 mt-4 px-0">
                            <div class="mx-lg-2">
                                <div class="view overlay">
                                    <img class="card-img-top"
                                        src="{{$producto->imagen}}"
                                        alt="Imagen del producto">
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
                    @endforeach
                </div>                        
            </div>
            
            @if($tipo->id_tipo == 4 || $tipo->id_tipo == 5)
                <div class="aclaracion col-12 col-md-12 col-lg-10 col-xl-8 mt-4">
                    <div class="row p-4">
                        <div class="col-12">
                            <p class="lead text-center text-md-left d-flex mx-4 m-md-0 py-4 py-md-0 mb-0">{{$aclaracion}}</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    
    @component('components.preguntar')
    @endcomponent
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="js/web/sublistado.js"></script>
@endsection