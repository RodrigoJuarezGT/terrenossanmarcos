@extends('adminlte::page')

@section('content')

<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    CREAR POST
                    <a href="{{ route('posts.index') }}" class="btn btn-danger btn-sm mb-4 float-right">Cancelar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="image">Imagen</label>
                            <input
                                type="file"
                                name="image"
                                id="imagen"
                                class="form-control @error('image') is-invalid @enderror"
                            >
                        </div>
                        <div class="form-group text-center">
                            <img
                                id="preview-image-before-upload"
                                src=""
                                alt=""
                                width="100%"
                                height="auto"
                            >
                        </div>
                        <div class="form-group">
                            <label>Titulo</label>
                            <input
                                type="text"
                                name="title"
                                class="form-control @error('title') is-invalid @enderror"
                                value="{{ old('title') }}"
                            >
                        </div>
                        <div class="form-group">
                            <label>Contenido del post</label>
                            @error('comment')
                                <span class="small text-danger">*Se necesita el comentario del cliente*</span>
                            @enderror
                            <textarea
                                name="content"
                                cols=""
                                rows="4"
                                class="form-control"
                                id="content"
                            >
                                {{ old('content') }}
                            </textarea>
                        </div>
                        <input type="text" name="date" hidden value="-">
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

    <script src="https://cdn.tiny.cloud/1/oph8tkt13egu2yl9zxiyutfk4g3b5srt52tr11x29913nl44/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
    tinymce.init({
        selector: '#content',
        language: 'es'
    })
    </script>


    <script>
        $('#imagen').change(function(){

            let reader = new FileReader();

            reader.onload = (e) => {

                $('#preview-image-before-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });
    </script>

@stop
