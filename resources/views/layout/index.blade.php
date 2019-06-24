<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
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
  <div id="slide-out" class="side-nav fixed">
  <ul class="custom-scrollbar">
    <!-- Logo -->
    <li>
      <div class="logo-wrapper waves-light">
        <a href="#"><img src="https://mdbootstrap.com/img/logo/mdb-transparent.png"
            class="img-fluid flex-center"></a>
      </div>
    </li>
    <!--/. Logo -->
    <!--Social-->
    <li>
      <ul class="social">
        <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
        <li><a href="#" class="icons-sm pin-ic"><i class="fab fa-pinterest"> </i></a></li>
        <li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus-g"> </i></a></li>
        <li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a></li>
      </ul>
    </li>
    <!--/Social-->
    <!--Search Form-->
    <li>
      <form class="search-form" role="search">
        <div class="form-group md-form mt-0 pt-1 waves-light">
          <input type="text" class="form-control" placeholder="Search">
        </div>
      </form>
    </li>
    <!--/.Search Form-->
    <!-- Side navigation links -->
    <li>
      <ul class="collapsible collapsible-accordion">
        <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-chevron-right"></i> Submit
            blog<i class="fas fa-angle-down rotate-icon"></i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#" class="waves-effect">Submit listing</a>
              </li>
              <li><a href="#" class="waves-effect">Registration form</a>
              </li>
            </ul>
          </div>
        </li>
        <li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-hand-pointer"></i>
            Instruction<i class="fas fa-angle-down rotate-icon"></i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#" class="waves-effect">For bloggers</a>
              </li>
              <li><a href="#" class="waves-effect">For authors</a>
              </li>
            </ul>
          </div>
        </li>
        <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-eye"></i> About<i
              class="fas fa-angle-down rotate-icon"></i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#" class="waves-effect">Introduction</a>
              </li>
              <li><a href="#" class="waves-effect">Monthly meetings</a>
              </li>
            </ul>
          </div>
        </li>
        <li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-envelope"></i> Contact me<i
              class="fas fa-angle-down rotate-icon"></i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#" class="waves-effect">FAQ</a>
              </li>
              <li><a href="#" class="waves-effect">Write a message</a>
              </li>
              <li><a href="#" class="waves-effect">FAQ</a>
              </li>
              <li><a href="#" class="waves-effect">Write a message</a>
              </li>
              <li><a href="#" class="waves-effect">FAQ</a>
              </li>
              <li><a href="#" class="waves-effect">Write a message</a>
              </li>
              <li><a href="#" class="waves-effect">FAQ</a>
              </li>
              <li><a href="#" class="waves-effect">Write a message</a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
    <!--/. Side navigation links -->
  </ul>
  <div class="sidenav-bg rgba-blue-strong"></div>
</div>
    <header id="header">
        <section>
            @yield('nav')
        </section>
    </header>
      <main>
          @yield('main')
      </main>

      <footer class="row justify-content-center">
          <section class="col-12 col-lg-10 col-xl-8">
              @yield('footer')
          </section>
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