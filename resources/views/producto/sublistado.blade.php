<?php
    /** @var Tipo[] $tipos */
    /** @var Tipo $tipo */
    /** @var array[object] $productos */
    /** @var string $titulo */
?>

@extends('layout.index')

@section('css')
    <link href="{{ asset('css/producto/sublistado.css') }}" rel="stylesheet">
@endsection

@section('titulo')
    Electromédica del Parque - {{$tipo->nombre}} - {{$titulo}}
@endsection

@section('nav')
    @component('components.nav', ['tipos' => $tipos])
    @endcomponent
@endsection

@section('main')
    <div class="container-fluid px-0">
        <div class="row m-0 p-0 d-flex justify-content-center">
            <div class="col-12">
                <h2 id="tipo" class="h1-responsive mt-4 mb-0 text-center"><span>{{$tipo->nombre}} - </span><span id="slug">{{$titulo}}</span></h2>
            </div>

            <div class="productos col-12 col-md-12 col-lg-10 col-xl-8 p-0 mb-lg-4">
                <div class="row d-flex justify-content-between mx-4 m-lg-0">
                    @foreach($productos as $producto)
                    <div id="producto{{$producto->id_producto}}" class="card text-center col-12 col-md-5 col-lg-4 m-0 mt-4 px-0">
                            <div class="mx-lg-2 pb-5">
                                <div class="view overlay">
                                    <img class="card-img-top"
                                        src="/img/productos/{{$tipo->id_tipo}}/{{$producto->imagen}}"
                                        alt="Card image cap">
                                </div>

                                <div class="card-footer">
                                    <div class="consulta">
                                        <a class="btn btn-md modalButton"
                                            onclick="cargarModal(this)"
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
    <script type="text/javascript" src="/js/producto/sublistado.js"></script>
@endsection