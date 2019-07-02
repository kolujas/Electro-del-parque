<?php
    /** @var Tipo[] $tipos */
?>

@extends('layout.index')

@section('css')
    <link href="{{ asset('css/web/inicio.css') }}" rel="stylesheet">
@endsection

@section('titulo')
    Electro del parque
@endsection

@section('nav')
    @component('components.nav', ['tipos' => $tipos])
    @endcomponent
@endsection

@section('main')
    <div class="container-fluid px-0">
        <div class="jumbotron card card-image d-lg-block m-0 p-5 px-0"
        style="background: url(/bmd/img/bg.png);">
            <div class="text-white text-center py-5 p-0">
                <div class="py-md-5">
                    <h2 class="card-title h1-responsive p-0 mb-4 mt-lg-4 font-weight-bold text-white">
                        <strong>Electro del parque</strong>
                    </h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Repellat fugiat.
                    </p>
                    <a class="btn btn-lg mt-lg-4" href="/#productos">Ver más</a>
                </div>
            </div>
        </div>

    
        <div class="row m-0 p-0 d-flex justify-content-center">
            <div id="productos" class="productos col-12 col-md-12 col-lg-10 col-xl-8 p-0 mb-lg-4">
                <h2 class="h1-responsive mt-4 mb-0 text-center">Productos</h2>
                <div class="row d-flex justify-content-between mx-4 m-lg-0">
                    @foreach($tipos as $tipo)
                        @if($tipo->id_tipo != 3 && $tipo->id_tipo != 5)
                            <a href="/{{$tipo->slug}}/productos" class="card text-center col-12 col-md-5 col-lg-4 m-0 mt-4 px-0">
                        @else
                            <a href="/{{$tipo->slug}}" class="card text-center col-12 col-md-5 col-lg-4 m-0 mt-4 px-0">
                        @endif
                            <div class="pt-4 mt-md-0 mx-lg-2">
                                <h4 class="h5 card-title font-weight-bold mb-4">{{$tipo->nombre}}</h4>

                                <img class="card-img-top"
                                    src="/img/{{$tipo->imagen}}"
                                    alt="{{$tipo->nombre}}">
                                
                                <span class="top-line"></span>
                                <span class="right-line"></span>
                                <span class="bottom-line"></span>
                                <span class="left-line"></span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

            <div id="quienes-somos" class="quienes-somos col-12 col-md-12 col-lg-10 col-xl-8 mt-4">
                <div class="row">
                    <div class="col-12">
                        <h2 class="h1-responsive my-4 text-center">¿Quienes somos?</h2>
                    </div>

                    <div class="col-12">
                        <div class="row d-flex justify-content-around mx-md-4 pb-md-4">
                            <div class="img-div col-12 col-md-6 p-0 m-0 pr-md-5"> 
                                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(54).jpg"  class="img-fluid z-depth-1" alt="1">
                            </div> 
                            
                            <div class="col-12 col-md-6 p-0 m-0 pl-md-5">
                                <p class="lead text-center text-md-left d-flex mx-4 m-md-0 py-4 py-md-0 mb-0">Una empresa con más de 20 años en el mercado de la electromedicina, brindando sus productos y servicios con responsabilidad, profesionalidad, calidez humana en su atención y un esmerado trabajo diario: brindar la mejor calidad en todo lo que hacemos siendo nuestra meta el superarnos continuamente para estar al alcance de su exigencia y poderle brindar excelentes precios y garantía técnica.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="contacto" class="contacto col-12 col-md-12 col-lg-10 col-xl-8 mt-4">
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <h2 class="h1-responsive my-4 text-center">Contacto</h2>
                    </div>

            <div class="row">
                <div class="col-md-8 col-lg-8 mb-md-4 m-auto">
                    <form class="needs-validation contact-form" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col-md-10 mb-3">
                                <label for="nombre">First name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="nombre"
                                    placeholder="First name"
                                    value="Mark"
                                    required="required">
                                    <div class="invalid-tooltip"></div>
                                </div>

                                <div class="col-md-10 mb-3">
                                    <label for="telefono">Teléfono</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="telefono"
                                        placeholder="First name"
                                        value="Mark"
                                        required="required">
                                        <div class="invalid-tooltip"></div>
                                    </div>
                                    <div class="col-md-10 mb-3">
                                        <label for="email">Email</label>
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="email"
                                            placeholder="First name"
                                            value="Mark"
                                            required="required">
                                            <div class="invalid-tooltip"></div>
                                        </div>
                                        <button class="btn btn-primary btn-sm enviar" type="submit">Submit form</button>
                                    </form>

                                    <div class="status"></div>
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
    <script type="text/javascript" src="/js/web/inicio.js"></script>
    <script type="text/javascript" src="/js/web/contacto.js"></script>
@endsection