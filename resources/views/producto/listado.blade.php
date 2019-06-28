<?php
    /** @var Marca[] $marcas */
    /** @var Producto[] $productos */
    /** @var Tipo $tipo */
?>

@extends('layout.index')

@section('css')
    <link href="{{ asset('css/producto/listado.css') }}" rel="stylesheet">
@endsection

@section('titulo')
    El Club - {{$tipo->nombre}}
@endsection

@section('nav')
    @component('components.subnav')
        @foreach($marcas as $marca)
            <li><a href="#{{$marca->nombre}}">{{$marca->nombre}}</a></li>
        @endforeach
    @endcomponent
@endsection

@section('main')
    <div class="container-fluid">
        @foreach($productos as $producto)
            <p>{{$producto->modelo}}</p>
        @endforeach
    </div>
@endsection

@section('footer')
    @component('components.footer')
    @endcomponent
@endsection

@section('js')
    <script type="text/javascript" src="js/web/inicio.js"></script>
@endsection