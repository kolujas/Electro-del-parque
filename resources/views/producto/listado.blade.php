<?php
    /** @var Tipo $tipo_actual */
    /** @var Marca $marca_actual */
    /** @var Tipo[] $tipos */
    /** @var Marca[] $marcas */
    /** @var Producto[] $productos */
    /** @var object $banner */
    /** @var string $aclaracion */
?>

@extends('layout.index')

@section('css')
    <link href="{{ asset('css/producto/listado.css') }}" rel="stylesheet">
@endsection

@section('titulo')
    @if($tipo_actual->id_tipo == 3 || $tipo_actual->id_tipo == 5)
        Electromédica del Parque - {{$tipo_actual->nombre}} - {{$titulo}}
    @else
        Electromédica del Parque - {{$tipo_actual->nombre}}
    @endif
@endsection

@section('nav')
    @component('components.nav', ['tipos' => $tipos])
    @endcomponent
@endsection

@section('main')
    <div class="container-fluid px-0">
        <div class="row m-0 p-0 d-flex justify-content-center">
            <div class="col-12">
                @if($tipo_actual->id_tipo == 3 || $tipo_actual->id_tipo == 5)
                    <h2 class="h1-responsive mt-4 mb-0 text-center" id="tipo">
                        <span>{{$tipo_actual->nombre}} - </span>
                        <span id="slug">{{$titulo}}</span>
                    </h2>           
                @elseif($tipo_actual->id_tipo == 1)
                    <h2 class="h1-responsive mt-4 mb-0 text-center" id="tipo">{{$tipo_actual->nombre}}</h2>

                    <div class="listaAclaracionDivPadre text-center mb-0">
                        <h3 class="h4-responsive my-4 text-center ml-2">Los productos pueden tener las siguientes terminaciones:</h3>

                        <img src="/img/tipos/banners/oxisensores_banner.jpg" class="img-fluid" alt="">

                    </div>  
                @else
                    <h2 class="h1-responsive mt-4 mb-0 text-center" id="tipo">{{$tipo_actual->nombre}}</h2>
                @endif
            </div>

            @if($tipo_actual->id_tipo == 2 || $tipo_actual->id_tipo == 3 || $tipo_actual->id_tipo == 4 || $tipo_actual->id_tipo == 6)
                <div class="col-12 p-0 my-4 m-auto d-flex justify-content-center">
                    <img class="d-none d-lg-block my-4" src="/img/tipos/{{$banner->imagen}}" alt="">
                </div>
            @endif 

            @if($tipo_actual->id_tipo == 4)
                <div class="productos col-12 col-lg-8 p-0 mb-lg-4">
            @else
                <div class="col-12 col-lg-2 p-0 mt-4 mb-lg-4 mr-lg-4 px-2">
                    <div class="accordion-group list-group d-flex justify-content-between row">
                        <div id="filtros" href="#!" class="accordion list-group-item list-group-item-action col-12 m-0 p-0">
                            <div class="accordion-title d-flex justify-content-between font-weight-bold py-4 px-3">
                                @if($tipo_actual->id_tipo == 1 || $tipo_actual->id_tipo == 2 || $tipo_actual->id_tipo == 3)
                                    <h3 class="h5 m-0">Marcas</h3>
                                @else
                                    <h3 class="h5 m-0">Materiales</h3>
                                @endif
                                <i class="fas fa-angle-down d-flex align-items-center"></i>
                            </div>
                            <div class="accordion-body">
                                <ul class="list">
                                    @foreach($marcas as $marca)
                                        @if($marca_actual->id_marca == $marca->id_marca)
                                            <li class="active">
                                                <a href="/{{$tipo_actual->slug}}/productos">{{$marca->nombre}}</a>
                                                <i aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </i>
                                            </li>
                                        @else
                                            <li>
                                                @if($marca->id_marca > 0)
                                                    <a href="/{{$tipo_actual->slug}}/productos/{{$marca->slug}}">{{$marca->nombre}}</a>
                                                @else
                                                    <a href="/{{$tipo_actual->slug}}/productos">{{$marca->nombre}}</a>
                                                @endif
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="productos col-1 col-lg-7 p-0 mb-lg-4">
            @endif
                <div class="row d-flex justify-content-between mx-4 m-lg-0">
                    @foreach($productos as $producto)
                        <div id="producto{{$producto->id_producto}}" class="card text-center col-12 col-md-5 col-lg-4 m-0 mt-4 px-0">
                            <div class="mx-lg-2 pb-5">
                                <div class="view overlay">
                                    <img class="card-img-top"
                                        src="/img/{{$producto->imagen}}"
                                        alt="Card image cap">
                                </div>

                                <div class="card-body text-center py-4">
                                    @if($producto->id_marca != null)
                                        <h4 class="card-title m-0 p-0 marca">{{$producto->marca->nombre}}</h4>
                                    @endif

                                    @if($producto->modelo != null)
                                        <div class="my-4">
                                            <p class="card-text modelo">{{$producto->modelo}}</p>
                                        </div>
                                    @endif
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
                            <ul class="m-0 list-group w-100">
                                @foreach($aclaracion->listado as $item)
                                    <li class="list-group-item">{{$item}}</li>
                                @endforeach
                            </ul>
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
    <script type="text/javascript" src="{{asset('js/accordion.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/producto/listado.js')}}"></script>
@endsection