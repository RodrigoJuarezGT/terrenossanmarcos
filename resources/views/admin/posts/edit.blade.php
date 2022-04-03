
@extends('adminlte::page')

@section('content')


<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    EDITAR POSTS
                    <a href="{{ route('posts.index') }}" class="btn btn-danger btn-sm mb-4 float-right">Cancelar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            @if($post->image)
                            <label for="image">Foto Antigua</label>
                            <div class="form-group text-center">
                                <img src="{{ $post->get_image }}" alt="" height="auto" width="50%">
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="image">Nueva Foto Post</label>
                            <input
                                type="file"
                                name="image"
                                class="form-control @error('image') is-invalid @enderror"
                                id="imagen"
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
                                value="{{ old('title', $post->title) }}"
                            >
                        </div>
                        <div class="form-group">
                            <label>Contenido</label>
                            @error('content')
                                <span class="small text-danger">*Se necesita contenido para el blog*</span>
                            @enderror
                            <textarea
                                name="content"
                                cols=""
                                rows="4"
                                class="form-control"
                                id="content"
                            >
                                {{ old('content', $post->content) }}
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
