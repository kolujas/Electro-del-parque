<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        
        <!-- Ignorará cache? -->
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">

        <!-- Bootstrap core CSS -->
        <link href="bmd/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="bmd/css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/index.css" rel="stylesheet">
        @yield('css')

        <title>@yield('titulo')</title>
    </head>
    <body>
        <header id="header">
            @yield('nav')
        </header>

        <main class="m-0 p-0">
            @yield('main')
        </main>

        <footer class="justify-content-center">
            @yield('footer')
        </footer>
        
        <!-- SCRIPTS -->    
        <!-- JQuery -->
        <script type="text/javascript" src="bmd/js/jquery-3.4.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="bmd/js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="bmd/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="bmd/js/mdb.min.js"></script>
        
        @yield('js')
    </body>
</html>