<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="author" content="Web Master César Cancino Zapata | yo@cesarcancino.com" />
    <link rel="shortcut icon" href="{{asset('public/img/favicon.ico')}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="{{asset('public/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="{{asset('public/css/sb-admin-2.min.css')}}" rel="stylesheet" />
  @stack('css')
  </head>
  <body id="page-top">
    <!-- Page Wrapper -->
  <div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        
<ul class="navbar-nav ml-auto">
            
            <li class="nav-item ">
              <a class="nav-link "  >
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Helpers::fecha(date('Y-m-d'))}} </span>
              </a>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item ">
              <a class="nav-link "  >
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <span id="spanreloj"></span></span>
              </a>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
               <a class="nav-link" href="javascript:void(0);" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Anónimo</span>
              </a>
            </li>
</ul>

        </nav>
        <!--contenido-->
            @yield('content')
          <!--/contenido-->
      </div>
    
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Todos los derechos reservados - Desarrollado por Célula Supply Chain {{date('Y')}}</span>
          </div>
        </div>
      </footer>

    </div>

  </div>
<!--Dependencias-->
    <script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('public/js/sb-admin-2.min.js')}}"></script>
     <!--scripts propios-->
    @stack('scripts')
    <script type="text/javascript">var base_url='{{Helpers::base_path()}}';</script>
    <script src="{{asset('public/js/funciones.js')}}"></script>
  <!--/scripts propios-->

<!--/Dependencias-->
</body>
</html>