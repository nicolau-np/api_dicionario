@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
        <a href="/create">Nova</a>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Texto</th>
                            <th>Tipo</th>
                            <th>Video</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($textos as $texto)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $texto->texto }}</td>
                            <td>{{ $texto->tipo_textos->tipo }}</td>
                            <td>{{ $texto->video }}</td>
                            <td>
                                <a href="/edit/{{ $texto->id }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="/destroy/{{ $texto->id }}" class="btn btn-danger btn-sm ml-4">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="paginate">{{ $textos->links() }}</div>
        </div>
    </div>
@endsection
