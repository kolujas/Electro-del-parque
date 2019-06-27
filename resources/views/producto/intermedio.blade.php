<?php
    /** @var Marca[] $marcas */
    /** @var Producto[] $productos */
    /** @var Tipo $tipo */
?>

@extends('layout.index')

@section('css')
    <link href="{{ asset('css/producto/intermedio.css') }}" rel="stylesheet">
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

        <div class="card-deck col-12 p-5">

            <!-- Card -->
            <div class="card mb-4">

                <!--Card image-->
                <div class="view overlay">
                <!--Title-->
                <h4 class="card-title text-center">Producto #1</h4>
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
                        <!--Text-->
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, minus?.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of
                        buttons -->
                        <a class="btn btn-light-blue btn-md"
                            data-toggle="modal"
                            data-target="#FormDeContacto">Acceder</a>
                    </div>
                </div>
            <div class="card mb-4">

                <!--Card image-->
                <div class="view overlay">
                <!--Title-->
                <h4 class="card-title text-center">Producto #2</h4>
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
                        <!--Text-->
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, minus?.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of
                        buttons -->
                        <a class="btn btn-light-blue btn-md"
                            data-toggle="modal"
                            data-target="#FormDeContacto">Acceder</a>
                    </div>
                </div>
               
                    </div>
                <!-- Card deck -->     
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