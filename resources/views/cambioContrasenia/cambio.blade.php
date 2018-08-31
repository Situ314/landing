@extends('master')       

@section('cuerpo')

<section id='tools'>
    <ul class='breadcrumb' id='breadcrumb'>
      <li class='title'>Cambio de contraseña</li>
    </ul>
</section>
<div id='content'>
@if ( session()->has('message') ) <div class="alert alert-danger alert-dismissable">{{ session()->get('message') }}</div> @endif
    <div class='row col-md-offset-4 col-md-4'>
        <div class='panel'>
            <div class='panel-heading'>
                    <h3 class='panel-title'>Cambio de contrase&ntilde;a</h3>
            </div>             
            <div class='panel-body'>
                {!! Form::open(['method' => 'POST','route' => 'CambioContrasenia.store'])!!}
                    <input type="password" class="form-control" name='NuevaClave1' placeholder="Nueva contrase&ntilde;a" required>
                    <input type="password" class="form-control" name='NuevaClave2' placeholder="Confirmar nueva contrase&ntilde;a" required><br/>
                    <center>     
                        {!! Form::submit('Cambiar', ['class' => 'btn btn-danger']) !!}        
                    </center>
                {!! Form::close()!!}
            </div>
        </div>
    </div>
</div>
@endsection

