@extends('master')

@section('cuerpo')
<head>
<script type="text/javascript">
$(document).ready(function() {
    $('#CodTipo').change(function(event) {
        event.preventDefault();
        var id = $('#CodTipo').val();
        if(id == 4){
            document.getElementById("desplegable").style.display="block"; 
        }
    });
    
    $('#guardar').click(function(){
        var dato = $("#CodLanding").val();
        var dato1 = $("#NombreCampo").val();
        var dato2 = $('input[name=Obligatorio]:checked', '#form1').val();
        var dato3 = $("#CodTipo").val();
        var dato4 = $("select#Combo option:selected").val();
        $.ajax({
            type: "GET",
            url: "{{url('nuevoCampo')}}",
            data: {CodLanding:dato,
                    NombreCampo:dato1,
                    Obligatorio:dato2,
                    CodTipo:dato3,
                    Combo:dato4},
            success: function() {
                alert('Tus datos han sido insertados correctamente!'); 
                location.reload();
                $("#CodLanding").val(""); 
                $("#NombreCampo").val(""); 
                $("#Obligatorio").val(""); 
                $("#CodTipo").val(""); 
                $("#Combo").val(""); 
            }
        });
        return false; 
    }); 
});
function modal(){
    var num_plantilla = $('input[name="plantilla"]:checked').val();
    var CodLanding = $('#CodLanding').val();
    var ruta = "{{url('plantilla')}}";

    $.ajax({
        type: "GET",
        async: false,
        url: ruta,
        data: {num_p:num_plantilla, id:CodLanding},
        success: function(data) {
            window.open(data, '_blank');
            return false;
        }
    });
} 

function modalFor(id){
    var ruta = $('#ruta').val()+'/'+id;
//            alert(ruta+'/'+id);
    document.getElementById('landing-'+id).setAttribute('href', ruta);
}
</script>
<style>
    #desplegable {
        display: none;
        overflow: hidden;
    } 
</style>
</head>

<section id='tools'>
    <ul class='breadcrumb' id='breadcrumb'>
        <li class='title'>Landing</li>
        <li>Detalle</li>
        <li>Formulario</li>
    </ul>
</section>
<!-- Content -->
<div id='content'>
    <input type="hidden" name='ruta' id='ruta' value="{{url("ver_modal/")}}">
    
    <div class="form-group add">
        <acronym title=" Adicionar nuevo ">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalAdiconar"><i class="fa fa-plus-square"></i></button>
        </acronym>
        <acronym title=" Ver formulario ">
            <a class="pull-left btn btn-warning" href="#" data-toggle="modal" data-target="#myModal" data-dismiss="modal" onclick="modalFor({{$id}})" id="landing-{{$id}}"><i class="fa fa-bars"></i></a>
            <!--<a class="btn btn-warning" href="{{url('formulario', $id)}}"><i class="fa fa-bars"></i></a>-->
        </acronym>  
        <acronym title=" Modificar plantilla ">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPlantilla">Plantilla</button>
            <!--<a class="btn btn-primary" href="{{url('plantilla1', $id)}}">Plantilla</a>-->
        </acronym>
              
    </div> 
    <!--Modal formulario-->
    <div id="myModal" class="modal fade" role="dialog" id='{{$id}}' data-refresh="true" data-dismiss="modal">
        <div class="modal-dialog modal-lg" >
            <div class="modal-header" style="background-color: #fff;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Formulario</h4>
            </div>
            <div class="modal-content">                                    
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!--Fin modal formulario-->
    <!--Modal adicionar registro-->
    <input type="hidden" name="CodLanding" id="CodLanding" value="{{$id}}">
    <div id="modalAdiconar" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Adicionar nuevo campo</h4>
                </div>
                <form name="form1" id="form1" >
                    <div class="modal-body">
                        <div class="row" style="padding: 25px;">
                            <div class="form-group row">
                                {!! Form::label('NombreCampo','Nombre de campo:', ['class' => 'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('NombreCampo', null, ['class' => 'form-control', 'id' => 'NombreCampo']) !!}
                                </div> 
                            </div>
                            <div class="form-group row">
                                {!! Form::label('Obligatorio','Obligatorio:', ['class' => 'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {{ Form::radio('Obligatorio', 'Si', false, ['id' => 'Obligatorio']) }} Si
                                    {{ Form::radio('Obligatorio', 'No', false, ['id' => 'Obligatorio']) }} No
                                </div>
                            </div>
                            <div class="form-group row">
                                {!! Form::label('CodTipo','Tipo:', ['class' => 'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    <select id="CodTipo" name="CodTipo" class="form-control">
                                        <option value="" disabled selected>--Escoja un tipo de campo--</option>
                                        @foreach($tipos as $tipo)
                                        <option value="{{$tipo->id}}">{{$tipo->Nombre}}</option>
                                        @endforeach
                                    </select> 
                                </div>
                            </div>
                            <div class="form-group row" id="desplegable" >
                                {!! Form::label('Combo','Combo:', ['class' => 'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    <select id="Combo" name="Combo" class="form-control">
                                        @foreach($combos as $combo)
                                        <option value="{{$combo->id}}">{{$combo->Nombre}}</option>
                                        @endforeach
                                    </select> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="text-align: center;">
                        <input type="submit" class="btn btn-success" value="Guardar Nuevo" id="guardar"> 
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>                                
                    </div>
                </form>
            </div>
        </div>
    </div>    
    <!--fin modal adicionar--> 
    <!--Modal escoger plantilla-->
    <div id="modalPlantilla" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Escoja una plantilla</h4>
                </div>
                <form name="form1" id="form1" method="POST" action="" >
                    <div class="modal-body" style="height: 350px;text-align: center;">
                        <div class="row col-md-12">
                            <div class="col-md-3" >
                                <center><img class="img-responsive " src="{{asset('img/plantillas/plantilla1.png')}}" ></center>
                            </div>
                            <div class="col-md-3" >
                                <center><img class="img-responsive " src="{{asset('img/plantillas/plantilla2.png')}}" ></center>
                            </div>
                            <div class="col-md-3" >
                                <center><img class="img-responsive " src="{{asset('img/plantillas/plantilla3.png')}}" ></center>
                            </div>
                            <div class="col-md-3" >
                                <center><img class="img-responsive " src="{{asset('img/plantillas/plantilla4.png')}}" ></center>
                            </div>
                        </div>
                        <div class="row col-md-12">
                            <div class="col-md-3">
                                <input type="radio" name="plantilla" id="plantilla1" value="1" >
                                <p>Plantilla 1</p>
                            </div>
                            <div class="col-md-3">
                                <input type="radio" name="plantilla" id="plantilla2" value="2" >
                                <p>Plantilla 2</p>
                            </div>
                            <div class="col-md-3">
                                <input type="radio" name="plantilla" id="plantilla3" value="3" >
                                <p>Plantilla 3</p>
                            </div>
                            <div class="col-md-3">
                                <input type="radio" name="plantilla" id="plantilla4" value="4" >
                                <p>Plantilla 4</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="text-align: center;">
                        <a class="btn btn-success" onclick="modal()" >Escoger</a>  
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>                                
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Fin modal escoger plantilla-->
    
    <div class="table-responsive">
        <table border="1" class="table tablesorter table-fixed table-bordered table-hover table-responsive" >
            <thead>
                <tr>       
                    <th> Nª </th>
                    <th> Nombre de campo </th>
                    <th> Obligatorio </th>
                    <th> Tipo </th>
                    <th> Combo </th>
                    <th> Acción </th> 
                </tr> 
            </thead>
            <tbody>
                <?php $cont = 0; ?>
                @forelse($campos as $campo)
                <?php $cont++; ?>
                <tr>      
                    <td><?php echo $cont; ?></td>
                    <td>{{$campo->NombreCampo}}</td>   
                    <td>{{$campo->Obligatorio}}</td>
                    @foreach($tipos as $tipo)
                        @if($campo->CodTipo == $tipo->id)
                        <td>{{$tipo->Nombre}}</td>
                        @endif
                    @endforeach                    
                    @if($campo->CodTipo == 4)
                        @foreach($combos as $combo)
                            @if($campo->CodCombo == $combo->id)
                                <td>{{$combo->Nombre}}</td>
                            @endif
                        @endforeach
                    @else
                    <td>-</td>
                    @endif                    
                    <td style="text-align: center;">
                        <div  class="row" style="display: inline-block; text-align: center;">
                            <div style="display: inline-block; text-align: center;">
                                {!! Form::open(['method' => 'DELETE', 'route' => ['Formulario.destroy',$campo->id]]) !!}
                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array('type' => 'submit', 'class' => 'btn btn-danger', 'title' => 'Eliminar registro', 'onclick' => 'return confirm("Está seguro que quiere borrar este registro?");')) !!}
                                {!! Form::close() !!}                      
                            </div>                     
                        </div>
                    </td> 
                </tr>
                @empty
                <p>No existen campos de formulario registrados!</p>
                @endforelse
            </tbody>
        </table>
    </div>   
</div>
@endsection