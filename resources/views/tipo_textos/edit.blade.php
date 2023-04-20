@extends('layouts.app')
@section('content')

{{ Form::open(['url'=>"/tipo_textos/{$tipo_texto->id}", 'method'=>"put"]) }}

<div class="row">
    @include('include.message')
<div class="col-md-4">
{{ Form::text('tipo', $tipo_texto->tipo, ['class'=>"form-control", 'placeholder'=>"Tipo"])}}
@if ($errors->has('tipo'))
     <span class="text-danger">{{ $errors->first('tipo')}}</span>
@endif
</div>

<div class="col-md-8 mt-2">
    {{ Form::text('img',  $tipo_texto->img, ['class'=>"form-control", 'placeholder'=>"Link Imagem"])}}
    @if ($errors->has('img'))
         <span class="text-danger">{{ $errors->first('img')}}</span>
    @endif
</div>

<div class="col-md-12 mt-2">
    {{ Form::submit('Salvar', ['class'=>"btn btn-primary"])}}
    {{ Form::reset('Cancelar', ['class'=>"btn btn-danger"]) }}
</div>

</div>
{{ Form::close() }}
@endsection
