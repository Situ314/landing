<head>
<script type="text/javascript">
    $(document).ready(function(){
        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            language: "es",
            locale: "es",
            autoclose: true
        }); 
    });
    
    function añadir() {
        var num = $("#lista > input").length;
        var newNum = ++num;
        var campo = "<input type='text' name='opcion"+newNum+"' id='opcion"+newNum+"' class='form-control'>";
        $("#lista").append(campo);
        $("#elementos").val(num);
    }
</script>  
</head>
<section id='tools'>
    <ul class='breadcrumb' id='breadcrumb'>
        <li class='title'>Combos</li>
        <li>Nuevo</li>
    </ul>
</section>
<!-- Content -->
<div id='content'> 
<div class="form-horizontal">

<div class="col-lg-7 col-lg-offset-2">  
    <div class="form-group">
        {!! Form::label('Nombre','Nombre de combo*:', ['class' => 'col-lg-4 control-label']) !!}
        <div class="col-lg-8">
            {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4" style="margin-right: -40px;margin-left: 40px;">
            {!! Form::label('opcion','Opciones de combo:', ['class' => 'control-label']) !!}
            <a onclick="añadir()" class="btn btn-primary" ><i class="fa fa-plus" aria-hidden="true" ></i></a>  
        </div>
        <div class="col-md-8" id="lista">
            <input type='text' name="opcion1" id="opcion1" class="form-control">
            <input type='text' name="opcion2" id="opcion2" class="form-control">
        </div>
        <input type="hidden" name='elementos' id='elementos'>
    </div><br>
    <div class="form-group">
        <div class="row col-lg-offset-6">
            {!! Form::submit($textoBotonDeFormulario, ['class' => 'btn btn-success']) !!}
            {!! Form::close()!!}
            <a href="{{route('Combo.index')}}" class="btn btn-primary">Cancel</a>
        </div>
    </div>
</div>
</div>
</div>