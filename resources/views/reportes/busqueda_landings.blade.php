@extends('master')

@section('cuerpo')
<section id='tools'>
    <ul class='breadcrumb' id='breadcrumb'>
        <li class='title'>Reportes</li>
        <li>Buscar</li>
    </ul>
</section>
<!-- Content -->
<div id='content'>
<div class='row col-md-offset-4 col-md-4'>
<div class='panel'>
    <div class='panel-heading' style="background-color: #464141; color: #fff;">
        <h3 class='panel-title'>Búsqueda de landings</h3>
    </div>
    <div class='panel-body' style="border: 1px solid #464141;">
        {!! Form::open(['method' => 'POST','route' => 'reporte_leads', 'class' => 'form-responsive', 'target' => '_blank'])!!}              
        <div class="form-group">
            {!! Form::label('Recolector','Recolector:', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-8" >
                <select name="Recolector" id="Recolector" class="form-control" >
                    <option value="0">Todas</option>
                    @foreach($recolectores as $recolector)
                    <option value="{{$recolector->id}}">{{$recolector->Nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="clearfix">&nbsp;</div>
	<div class="text-center">
            <center>{!! Form::submit('Buscar', ['class' => 'btn btn-success']) !!}</center>
	</div>		
	{!! Form::close()!!}        
    </div><br><br>
</div>
</div>
</div>
@endsection