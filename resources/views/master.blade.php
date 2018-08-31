<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Landing Page</title>
    {!! Html::style('css/estilo.css') !!}
    {!! Html::style('css/datepicker.css') !!}
    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.css') !!}    
    
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    
  </head>
  <body class='main page'>
    <!-- Navbar -->
    <div class='navbar navbar-default' id='navbar'>
        <a class='navbar-brand' href='{{url('welcome')}}'>
            <img class="img-responsive" src="{{asset('img/leads.png')}}" style='width: 120px;margin-top: -10px;'>
        </a>
        <ul class='nav navbar-nav pull-right'>
            <li class='dropdown user'>
              <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                    <i class='icon-user'></i>
                    <strong>{{ Auth::user()->username }}</strong>
                    <b class='caret'></b>
              </a>
              <ul class='dropdown-menu'>
                    <li>
                      <a href='{{url('/CambioContrasenia')}}'>Cambiar contraseña</a>
                    </li>
                    <li class='divider'></li>
                    <li>
                      <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Salir
                            </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                      </form>
                    </li>
              </ul>
            </li>
        </ul>
    </div>
    <div id='wrapper'>
      <!-- Sidebar -->
        <section id='sidebar'>
            <i class='fa fa-align-justify fa-lg' id='toggle'></i>
            <ul id='dock'>
                <li class='launcher'>
                    <i class='fa fa-user'></i>
                    <a href="{{url('/Recolector')}}">Recolectores</a>
                </li>
                <li class='launcher'>
                    <i class='fa fa-sitemap'></i>
                    <a href="{{url('/Combo')}}">Combos</a>
                </li>
                <li class='launcher'>
                    <i class='fa fa-laptop'></i>
                    <a href="{{url('/Landing')}}">Landing Page</a>
                </li>   
                <li class='launcher'>
                    <i class='fa fa-file-pdf-o'></i>
                    <a href="{{url('/Reporte')}}">Reporte Visitantes</a>
                </li>  
                <div class="clearfix">&nbsp;</div>
                <li class='launcher'>
                    <i class='fa fa-file-pdf-o'></i>
                    <a href="{{url('/contadores')}}">Reportes Landings</a>
                </li>   
            </ul>
        </section>
        @yield('cuerpo')
    </div>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  @include('sweet::alert') 
</html>
