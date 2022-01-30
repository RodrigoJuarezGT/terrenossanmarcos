@extends('adminlte::page')

@section('content')


<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    CREAR COMENTARIO
                    <a href="{{ route('review.index') }}" class="btn btn-danger btn-sm mb-4 float-right">Cancelar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('review.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="image">Foto del Cliente</label>
                            <input
                                type="file"
                                name="image"
                                class="form-control @error('image') is-invalid @enderror"
                            >
                        </div>
                        <div class="form-group">
                            <label>Nombre del Cliente</label>
                            <input
                                type="text"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}"
                            >
                        </div>
                        <div class="form-group">
                            <label>Comentario del Cliente</label>
                            @error('comment')
                                <span class="small text-danger">*Se necesita el comentario del cliente*</span>
                            @enderror
                            <textarea
                                name="comment"
                                cols=""
                                rows="4"
                                class="form-control"
                            >
                                {{ old('comment') }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            @csrf
                            <input
                                type="submit"
                                value="Crear"
                                class="btn btn-sm btn-primary form-control mt-4"
                            >
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>


@stop



@section('js')



@stop
