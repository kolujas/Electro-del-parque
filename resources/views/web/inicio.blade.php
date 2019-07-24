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
        style="background: url(/img/recursos/banner.jpg) no-repeat center center; background-size: cover">
        <div class="divImagen"></div>
            <div class="text-white text-center m-0 p-0">
                <div class="row m-0 my-lg-5 p-0 d-flex justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8 m-0 mb-4 p-0">
                        <h2 class="card-title font-weight-bold text-white m-0 p-0">Fabricamos accesorios para cardiología y oximetría de pulso</h2>
                    </div>
                    <div class="col-12 col-md-10 col-lg-8 m-0 mb-4 p-0">
                        <p class="m-0 p-0">Desarrollamos una extensa línea de productos compatibles con las más prestigiosas marcas. Fabricamos cables con materiales importados y nacionales, siempre manteniendo la calidad y estética del producto final.</p>
                    </div>
                    <div class="col-12 m-0 p-0">
                        <a class="btn btn-lg m-0" href="/#productos">Ver más</a>
                    </div>
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
                            <div class="img-div col-12 col-md-6 p-0 m-0 pr-md-3"> 
                                <img src="/img/recursos/equipo.jpg"  class="img-fluid z-depth-1" alt="1">
                            </div> 
                            
                            <div class="col-12 col-md-6 p-0 m-0 pl-md-3">
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
                            <form class="maintenance needs-validation contact-form py-0" novalidate="novalidate" action="/contactar" method="post" data-text="El contacto aún no funciona, Si desea enviar un mensaje personalmente hagalo a: info@electrodelparque.com.ar">
                                @csrf
                                <div class="form-row d-flex justify-content-center">
                                    <div class="col-md-10 my-3">
                                        <label for="nombre">Nombre</label>
                                        <input type="text"
                                            class="form-control"
                                            id="nombre"
                                            placeholder="Nombre"
                                            name="nombre"
                                            value="{{old('nombre')}}"
                                            required="required">
                                        <div class="invalid-tooltip mb-4"
                                            @if($errors->has('nombre'))
                                                style="display: block;"
                                            @endif>
                                            @if($errors->has('nombre'))
                                                {{ $errors->first('nombre') }}
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-10 my-3">
                                        <label for="telefono">Teléfono</label>
                                        <input type="number"
                                            class="form-control"
                                            id="telefono"
                                            placeholder="Teléfono"
                                            name="telefono"
                                            value="{{old('telefono')}}"
                                            required="required">
                                        <div class="invalid-tooltip mb-4"
                                            @if($errors->has('telefono'))
                                                style="display: block;"
                                            @endif>
                                            @if($errors->has('telefono'))
                                                {{ $errors->first('telefono') }}
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-10 my-3">
                                        <label for="email">Email</label>
                                        <input type="email"
                                            class="form-control"
                                            id="email"
                                            placeholder="Email"
                                            name="correo"
                                            value="{{old('correo')}}"
                                            required="required">
                                        <div class="invalid-tooltip mb-4"
                                            @if($errors->has('correo'))
                                                style="display: block;"
                                            @endif>
                                            @if($errors->has('correo'))
                                                {{ $errors->first('correo') }}
                                            @endif
                                        </div>
                                    </div>

                                    <div class="md-form col-12 col-md-10 shadow-textarea">
                                        <p>Mensaje</p>
                                        <textarea id="mensaje"
                                            class="md-textarea form-control form-control z-depth-1"
                                            rows="3"
                                            name="mensaje" placeholder="Mensaje">{{old('mensaje')}}</textarea>
                                        <div class="invalid-tooltip mb-4"
                                            @if($errors->has('mensaje'))
                                                style="display: block;"
                                            @endif>
                                            @if($errors->has('mensaje'))
                                                {{ $errors->first('mensaje') }}
                                            @endif
                                        </div>
                                    </div>

                                    <div class="text-center text-md-left d-flex justify-content-center my-4 col-12">
                                        <button class="btn btn-md enviar submit" type="submit">Enviar</button>
                                    </div>
                                </div>
                            </form>
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