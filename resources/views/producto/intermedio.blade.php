<?php
    /** @var Tipo[] $tipos */
    /** @var Tipo $tipo */
    /** @var object $categoria */
?>

@extends('layout.index')

@section('css')
    <link href="{{ asset('css/producto/intermedio.css') }}" rel="stylesheet">
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
            <div class="productos col-12 col-md-12 col-lg-10 col-xl-8 p-0 mb-lg-4">
                <h2 class="h1-responsive m-0 mt-4 text-center">{{$tipo->nombre}}</h2>
                <div class="row d-flex justify-content-around mx-4 m-lg-0">
                    @foreach($categorias as $categoria)
                        @if($categoria->id_categoria == 1)
                            <a href="/{{$tipo->slug}}/productos" class="card text-center col-12 col-md-5 col-lg-4 m-0 mt-4 my-lg-4 px-0">
                        @else
                            <a href="{{$tipo->slug}}/productos/{{$categoria->slug}}" class="card text-center col-12 col-md-5 col-lg-4 m-0 mt-4 my-lg-4 px-0">
                        @endif
                            <div class="pt-4 mt-md-0 mx-lg-2">
                                <h4 class="h5 card-title font-weight-bold mb-4">{{$categoria->nombre}}</h4>

                                <img class="card-img-top"
                                    src="/img/{{$categoria->imagen}}"
                                    alt="Card image cap">
                                
                                <span class="top-line"></span>
                                <span class="right-line"></span>
                                <span class="bottom-line"></span>
                                <span class="left-line"></span>
                            </div>
                        </a>
                    @endforeach
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