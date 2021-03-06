<?php
    /** @var Tipo $tipo_actual */
    /** @var Tipo[] $tipos */
    /** @var array[object] $productos */
    /** @var string $titulo */
    /** @var object $aclaracion */
?>

@extends('layout.index')

@section('css')
    <link href="{{ asset('css/producto/sublistado.css') }}" rel="stylesheet">
@endsection

@section('titulo')
    Electromédica del Parque - {{$tipo_actual->nombre}} - {{$titulo}}
@endsection

@section('nav')
    @component('components.nav', ['tipos' => $tipos])
    @endcomponent
@endsection

@section('main')
    <div class="container-fluid px-0">
        <div class="row m-0 p-0 d-flex justify-content-center">
            <div class="col-12">
                <h2 id="tipo" class="h1-responsive mt-4 mb-0 text-center"><span>{{$tipo_actual->nombre}} - </span><span id="slug">{{$titulo}}</span></h2>
            </div>

            <div class="productos col-12 col-md-12 col-lg-10 col-xl-8 p-0 mb-lg-4">
                <div class="row d-flex justify-content-between mx-4 m-lg-0">
                    @foreach($productos as $producto)
                        @if($producto->id_tipo == 5)
                            <div id="producto{{$producto->id_producto}}" class="card text-center col-12 col-md-5 col-lg-2 m-0 mt-4 px-0 mangueras">
                                <div class="mx-lg-2">
                        @else
                            <div id="producto{{$producto->id_producto}}" class="card text-center col-12 col-md-5 col-lg-4 m-0 mt-4 px-0">
                                <div class="mx-lg-2 pb-5">
                        @endif
                                <div class="view overlay">
                                    <img class="card-img-top"
                                        src="/img/{{$producto->imagen}}"
                                        alt="Card image cap">
                                </div>

                                @if($producto->id_tipo == 3)
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
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>                        
            </div>

            @if($producto->id_tipo == 5)
                <div class="aclaracion col-12 col-lg-10 col-xl-8 mt-4">
                    <div class="row p-4">
                        <div class="col-12 m-0 p-0">
                            <h3 class="h3-responsive m-0 mb-4 p-0 text-center font-weight-bold" id="tipo">Consultar por conectores individuales</h3>
                        </div>
                        <div class="col-12 m-0 p-0 parrafoJunto">
                            <p class="lead text-left text-md-left d-flex justify-content-center display-4">
                                <a class="btn btn-md modalButton"
                                    onclick="cargarModal(this)"
                                    data-toggle="modal"
                                    data-target="#FormDeContacto">Consultar
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            @endif
            
            @if($aclaracion->tipo)
                <div class="aclaracion col-12 col-lg-10 col-xl-8 mt-4">
                    <div class="row p-4">
                        @if($aclaracion->tipo == 1)
                            <div class="col-12 m-0 p-0">
                                <h3 class="h3-responsive m-0 mb-4 p-0 text-center font-weight-bold" id="tipo">{{$aclaracion->titulo}}</h3>
                            </div>
                            <div class="col-12 m-0 p-0 parrafoJunto">
                                <p class="lead text-left text-md-left d-flex display-4">{{$aclaracion->texto}}</p>
                            </div>
                        @else
                            <div class="col-12 m-0 p-0">
                                <h3 class="h3-responsive m-0 mb-4 p-0 text-center font-weight-bold" id="tipo">Más modelos</h3>
                            </div>
                            <table class="table">
                                <thead class="fondo-tabla">
                                    <tr>
                                        <th scope="col">Mangueras de PNI</th>
                                        <th scope="col" class="text-center">Tubo</th>
                                        <th scope="col" class="text-center">Tipo</th>
                                        <th scope="col" class="text-center">Conector 1</th>
                                        <th scope="col" class="text-center">Conector 2</th>
                                        <th scope="col" class="text-center">Catalogo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($aclaracion->tabla as $fila)
                                        <tr>
                                            <td>{{$fila->modelos}}</td>
                                            <td class="text-center">{{$fila->tubo}}</td>
                                            <td class="text-center">{{$fila->tipo}}</td>
                                            <td class="text-center">{{$fila->conector1}}</td>
                                            <td class="text-center">{{$fila->conector2}}</td>
                                            <td class="text-center">{{$fila->catalogo}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
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
    <script type="text/javascript" src="/js/producto/sublistado.js"></script>
@endsection