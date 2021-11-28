@extends('adminlte::page')

@section('content')


<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    EDITAR TIPO DE PROPIEDAD
                    <a href="{{ route('PropertyCategory.index') }}" class="btn btn-danger btn-sm mb-4 float-right">Cancelar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('PropertyCategory.update', $PropertyCategory) }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input
                                type="text"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name', $PropertyCategory->name) }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            @if($PropertyCategory->image)
                            <label for="image">Imagen Antigua</label>
                            <div class="form-group text-center">
                                <img src="{{ $PropertyCategory->get_image }}" alt="" height="auto" width="50%">
                            </div>
                            @endif
                            <label for="image">Imagen Nueva</label>
                            <input
                                type="file"
                                name="image"
                                class="form-control"
                            >
                        </div>
                        <div class="form-group">
                            <label>Texto</label>
                            @error('description')
                                <span class="small text-danger">*Se necesita un texto para el tipo de propiedad</span>
                            @enderror
                            <textarea
                                name="description"
                                id="description"
                                cols=""
                                rows="4"
                                class="form-control"
                            >
                                {{ old('description', $PropertyCategory->description) }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            @csrf
                            @method('PUT')
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

    <script src="https://cdn.tiny.cloud/1/oph8tkt13egu2yl9zxiyutfk4g3b5srt52tr11x29913nl44/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
    tinymce.init({
        selector: '#description',
        plugins: 'table code lists fullscreen',
    })
    </script>


@stop
