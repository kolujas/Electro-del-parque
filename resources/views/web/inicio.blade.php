@extends('layout.index')

@section('css')
    <link href="{{ asset('css/web/inicio.css') }}" rel="stylesheet">
@endsection

@section('titulo')
    El Club
@endsection

@section('nav')
    @component('components.nav')
    @endcomponent
@endsection

@section('main')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h2 class="display-4 text-center">Electro del parque</h2>
    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, totam?</p>
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