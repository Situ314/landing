<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="robots">
    <title>LEADS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--<script src='{{asset('js/jquery-3.3.1.min.js')}}'></script>-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('vendor/ckeditor/ckeditor/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>    
<div contenteditable="true">    
    <div class="container-fluid">
        <input type="hidden" name="PixeFormulario" value="">
        <div class="row">
            <div class="col-md-5" contenteditable="true" style="overflow: hidden;">                
                <img class="img-fluid" src="http://punchmobility.com/wp-content/uploads/2014/07/girl-phone.png" alt="CKEditor logo"> 
            </div>
            <div class="col-md-7">
                <div style="position: relative;color: white; font-size: 20px;font-style: bold; text-transform: uppercase;">                    
                    <img src="https://http2.mlstatic.com/fondo-pantalla-verde-chromakey-para-estudio-fotografico-D_NQ_NP_18551-MLM20157874753_092014-F.jpg" style="width:100%; height: 200px;">
                    <div style=" position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%); width: 90%">
                        <h3>
                            COMIENZA A
                        </h3>
                        <h2>
                            VENDER MÁS EN FACEBOOK!
                        </h2>
                    </div>
                </div>
                <div contenteditable="true" style="padding: 30px; text-align: center;font-size: 20px;font-style: bold;">
                    <p>Te regalamos una campaña gratuita en Facebook para tu empresa.</p>
                    <p>Puedes promocionar el producto o servicio que más desees.</p>
                    <p>Y sí, es 100% gratuito, sin ningún costo adicional.</p>
                    <p>Sólo debes cumplir algunos requisitos para facilitar nuestro trabajo.</p>
                </div>
            </div>
        </div>
        <div class="row">
         <div class="col-md-12">
            <div id="bluesection" >
                
                <p contenteditable="true">
                    Haz clic abajo para acceder a nuestro regalo.           
                </p>                    
                <p style="background-color: #FEC107; color: #fff; padding-left: 80px; padding-right: 80px">
                    <input type="hidden" name="PixeBoton" value="">
                <center><a href="#" data-toggle="modal" data-target="#myModal" class="button" style="background-color: #F9AF04;color: #fff;height:55px; text-decoration: none;">SI, ME INTERESA LA PROMOCIÓN</a></center>
                    <!--<a href="#" data-toggle="modal" data-target="#myModal" data-dismiss="modal" onclick="modal({{$id}})" id="landing-{{$id}}">SI, DESEO ACCEDER A LA CAMPAÑA GRATUITA</a>-->
                </p>                
            </div>             
        </div>        
    </div>   

    <div class="row">
        <div class="col-md-12">
            <div style="padding-top: 50px" contenteditable="true">
                <p>Para acceder a la campaña gratuita debes cumplir con los siguientes requisitos</p>
            </div>
        </div>
    </div>

    <div class="row row-eq-height" id="columns">
        <div class="col-md-4 col-sm-12 col-xs-12">
                <div style="position: relative;color: white;">                    
                    <img src="https://i.pinimg.com/originals/bc/1f/f0/bc1ff0a42a0f0ea265938ef9f4e8309d.jpg" style="width:100%; height: 150px;">
                    <div style=" position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%); width: 90%">
                        <h4>
                            CONTAR CON UNA FAN PAGE
                        </h4>

                        <p>
                            Tu empresa debe tener una página coorporativa en Facebook.
                        </p>
                    </div>
                </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div style="position: relative;color: white;">                    
                    <img src="https://i.pinimg.com/originals/bc/1f/f0/bc1ff0a42a0f0ea265938ef9f4e8309d.jpg" style="width:100%; height: 150px;">
                    <div style=" position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%); width: 90%">
                        <h4 contenteditable="true">
                            HACERNOS ADMINISTRADORES
                        </h4>

                        <p contenteditable="true">
                            Para poder iniciar la campaña necesitamos ser administradores durante la publicidad.
                        </p>
                    </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
           <div style="position: relative;color: white;">                    
                    <img src="https://i.pinimg.com/originals/bc/1f/f0/bc1ff0a42a0f0ea265938ef9f4e8309d.jpg" style="width:100%; height: 150px;max-height: 100%">
                    <div style=" position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%); width: 90%">
                        <h4 contenteditable="true">
                            INFORMACIÓN DE TU PRODUCTO/SERCVICIO
                        </h4>
                        
                        <p contenteditable="true">
                            Debes proporcionarnos del producto o servicio que deseas publicitar.
                        </p>
                    </div>
            </div>
        </div>

    </div>

    <div style="position: relative; background-color: #00722a; color: white; text-align: center; padding: 10px; margin-top: 20px" >
        <img class="img-fluid" style="position: absolute;top: 50%; left: 10%; transform: translate(-10%, -50%); width: 200px; height: 69px" src="http://localhost:8080/landing/public/img/images/Leads.png"> 
        <div contenteditable="true" name="footer" id="footer" class="footer">
            <p>
                Esta Promoción finaliza el {{FechaDeMySQL($landing->Fin)}}           
            </p>

            <p>
                De Chali 2018 ll Todos los derechos reservados <br>
                Visita nuestro sitio web <br>
                <a href="www.dechali.com">www.dechali.com</a>       
            </p>
        </div>
    </div>

 </div>
    <input type="hidden" name="CodLanding" id="CodLanding" value="{{$id}}">
    <input type="hidden" name="Nombre" value="{{$nombre}}">
    <input type="hidden" name="Desde" id="Desde" value="{{$landing->Inicio}}">
    <input type="hidden" name="Hasta" id="Hasta" value="{{$landing->Fin}}">
    <input type="hidden" name="ContadorVisitas" id="ContadorVisitas" value="">
    <input type="hidden" name="ContadorClics" id="ContadorClics" value="">
    <!--modal-->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                            <div class="container-fluid">    
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <center><h2>Déjanos tus datos de contacto</h2></center>
                                    {!! Form::open(['method' => 'POST','route' => 'guardar'])!!}
                                        <input type="hidden" name="id_landing" value="{{$id}}">
                                        <?php $cont = 0;?>
                                        @foreach($campos as $campo)
                                            @foreach($tipos as $tipo)
                                                @if($campo->CodTipo == $tipo->id)
                                                    <?php $cont++;?>
                                                    @if($tipo->Nombre == 'Texto')
                                                        @if($campo->Obligatorio == 'Si')
                                                            <div class="form-group">
                                                                <div class="col-md-12">{{$campo->NombreCampo}}*: </div>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" name="<?php echo 'campo'.$cont;?>" placeholder="{{$campo->NombreCampo}}*" required >
                                                                </div>
                                                            </div>
                                                        @else 
                                                            <div class="form-group">
                                                                <div class="col-md-12">{{$campo->NombreCampo}}: </div>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" name="<?php echo 'campo'.$cont;?>" placeholder="{{$campo->NombreCampo}}" >
                                                                </div>
                                                            </div>
                                                        @endif
                                                        </br>
                                                    @elseif($tipo->Nombre == 'Numerico')
                                                        @if($campo->Obligatorio == 'Si')
                                                            <div class="form-group">
                                                                <div class="col-md-12">{{$campo->NombreCampo}}*: </div>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" name="<?php echo 'campo'.$cont;?>" placeholder="{{$campo->NombreCampo}}*" required >
                                                                </div>
                                                            </div>
                                                        @else 
                                                            <div class="form-group">
                                                                <div class="col-md-12">{{$campo->NombreCampo}}: </div>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" name="<?php echo 'campo'.$cont;?>" placeholder="{{$campo->NombreCampo}}" >
                                                                </div>
                                                            </div>
                                                        @endif   
                                                        </br>
                                                    @elseif($tipo->Nombre == 'Correo')
                                                        @if($campo->Obligatorio == 'Si')
                                                            <div class="form-group">
                                                                <div class="col-md-12">{{$campo->NombreCampo}}*: </div>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" name="<?php echo 'campo'.$cont;?>" placeholder="{{$campo->NombreCampo}}*" required >
                                                                </div>
                                                            </div>
                                                        @else 
                                                            <div class="form-group">
                                                                <div class="col-md-12">{{$campo->NombreCampo}}: </div>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" name="<?php echo 'campo'.$cont;?>" placeholder="{{$campo->NombreCampo}}" >
                                                                </div>
                                                            </div>
                                                        @endif 
                                                        </br>
                                                    @elseif($tipo->Nombre == 'Combo')     
                                                        @if($campo->Obligatorio == 'Si')
                                                            <div class="form-group">
                                                                <div class="col-md-12">{{$campo->NombreCampo}}*: </div>
                                                                <div class="col-md-12">
                                                                    <select class="form-control" name="<?php echo 'campo'.$cont;?>" required >
                                                                        @foreach($detalle_combos as $detalle_combo)
                                                                            @if($campo->CodCombo == $detalle_combo->CodCombo)
                                                                                <option value="{{$campo->CodCombo}}|{{$detalle_combo->id}}">{{$detalle_combo->Nombre}}</option>
                                                                            @endif
                                                                        @endforeach      
                                                                    </select> 
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="form-group">
                                                                <div class="col-md-12">{{$campo->NombreCampo}}: </div>
                                                                <div class="col-md-12">
                                                                    <select class="form-control" name="<?php echo 'campo'.$cont;?>" >
                                                                        @foreach($detalle_combos as $detalle_combo)
                                                                            @if($campo->CodCombo == $detalle_combo->CodCombo)
                                                                                <option value="{{$campo->CodCombo}}|{{$detalle_combo->id}}">{{$detalle_combo->Nombre}}</option>
                                                                            @endif
                                                                        @endforeach      
                                                                    </select> 
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endforeach
                                        
                                        </br>
                                        <input type="hidden" name="num_campos" value="<?php echo $cont;?>">                                        
                                        <div class="col-md-12" style="padding: 0 60px;">
                                            <!--<center><a type="submit" name='Enviar' id='Enviar' class="button" style="background-color:#F9AF04;color:#fff;height:55px;">Enviar</a></center>-->
                                            <center>{!! Form::submit('Enviar', ['class' => 'form-control', 'name' => 'Enviar', 'id' => 'Enviar', 'style' => 'color:#fff;height:55px;background-color:#F9AF04;', 'disabled' => 'true']) !!}</center>
                                        </div>
                                    {!! Form::close()!!}
                                    <center><p>(*) No compartimos tu información con nadie.</p></center>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

</html>