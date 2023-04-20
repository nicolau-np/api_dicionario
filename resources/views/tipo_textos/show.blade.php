@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-12">
<b>Tipo:</b> {{ $tipo_texto->tipo }}<br/>
<b>Imagem:</b> {{ $tipo_texto->img }}<br/>
</div>
</div>
@endsection
