<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {!! Html::style('css/bootstrap.css') !!}
  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
</head>
<body>

<div class="container-fluid">    
    <div class="col-md-12 row">
        <div class="form-group">
        
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <img class="img-responsive " src="{{asset('img/form.png')}}">
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <center><h2>Deja tus datos de contacto para acceder a la campaña</h2></center>
        {!! Form::open(['method' => 'POST','route' => 'Visitante.store', 'name' => 'tuformulario'])!!} 
        <input type="hidden" name="id_landing" value="{{$id}}">
        <?php $cont = 0;?>
        @foreach($campos as $campo)
            @foreach($tipos as $tipo)
                @if($campo->CodTipo == $tipo->id)
                    <?php $cont++;?>
                    @if($tipo->Nombre == 'Texto')
                        @if($campo->Obligatorio == 'Si')
                            <input type="text" class="form-control" name="<?php echo 'campo'.$cont;?>" placeholder="{{$campo->NombreCampo}}*" required >
                        @else
                            <input type="text" name="<?php echo 'campo'.$cont;?>" placeholder="{{$campo->NombreCampo}}" class="form-control" >
                        @endif
                        </br>
                    @elseif($tipo->Nombre == 'Numerico')
                        @if($campo->Obligatorio == 'Si')
                            <input type="number" name="<?php echo 'campo'.$cont;?>" placeholder="{{$campo->NombreCampo}}*" class="form-control" required >
                        @else
                            <input type="number" name="<?php echo 'campo'.$cont;?>" placeholder="{{$campo->NombreCampo}}" class="form-control" >
                        @endif    
                        </br>
                    @elseif($tipo->Nombre == 'Correo')
                        @if($campo->Obligatorio == 'Si')
                            <input type="email" name="<?php echo 'campo'.$cont;?>" placeholder="{{$campo->NombreCampo}}*" class="form-control" required >
                        @else
                            <input type="email" name="<?php echo 'campo'.$cont;?>" placeholder="{{$campo->NombreCampo}}" class="form-control" >
                        @endif   
                        </br>
                    @elseif($tipo->Nombre == 'Combo')  
                        @if($campo->Obligatorio == 'Si')
                            <select class="form-control" name="<?php echo 'campo'.$cont;?>" required >
                                @foreach($detalle_combos as $detalle_combo)
                                    @if($campo->CodCombo == $detalle_combo->CodCombo)
                                        <option value="{{$campo->CodCombo}}-{{$detalle_combo->id}}">{{$detalle_combo->Nombre}}</option>
                                    @endif
                                @endforeach      
                            </select>
                        @else
                            <select class="form-control" name="<?php echo 'campo'.$cont;?>"  >
                                @foreach($detalle_combos as $detalle_combo)
                                    @if($campo->CodCombo == $detalle_combo->CodCombo)
                                        <option value="{{$campo->CodCombo}}-{{$detalle_combo->id}}">{{$detalle_combo->Nombre}}</option>
                                    @endif
                                @endforeach      
                            </select>
                        @endif
                    @endif
                @endif
            @endforeach
        @endforeach
        </br>
        <input type="hidden" name="num_campos" value="<?php echo $cont;?>">
        <center>
            <div class="col-md-12" style="padding: 0 60px;">
                {!! Form::submit('Enviar', ['class' => 'form-control', 'style' => 'background-color:#F9AF04;color:#fff;height:55px;', 'disabled']) !!}
            </div>
            <p>(*) No compartiremos tu información con nadie más</p>
        </center>
        {!! Form::close()!!}
    </div>
</div>
</div>

</body>
</html>



