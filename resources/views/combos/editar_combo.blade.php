@extends('master')

@section('cuerpo')

{!! Form::model($maestro_combo,['route' => ['Combo.update',$maestro_combo->id],'method'=>'put']) !!}
@include('combos.edit_formulario',['textoBotonDeFormulario'=>'Guardar Edicion'])
{!! Form::close() !!}
@endsection
