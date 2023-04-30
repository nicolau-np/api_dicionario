@extends('layouts.app')
@section('content')
{{ Form::open(['method'=>"post", 'url'=>"/user/login"]) }}

<div class="row form">
    <div class="col-md-12">
        <h1>Iniciar Sessão</h1>
    </div>
    <div class="col-md-12">
       {{ Form::email('email', null, ['class'=>"form-control", 'placeholder'=>"E-mail"]) }}
       @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-12 mt-2">
        <input type="password" name="password" class="form-control" placeholder="Palavra-Passe"/>
        @error('password')
             <span class="text-danger">{{ $message }}</span>
         @enderror
     </div>
     <div class="col-md-12 mt-2 d-grid gap-2">
        {{ Form::submit('Entrar', ['class'=>"btn btn-primary btn-blok"]) }}
     </div>
</div>
{{ Form::close() }}
@endsection