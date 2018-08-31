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
        <section id='tools'>
            <ul class='breadcrumb' id='breadcrumb'>
                <li class='title'>Combos</li>
                <li>Lista</li>
            </ul>
        </section>
        <!-- Content -->
        <div id='content'> 
            <div class="form-group add row">
                <div class="col-md-2 ">
                    <acronym title=" Adicionar nuevo ">
                        <a href="{{url('/Combo/create')}}" class="btn btn-success" /><i class='fa fa-plus'></i></a>
                    </acronym>
                </div>
            </div>
            <div class="table-responsive">
                <table border="1" class="table tablesorter table-fixed table-bordered table-hover table-responsive" id="mi-tabla" >
                    <thead>
                        <tr>       
                            <th> Nª </th>
                            <th> Nombre </th>
                            <th> Acción </th> 
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $cont = 0; ?>
                        @forelse($combos as $combo)
                        <?php $cont++; ?>
                        <tr>  
                            <td><?php echo $cont; ?></td>
                            <td>{{$combo->Nombre}}</td>                           
                            <td style="text-align: center;">
                                <div  class="row" style="display: inline-block; text-align: center;">
                                    <div style="display: inline-block; text-align: center;">
                                        <acronym title=" Modificar registro ">
                                            <a href="{{route('Combo.edit', $combo->id)}}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        </acronym>
                                    </div>
                                    <div style="display: inline-block; text-align: center;">
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['Combo.destroy',$combo->id]]) !!}
                                        {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array('type' => 'submit', 'class' => 'btn btn-danger', 'title' => 'Eliminar registro', 'onclick' => 'return confirm("Está seguro que quiere borrar este registro?");')) !!}
                                        {!! Form::close() !!}                      
                                    </div>                     
                                </div>
                            </td> 
                        </tr>
                        @empty
                        <p>No existen combos registrados!</p>
                        @endforelse
                    </tbody>
                </table>
            </div> 
            <div class="row">
                {!! $combos->links()!!}
            </div>
        </div>
    </div>
  </body>
</html>

