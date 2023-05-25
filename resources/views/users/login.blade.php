@extends('layouts.app')
@section('content')
{{ Form::open(['method'=>"post", 'url'=>"/user/login"]) }}

<div class="row form">
    <div class="col-md-12">
        <h2>Iniciar Sessão</h2>
    </div>
    <div class="col-md-12">
        <label for="email">E-mail <span class="text-danger">*</span></label>
       {{ Form::email('email', null, ['class'=>"form-control", 'placeholder'=>"E-mail"]) }}
       @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-12 mt-2">
        <label for="password">Palavra-Passe <span class="text-danger">*</span></label>
        <input type="password" name="password" class="form-control" placeholder="Palavra-Passe"/>
        @error('password')
             <span class="text-danger">{{ $message }}</span>
         @enderror
     </div>
     <div class="col-md-12 mt-3 d-grid gap-2">
        {{ Form::submit('Entrar', ['class'=>"btn btn-primary btn-blok"]) }}
     </div>
</div>
{{ Form::close() }}
@endsection