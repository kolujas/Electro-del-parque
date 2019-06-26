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
    <div class="container-fluid px-lg-0">
        <!-- Jumbotron -->
        <div class="jumbotron text-center m-0 d-lg-none">

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


        <!-- Full Page Intro -->
<div class="view">
    <video
        class="video-intro"
        poster="https://mdbootstrap.com/img/Photos/Others/background.jpg"
        playsinline="playsinline"
        autoplay="autoplay"
        muted="muted"
        loop="loop">
        <source src="https://mdbootstrap.com/img/video/animation.mp4" type="video/mp4"></video>
        <!-- Mask & flexbox options-->
        <div class="mask rgba-gradient align-items-center">
            <!-- Content -->
            <div class="container px-lg-0">
                <!--Grid row-->
                <div class="row wow fadeIn">
                    <!--Grid column-->
                    <div class="col-md-12 mb-4 dark-text text-center wow fadeIn">
                        <h3 class="display-3 font-weight-bold dark-text mb-0 pt-md-5 pt-5">Electro del parque</h3>
                        <hr class="hr-dark my-4 w-75">
                            <h4 class="subtext-header mt-2 mb-4">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit deleniti consequuntur nihil.</h4>
                            <a href="#!" class="btn btn-rounded dark-text">
                                <i class="fas fa-home"></i>
                                Visit us
                            </a>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->

        @foreach($tipos as $tipo)
            <a href="/producto/{{$tipo->slug}}">{{$tipo->nombre}}</a>
        @endforeach

       <div class="productos mt-5">
    <!-- Card deck -->
    <div class="card-deck">

        <!-- Card -->
        <div class="card mb-4 text-center">

            <!--Card image-->
            <h4 class="card-title">Producto #1</h4>
            <div class="view overlay">
                <img
                    class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
                    alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
            </div>
        </div>
        <div class="card mb-4 text-center">

            <!--Card image-->
            <h4 class="card-title">Producto #2</h4>
            <div class="view overlay">
                <img
                    class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
                    alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
            </div>
        </div>
        <div class="card mb-4 text-center">

            <!--Card image-->
            <h4 class="card-title">Producto #3</h4>
            <div class="view overlay">
                <img
                    class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
                    alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
            </div>
        </div>

                </div>
                <!-- Card deck -->
        </div>

        <div class="quienes-somos my-5">
            <div class="row">
            <div class="col-12 text-center">
                <h2 class="h2-responsive mb-4">¿Quienes somos?</h2>
            </div>
            <div class="img-div col-md-6"> 
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(54).jpg" class="img-fluid z-depth-1" alt="1">
            </div> 
            <p class="lead text-center mt-4 col-md-6 d-flex justify-content-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam magni iure voluptatum soluta ut porro.</p>
            </div>
        </div>

        <div class="contacto col-12 col-md-12 col-lg-10 m-lg-auto mt-5">
            <!--Section: Contact v.2-->
            <section class="mb-4">

                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center">Contacto</h2>

                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-10 col-lg-8 mb-md-0  mb-5 m-auto">
                        <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="nombre" name="nombre" class="form-control">
                                            <label for="nombre" class="nombre">Nombre</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="number" id="telefono" name="telefono" class="form-control">
                                                <label for="telefono" class="telefono">Teléfono</label>
                                            </div>
                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <input type="email" id="email" name="email" class="form-control email">
                                                    <label for="email" class="">Email</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Grid row-->

                                        <!--Grid row-->
                                        <div class="row">

                                            <!--Grid column-->
                                            <div class="col-md-12">

                                                <div class="md-form">
                                                    <textarea
                                                        type="text"
                                                        id="mensaje"
                                                        name="mensaje"
                                                        rows="2"
                                                        class="form-control md-textarea"></textarea>
                                                    <label for="mensaje">Escribe tu mensaje</label>
                                                </div>

                                            </div>
                                        </div>
                                        <!--Grid row-->

                                    </form>

                                    <div class="text-center text-md-left ml-md-5">
                                        <a
                                            class="btn btn-primary"
                                            onclick="document.getElementById('contact-form').submit();">Enviar</a>
                                    </div>
                                    <div class="status"></div>
                                </div>                        
                            </div>
                        </section>
                        <!--Section: Contact v.2-->
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