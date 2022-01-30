@extends('adminlte::page')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mt-2">

                            <div class="card-header">
                                COMENTARIOS
                                <a href="{{ route('review.create') }}" class="btn btn-sm btn-primary float-right">Nuevo Comentario</a>
                            </div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>FOTO</th>
                                                <th>NOMBRE CLIENTE</th>
                                                <th>COMENTARIO CLIETNE</th>
                                                <th>ACCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($reviews as $review)

                                                <tr>

                                                    <td>
                                                        @if($review->image)

                                                        <img src="{{ $review->get_image }}" height="auto" width="100px" alt="imagen_review">

                                                        @else

                                                        No hay imagen

                                                        @endif
                                                    </td>
                                                    <td>{{ $review->name }}</td>
                                                    <td>{{ $review->comment }}</td>
                                                    <td class="d-flex">
                                                        <a href="{{ route('review.edit', $review) }}" class="btn btn-warning mr-2"><i class="far fa-edit"></i></a>
                                                        <form action="{{ route('review.destroy', $review) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit" onclick="return confirm('Desea eliminar?')">
                                                                <i class="fas fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="card-footer mr-auto">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

@stop



@section('js')


@stop
