<?php
    /** @var Tipo $tipo */
?>

@extends('layout.index')

@section('css')
    <link href="{{ asset('css/producto/intermedio.css') }}" rel="stylesheet">
@endsection

@section('titulo')
    Electro del parque - {{$tipo->nombre}}
@endsection

@section('nav')
    @component('components.nav')
    @endcomponent
@endsection

@section('main')
    <div class="container-fluid">
        <div class="row d-flex justify-content-lg-center">
            <div class="col-12 my-4">
                <h2 class="text-center m-0 p-0">{{$tipo->nombre}}</h2>
            </div>

            <div class="productos col-12 col-md-12 col-lg-10 col-xl-8">
                <div class="row d-flex justify-content-around">
                    <a href="{{$tipo->slug}}/productos" class="card text-center col-12 col-md-5 col-lg-4 m-0">
                        <div class="pt-4 mt-md-0">
                            <h4 class="h5 card-title mb-4">Categoria 1</h4>

                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
                                alt="Card image cap">
                        </div>
                    </a>
                    <a href="{{$tipo->slug}}/productos/pepe" class="card text-center col-12 col-md-5 col-lg-4 m-0 mt-4 mt-md-0">
                        <div class="pt-4 mt-md-0">
                            <h4 class="h5 card-title mb-4">Categoria 2</h4>

                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
                                alt="Card image cap">
                        </div>
                    </a>
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
    <script type="text/javascript" src="js/web/intermedio.js"></script>
@endsection