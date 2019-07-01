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
        <div class="jumbotron text-center d-lg-none m-0 py-4">
            <h2 class="card-title h2 m-0">Electro del Parque</h2>
            
            <p class="my-4 font-weight-bold">Lorem ipsum dolor sit amet.</p>
            
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Fuga aliquid dolorem ea distinctio exercitationem delectus qui, quas eumarchitecto, amet quasi accusantium, fugit consequatur ducimus obcaecati numquammolestias hic itaque accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
            </div>

            <div class="mt-4">
                <button type="button" class="btn waves-effect">Contacto</button>
            </div>
        </div>
        
        <div class="jumbotron card card-image px-0 d-none d-lg-block m-0">
            <div class="text-white text-center py-5 px-4">
                <div>
                    <h2 class="card-title h1-responsive pt-3 mb-5 font-weight-bold text-white">
                        <strong>Electro del parque</strong>
                    </h2>
                    <p class="mx-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Repellat fugiat.
                    </p>
                    <a class="btn btn-outline-white btn-lg" href="/">Ver más</a>
                </div>
            </div>
        </div>

        <div class="row m-0 p-0 d-flex justify-content-center">
            <div class="productos col-12 col-md-12 col-lg-10 col-xl-8 p-0 mb-lg-4">
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
                                <p class="lead text-center text-md-left d-flex mx-4 m-md-0 py-4 py-md-0 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam magni iure voluptatum soluta ut porro.</p>
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

                    <div class="col-md-10 col-lg-8 mb-md-0">
                        <form id="contact-form" name="contact-form" action="/" method="POST" class="py-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="nombre" name="nombre" class="form-control">
                                        
                                        <label for="nombre" class="nombre">Nombre</label>
                                    </div>
                                </div>
                                    
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="number" id="telefono" name="telefono" class="form-control">
                                        
                                        <label for="telefono" class="telefono">Teléfono</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="email" id="email" name="email" class="form-control email">
                                        
                                        <label for="email" class="">Email</label>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <textarea type="text"
                                            id="mensaje"
                                            name="mensaje"
                                            rows="2"
                                            class="form-control md-textarea"></textarea>

                                        <label for="mensaje">Escribe tu mensaje</label>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center text-md-left d-flex justify-content-center my-4">
                                <button onclick="document.getElementById('contact-form').submit();" class="btn">
                                    Enviar
                                </button>
                            </div>
                        </form>

                        <div class="status"></div>
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
@endsection