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
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('.datepicker').datepicker({
                format: "dd/mm/yyyy",
                language: "es",
                locale: "es",
                autoclose: true
            });

        });

        function editar(cont) {
            //document.getElementById('registro'+cont).style.display = 'none';
            //document.getElementById('editar'+cont).style.display = '';
            $("#registro"+cont).toggle();
            $("#editar"+cont).toggle();
        }
    </script> 
  </head>
  <style>
    /*  nueva categoria producto*/
    input[type="checkbox"] + label {
        background: #54BD58;
        border-radius: 5px;
        color: #fff;
        padding: 5px 15px; 
    }    
    #activar ~ .desplegable {
        display: none;
        overflow: hidden;
    } 
    #activar:checked ~ .desplegable {
        display: block;
    }
    /*editar registro*/
    .editar, .boton {
        display: none;
        overflow: hidden;
    }
  </style>
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
                <li class='active launcher'>
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
                <li class='title'>Landing</li>
                <li>Lista</li>
            </ul>
        </section>
        <!-- Content -->
        <div id='content'>
            <input type="checkbox" id="activar" name="activar" hidden>
            <label for="activar">+</label>
            <div class="desplegable">
                <div class="panel panel-default col-md-5 col-md-offset-3">
                    <div class="panel-body ">
                        {!! Form::open(['method' => 'POST','route' => 'Landing.store'])!!}              
                            <div class="form-group">
                                {!! Form::label('Recolector','Recolector*:', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-10">
                                    <select id="Recolector" name="Recolector" class="form-control">
                                        @foreach($recolectores as $recolector)
                                        <option value="{{$recolector->id}}">{{$recolector->Nombre}}</option>
                                        @endforeach
                                    </select>  
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Titulo','Titulo*:', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('Titulo',  null, ['class' => ' form-control']) !!}
                                </div>
                            </div>
                            <!--<div class="form-group">-->
                                <div class="col-md-6">
                                    {!! Form::label('Inicio','Inicio*: ', ['class' => 'col-md-3 control-label', 'style' => 'padding-left: 0;']) !!} 
                                    <div class="text col-md-9">
                                        {!! Form::text('Inicio', null, ['class' => 'form-control datepicker', 'style' => 'margin-left: 15px;']) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    {!! Form::label('Fin','Fin*:', ['class' => 'col-md-3 control-label', 'style' => 'padding-left: 0;']) !!}  
                                    <div class="text col-md-9">
                                        {!! Form::text('Fin', null, ['class' => 'form-control datepicker', 'style' => 'margin-left: 15px;']) !!}
                                    </div>
                                </div>
                            <!--</div>-->
<!--                            <div class="form-group">
                                {!! Form::label('URL','URL*:', ['class' => 'control-label col-md-2']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('URL',  null, ['class' => ' form-control']) !!}
                                </div>
                            </div>-->
                            <div class="clearfix"> </div>
                            <div class="form-group">
                                <div class="row col-md-offset-4">
                                    {!! Form::submit('Guardar Nuevo', ['class' => 'btn btn-success']) !!}
                                </div>
                            </div>
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>  
            <div class="table-responsive">
                <table border="1" class="table tablesorter table-fixed table-bordered table-hover table-responsive" id="mi-tabla" >
                    <thead>
                        <tr>       
                            <th> Nª </th>
                            <th> Recolector </th>
                            <th> Título </th> 
                            <th> URL </th>
                            <th> Inicio </th> 
                            <th> Fin </th>
                            <th> Acción </th> 
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $cont = 0; ?>
                        @forelse($landings as $landing)
                        <?php $cont++; ?>
                        <tr class="registro" id="<?php echo 'registro'.$cont; ?>">      
                            <td><?php echo $cont; ?></td>
                            @foreach($recolectores as $recolector)
                                @if($landing->CodRecolector == $recolector->id)
                                    <td>{{$recolector->Nombre}}</td>
                                @endif
                            @endforeach
                            <td>{{$landing->Titulo}}</td>
                            <td>{{$landing->URL}}</td>
                            <td>{{FechaDeMySQL($landing->Inicio)}}</td>
                            <td>{{FechaDeMySQL($landing->Fin)}}</td>                            
                            <td style="text-align: center;">
                                <div  class="row" style="display: inline-block; text-align: center;">
                                    <div style="display: inline-block; text-align: center;">
                                        <a href="{{url('detalle', $landing->id)}}" class="btn btn-info" title="Detalles de registro"><i class="fa fa-book" aria-hidden="true" ></i></a>                          
                                    </div>
                                    <div style="display: inline-block; text-align: center;">
                                        <button onclick="editar(<?php echo $cont; ?>)" class="btn btn-primary" title="Editar registro"><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></button>                            
                                    </div>
                                    <div style="display: inline-block; text-align: center;">
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['Landing.destroy',$landing->id]]) !!}
                                        {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array('type' => 'submit', 'class' => 'btn btn-danger', 'title' => 'Eliminar registro', 'onclick' => 'return confirm("Está seguro que quiere borrar este registro?");')) !!}
                                        {!! Form::close() !!}                      
                                    </div>                     
                                </div>
                            </td> 
                        </tr>
                        <tr class="editar" id="<?php echo 'editar'.$cont; ?>">
                            {!! Form::model($landing,['route' => ['Landing.update', $landing->id], 'method'=>'put']) !!}
                            <td><?php echo $cont; ?></td>
                            <td>
                                <select name="nuevo1" class="form-control">
                                    @foreach($recolectores as $recolector)
                                        @if($landing->CodRecolector == $recolector->id)
                                            <option value="{{$recolector->id}}">{{$recolector->Nombre}}</option>
                                        @endif
                                    @endforeach
                                </select> 
                            </td>
                            <td>
                                <input type="text" name="nuevo2" value="{{$landing->Titulo}}">
                            </td>
                            <td>
                                <input type="text" name="nuevo3" value="{{$landing->URL}}" disabled>
                            </td>
                            <td>
                                <input type="text" name="nuevo4" class="datepicker" value="{{FechaDeMySQL($landing->Inicio)}}">
                            </td>
                            <td>
                                <input type="text" name="nuevo5" class="datepicker" value="{{FechaDeMySQL($landing->Fin)}}">
                            </td>
                            <td>
                                {!! Form::submit('Guardar edición', ['class' => 'btn btn-success']) !!}
                            </td> 
                            {!! Form::close()!!}
                        </tr>
                        @empty
                        <p>No existen landings page registradas!</p>
                        @endforelse
                    </tbody>
                </table>
            </div>   
            <div class="row">
                {!! $landings->links()!!}
            </div>
        </div>
    </div>
  </body>
</html>

