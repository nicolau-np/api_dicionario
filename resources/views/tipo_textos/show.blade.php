@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-12">
<b>Tipo de Texto:</b> {{ $texto->tipo_textos->tipo }}<br/>
<b>Texto:</b> {{ $texto->texto }}<br/>
<b>Vídeo:</b> {{ $texto->video }}<br/>
</div>
</div>
@endsection
