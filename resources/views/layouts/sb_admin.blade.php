<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Despacho a Domicilio - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
  <div id="wrapper">
    <ul class="navbar-nav mi-color sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('index_index')}}" title="Inicio">
         <img src="{{asset('public/img/logo.png')}}" style="width: 60px; height: 50px" />
         <div class="sidebar-brand-text mx-3">DAD <sup>2</sup></div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="{{route('index_index')}}" title="Inicio">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Inicio</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Administración
      </div>
      <li class="nav-item {{Helpers::rutaActiva('usuarios', '5')}}">
        <a class="nav-link  {{Helpers::rutaActiva('usuarios', '1')}}" href="#" data-toggle="collapse" data-target="#menu_1" aria-expanded=" {{Helpers::rutaActiva('usuarios', '2')}}" aria-controls="menu_1" title="Configuración">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Configuración</span>
        </a>
        <div id="menu_1" class="collapse {{Helpers::rutaActiva('usuarios', '3')}}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="javascript:void(0);" title="Módulos"><i class="fas fa-folder"></i> Módulos</a>
            <a class="collapse-item" href="javascript:void(0);" title="Perfiles"><i class="fas fa-chalkboard-teacher"></i> Perfiles</a>
            <a class="collapse-item {{Helpers::rutaActiva('usuarios', 4)}}" href="{{route('users_index')}}" title="Usuarios"><i class="fas fa-user"></i> Usuarios</a>
            <a class="collapse-item" href="javascript:void(0);" title="Roles"><i class="fas fa-users"></i> Roles</a>
          </div>
        </div>
      </li>
      <li class="nav-item {{Helpers::rutaActiva('transportistas', '5')}}">
        <a class="nav-link {{Helpers::rutaActiva('transportistas', '1')}}" href="#" data-toggle="collapse" data-target="#menu_2" aria-expanded="{{Helpers::rutaActiva('transportistas', '2')}}" aria-controls="menu_2" title="Administración">
          <i class="fas fa-tools"></i>
          <span>Administración</span>
        </a>
        <div id="menu_2" class="collapse {{Helpers::rutaActiva('transportistas', '3')}}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="javascript:void(0);" title="Clientes"><i class="fas fa-users-cog"></i> Clientes</a>
            <a class="collapse-item {{Helpers::rutaActiva('transportistas', '4')}}" href="{{route('transportistas_index')}}" title="Transportistas"><i class="fas fa-truck"></i> Transportistas</a>
            <a class="collapse-item" href="javascript:void(0);" title="Impresoras"><i class="fas fa-print"></i> Impresoras</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider d-none d-md-block">
      <div class="sidebar-heading">
        Monitores
      </div>
      <li class="nav-item {{Helpers::rutaActiva('monitor-od', '5')}}{{Helpers::rutaActiva('monitor-od-guias-de-despacho', '5')}}{{Helpers::rutaActiva('monitor-od-guias-de-despacho-filtro', '5')}}{{Helpers::rutaActiva('monitor-od-search', '5')}}{{Helpers::rutaActiva('monitor-od-guias-de-despacho-search', '5')}}{{Helpers::rutaActiva('monitor-od-filtro', '5')}}">
        <a class="nav-link {{Helpers::rutaActiva('monitor-od', '1')}}{{Helpers::rutaActiva('monitor-od-guias-de-despacho', '1')}}{{Helpers::rutaActiva('monitor-od-guias-de-despacho-filtro', '1')}}{{Helpers::rutaActiva('monitor-od-search', '1')}}{{Helpers::rutaActiva('monitor-od-guias-de-despacho-search', '1')}}{{Helpers::rutaActiva('monitor-od-filtro', '1')}}" href="javascript:void(0);" data-toggle="collapse" data-target="#menu_4" aria-expanded="{{Helpers::rutaActiva('monitor-od', '2')}}{{Helpers::rutaActiva('monitor-od-guias-de-despacho', '2')}}{{Helpers::rutaActiva('monitor-od-guias-de-despacho-filtro', '2')}}{{Helpers::rutaActiva('monitor-od-search', '2')}}{{Helpers::rutaActiva('monitor-od-guias-de-despacho-search', '2')}}{{Helpers::rutaActiva('monitor-od-filtro', '2')}}" aria-controls="menu_4" title="Administración">
          <i class="fas fa-tools"></i>
          <span>Monitor OD</span>
        </a>
        <div id="menu_4" class="collapse {{Helpers::rutaActiva('monitor-od', '3')}}{{Helpers::rutaActiva('monitor-od-guias-de-despacho', '3')}}{{Helpers::rutaActiva('monitor-od-guias-de-despacho-filtro', '3')}}{{Helpers::rutaActiva('monitor-od-search', '3')}}{{Helpers::rutaActiva('monitor-od-guias-de-despacho-search', '3')}}{{Helpers::rutaActiva('monitor-od-filtro', '3')}}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item {{Helpers::rutaActiva('monitor-od', 4)}}{{Helpers::rutaActiva('monitor-od-search', '4')}}{{Helpers::rutaActiva('monitor-od-filtro', '4')}}" href="{{route('monitor_od_index')}}" title="Órdenes de Despacho Sin Tratar"><i class="fas fa-file-signature"></i> Sin Tratar</a>
            <a class="collapse-item  {{Helpers::rutaActiva('monitor-od-guias-de-despacho', '4')}}{{Helpers::rutaActiva('monitor-od-guias-de-despacho-filtro', '4')}}{{Helpers::rutaActiva('monitor-od-guias-de-despacho-search', '4')}}" href="{{route('monitor_od_guias_de_despacho')}}" title="Guías de Despacho"><i class="fas fa-folder-open"></i> Guías de Despacho</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Reportes y comunicación
      </div>
       <li class="nav-item {{Helpers::rutaActiva('logs', '5')}}">
        <a class="nav-link {{Helpers::rutaActiva('logs', 1)}}" href="#" data-toggle="collapse" data-target="#menu_4" aria-expanded="{{Helpers::rutaActiva('logs', 2)}}" aria-controls="menu_4" title="Reportes">
          <i class="fas fa-th-list"></i>
          <span>Reportes</span>
        </a>
        <div id="menu_4" class="collapse {{Helpers::rutaActiva('logs', 3)}}" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item {{Helpers::rutaActiva('logs', 4)}}" href="{{route('logs_index')}}" title="Logs"><i class="fas fa-cash-register"></i> Logs</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider d-none d-md-block">
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
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
              @if(Auth::check())
                 <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }} ( {{Auth::user()->perfil->perfiles}} ) <i class="fas fa-caret-down"></i></span>
                
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{route('acceso_mi_perfil')}}" title="Mi perfil">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Mi perfil
                </a>
                <!--<a class="dropdown-item" href="javascript:void(0);" title="Mis notificaciones">
                  <i class="fas fa-bell fa-sm fa-fw mr-2 text-gray-400"></i>
                  Mis notificaciones
                </a>
                <a class="dropdown-item" href="javascript:void(0);" title="Mis tickets">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Mis tickets
                </a>-->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal" title="Cerrar Sesión">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar Sesión
                </a>
              </div>
              @else
                <a class="nav-link" href="javascript:void(0);" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Anónimo</span> 
              </a>
              @endif
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
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!--modal logout-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Realmente desea salir del sistema?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-footer">
          <a class="btn btn-primary" href="{{route('acceso_salir')}}" title="Cerrar Sesión">Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </div>
  <!--/modal logout-->
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