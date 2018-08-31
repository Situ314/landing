@extends('master')

@section('cuerpo')
<script type="text/javascript">
    $(document).ready(function(){
        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            language: "es",
            autoclose: true
        });  
        //landing por recolector
        $('#Recolector').change(function(event) {
            event.preventDefault();
            var id_recolector = $('#Recolector').val();

            $.get("{{ url('land/{id_recolector}')}}", {
               Recolector: id_recolector,
            },
            function(data) {
               $('#Landing').html(data);
            });           
        });
    });
</script>

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
        <h3 class='panel-title'>Búsqueda de inscritos</h3>
    </div>
    <div class='panel-body' style="border: 1px solid #464141;">
        {!! Form::open(['method' => 'POST','route' => 'Reporte.store', 'class' => 'form-responsive', 'target' => '_blank'])!!}              
	 <div class="form-group">
            {!! Form::label('Desde','Desde:', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-8" >
                <div class='input-group date' class="datepicker" >
                    {!! Form::text('Desde',  null, ['class' => 'datepicker form-control', 'id' => 'datepicker']) !!}
                    <span class="input-group-addon" id="datepicker">
                        <span class="fa fa-calendar" id="datepicker">
                            <a id="datepicker" hidden></a>
                        </span>
                    </span>
                </div>                            
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('Hasta','Hasta:', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-8" >
                <div class='input-group date' class="datepicker" id="datepicker">
                    {!! Form::text('Hasta',  null, ['class' => 'datepicker form-control', 'id' => 'datepicker']) !!}
                    <span class="input-group-addon" id="datepicker">
                        <span class="fa fa-calendar" id="datepicker">
                            <a id="datepicker" hidden></a>
                        </span>
                    </span>
                </div>  
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('Recolector','Recolector:', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-8" >
                <select name="Recolector" id="Recolector" class="form-control" >
                    @foreach($recolectores as $recolector)
                    <option value="{{$recolector->id}}">{{$recolector->Nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('Landing','Landing:', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-8" >
                <select name="Landing" id="Landing" class="form-control" >
                    @foreach($landings as $landing)
                    <option value="{{$landing->id}}">{{$landing->Titulo}}</option>
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