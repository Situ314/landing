<head>
<script type="text/javascript">
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
        <li>Editar</li>
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
            <?php $cont = 0; ?>
            @foreach($detalles_combo as $detalle_combo)
                <?php $cont++; ?>
                <input type='text' name="<?php echo 'opcion'.$cont; ?>" id="<?php echo 'opcion'.$cont; ?>" class="form-control" value="{{$detalle_combo->Nombre}}">
            @endforeach
        </div>
        <input type="hidden" name='elementos' id='elementos' value="<?php echo $cont; ?>">
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