@extends('master')

@section('cuerpo')

@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

{!! Form::open(['method' => 'POST','route' => 'Combo.store'])!!}
@include('combos.formulario_combo', ['textoBotonDeFormulario' => 'Guardar Nuevo'])
{!! Form::close()!!}

@endsection