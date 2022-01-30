@extends('adminlte::page')

@section('content')


<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    EDITAR COMENTARIO
                    <a href="{{ route('review.index') }}" class="btn btn-danger btn-sm mb-4 float-right">Cancelar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('review.update', $review) }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            @if($review->image)
                            <label for="image">Foto Antigua</label>
                            <div class="form-group text-center">
                                <img src="{{ $review->get_image }}" alt="" height="auto" width="50%">
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="image">Nueva Foto del Cliente</label>
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
                                value="{{ old('name', $review->name) }}"
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
                                {{ old('comment', $review->comment) }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            @csrf
                            @method('put')
                            <input
                                type="submit"
                                value="Actualizar"
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


