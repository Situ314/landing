<!DOCTYPE html>
<html class='no-js' lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Ingresar</title>
    {!! Html::style('css/estilo.css') !!}
    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.css') !!}  
    
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    
  </head>
  <body class='login'>
    <div class='wrapper'>
      <div class='row'>
        <div class='col-lg-12'>
          <div class='brand text-center'>
              <img class="img-responsive center-block" src="{{asset('img/leads.png')}}" style='margin:25px 12px 25px 12px;'>
          </div>
        </div>
      </div>
      <div class='row'>
        <div class='col-lg-12'>
          <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
            <fieldset class='text-center'>
                <legend style='color:#d2ac9a;'>Ingresa a tu cuenta</legend>              
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="username" class="col-md-12 control-label" style="text-align: left;">Nombre de usuario</label>

                    <div class="col-md-12">
                        <input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
              
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-12 control-label" style="text-align: left;">Contraseña</label></br>

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>              
              <div class='text-center'>
                <div class='checkbox'>
                  <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame
                  </label>
                </div>
                <button type="submit" class="btn" style='background-color: #ea730c;color:#fff;'>
                    Ingresar
                </button>
                <!--<a href="forgot_password.html">Olvidaste tu contraseña?</a>-->
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
