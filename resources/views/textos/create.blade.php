@extends('layouts.app')
@section('content')

{{ Form::open(['url'=>"/", 'method'=>"post"]) }}

<div class="row">
    @include('include.message')
<div class="col-md-6">
{{ Form::text('texto', null, ['class'=>"form-control", 'placeholder'=>"Texto"])}}
@if ($errors->has('texto'))
     <span class="text-danger">{{ $errors->first('texto')}}</span>
@endif
</div>

<div class="col-md-6">
    {{ Form::select('id_tipo_texto', $tipo_textos->pluck('tipo', 'id'), null, ['class'=>"form-control", 'placeholder'=>"Tipo de Texto"])}}
    @if ($errors->has('id_tipo_texto'))
         <span class="text-danger">{{ $errors->first('id_tipo_texto')}}</span>
    @endif
</div>

<div class="col-md-6">
    {{ Form::text('video',  null, ['class'=>"form-control", 'placeholder'=>"Link Video"])}}
    @if ($errors->has('video'))
         <span class="text-danger">{{ $errors->first('video')}}</span>
    @endif
</div>

<div class="col-md-12">
    {{ Form::submit('Salvar', ['class'=>"btn btn-primary"])}}

</div>

</div>
{{ Form::close() }}
@endsection