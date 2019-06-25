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
    @component('components.nav')
    @endcomponent
@endsection

@section('main')
    <div class="container-fluid">
        <!-- Jumbotron -->
        <div class="jumbotron text-center m-0">

            <!-- Title -->
            <h2 class="card-title h2">Electro del parque Lorem ipsum.</h2>
            <!-- Subtitle -->
            <p class="blue-text my-4 font-weight-bold">Lorem ipsum dolor sit amet.</p>

            <!-- Grid row -->
            <div class="row d-flex justify-content-center">

                <!-- Grid column -->
                <div class="col-xl-7 pb-2">

                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Fuga aliquid dolorem ea distinctio exercitationem delectus qui, quas eum
                        architecto, amet quasi accusantium, fugit consequatur ducimus obcaecati numquam
                        molestias hic itaque accusantium doloremque laudantium, totam rem aperiam.</p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <hr class="my-4">

                <div class="pt-2">
                    <button type="button" class="btn btn-blue waves-effect">Contacto</button>
                </div>

            </div>
<!-- Jumbotron -->
        @foreach($tipos as $tipo)
            <a href="/producto/{{$tipo->slug}}">{{$tipo->nombre}}</a>
        @endforeach

        <div class="productos mt-5">
            <div class="row">
            <!-- Grid column -->
            <div class="col-lg-4 col-md-12">
            <!--Card-->
            <div class="card">
            <!--Title-->
            <h4 class="card-title text-center">Card title</h4>
                <!--Card image-->
                <div class="view">
                    <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" class="card-img-top"
                        alt="photo">
                    <a href="#">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

            <!--Card content-->
                <div class="card-body mb-4">
                    <!-- <a href="#" class="btn btn-primary">Button</a> -->
                </div>
            </div>

            <div class="card">
            <!--Title-->
            <h4 class="card-title text-center">Card title</h4>
                <!--Card image-->
                <div class="view">
                    <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" class="card-img-top"
                        alt="photo">
                    <a href="#">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

            <!--Card content-->
                <div class="card-body mb-4">
                    <!-- <a href="#" class="btn btn-primary">Button</a> -->
                </div>
            </div>

            <div class="card">
            <!--Title-->
            <h4 class="card-title text-center">Card title</h4>
                <!--Card image-->
                <div class="view">
                    <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" class="card-img-top"
                        alt="photo">
                    <a href="#">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

            <!--Card content-->
                <div class="card-body mb-4">
                    <!-- <a href="#" class="btn btn-primary">Button</a> -->
                </div>
            </div>
            <div class="card">
            <!--Title-->
            <h4 class="card-title text-center">Card title</h4>
                <!--Card image-->
                <div class="view">
                    <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" class="card-img-top"
                        alt="photo">
                    <a href="#">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
        </div>

        <div class="quienes-somos my-5">
            <div class="row">
            <div class="col-12 text-center">
                <h2 class="h2-responsive mb-4">¿Quienes somos?</h2>
            </div>  
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(54).jpg" class="img-fluid z-depth-1" alt="1">
            <p class="lead text-center mt-4 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam magni iure voluptatum soluta ut porro.</p>
            </div>
        </div>

        <div class="contacto col-12">
    <div class="row d-flex justify-content-center">
        <!-- Default form contact -->
        <form class="text-center border border-light">

            <p class="h4 mb-4">Contacto</p>

            <div class="md-form form-group mt-5">
                <input
                    type="text"
                    class="form-control-lg"
                    id="formGroupExampleInputMD">
                    <label for="formGroupExampleInputMD">Nombre</label>
                </div>
                <!-- Material input -->
                <div class="md-form form-group mt-5">
                    <input
                        type="number"
                        class="form-control-lg"
                        id="formGroupExampleInput2MD">
                        <label for="formGroupExampleInput2MD">Teléfono</label>
                    </div>

                <div class="md-form form-group mt-5">
                    <input type="email" class="form-control-lg" id="formGroupExampleInputMD">
                        <label for="formGroupExampleInputMD">Email</label>
                </div>

                <div class="md-form">
                    <textarea
                        id="textarea-char-counter"
                        class="form-control-lg md-textarea"
                        length="120"
                        rows="3"></textarea>
                    <label for="textarea-char-counter">Escribe tu mensaje</label>
                </div>
                    <!-- Send button -->
                    <button class="btn btn-info btn-block" type="submit">Enviar</button>

                </form>
                <!-- Default form contact -->
            </div>
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