@extends('layouts.app')
@section('content')
    <div class="row">
        @include('include.message')
        <div class="col-md-12">
        <a href="/tipo-textos/create">Nova</a>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tipo</th>
                            <th>Imagem</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tipo_textos as $tipo_texto)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $tipo_texto->tipo }}</td>
                            <td>{{ $tipo_texto->img }}</td>
                            <td>
                                <a href="/tipo-textos/{{ $tipo_texto->id }}" class="btn btn-success btn-sm">Show</a>
                                <a href="/tipo-textos/edit/{{ $tipo_texto->id }}" class="btn btn-primary btn-sm ml-4">Edit</a>
                                <a href="/tipo-textos/destroy/{{ $tipo_texto->id }}" class="btn btn-danger btn-sm ml-4">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="paginate">{{ $tipo_textos->links() }}</div>
        </div>
    </div>
@endsection
