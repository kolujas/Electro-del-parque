<?php
    /** @var Tipo[] $tipos */
?>

<nav class="navbar navbar-expand-lg ">
    <!-- Navbar brand -->
    <a class="navbar-brand white-text" href="/"><img class="logo" src="/img/recursos/logo.png" alt="Logo de Electromédica del Parque"></a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fas fa-bars patyMenu"></i></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active white-text">
                <a class="nav-link white-text" href="/">Inicio
                <span class="sr-only">(current)</span>
                </a>
            </li>
                    <!-- Dropdown -->
            <li class="nav-item dropdown white-text">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Productos</a>
                
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    @foreach($tipos as $tipo)
                        @if($tipo->id_tipo != 3 && $tipo->id_tipo != 5)
                            <a class="dropdown-item" href="/{{$tipo->slug}}/productos">{{$tipo->nombre}}</a>
                        @else
                            <a class="dropdown-item" href="/{{$tipo->slug}}">{{$tipo->nombre}}</a>
                        @endif
                    @Endforeach
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link white-text" href="/#quienes-somos">¿Quienes somos?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link white-text" href="/#contacto">Contacto</a>
            </li>
        </ul>
    </div>
</nav>