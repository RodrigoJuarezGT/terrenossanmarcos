@extends('adminlte::page')

@section('content')



<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    INFORMACION GENERAL
                    <button
                        class="btn btn-primary btn-sm mb-4 mr-2 float-right"
                        onclick="document.getElementById('Actualizar').click()"
                    >
                    Actualizar
                    </button>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            Algo ha ido mal revisa y vuelve a intentar.
                        </div>
                    @endif
                    <form action="{{ route('company.update', $company[0]) }}" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Telefono</label>
                            <input
                                type="number"
                                name="telephone"
                                value="{{ old('telephone', $company[0]->telephone) }}"
                                class="form-control @error('telephone') is-invalid @enderror"
                            >
                        </div>
                        <div class="form-group">
                            <label>Whatsapp</label>
                            <input
                                type="number"
                                name="whatsapp"
                                value="{{ old('whatsapp', $company[0]->whatsapp) }}"
                                class="form-control @error('whatsapp') is-invalid @enderror"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <label>Link Catalogo Whatsapp Business</label>
                            <input
                                type="text"
                                name="whatsapp_link"
                                value="{{ old('whatsapp_link', $company[0]->whatsapp_link) }}"
                                class="form-control @error('whatsapp_link') is-invalid @enderror"
                            >
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input
                                type="text"
                                name="messenger"
                                value="{{ old('messenger', $company[0]->messenger) }}"
                                class="form-control @error('messenger') is-invalid @enderror"
                            >
                        </div>
                        <div class="form-group">
                            <label>Eslogan de la empresa</label>
                            <input
                                type="text"
                                name="slogan"
                                value="{{ old('slogan', $company[0]->slogan) }}"
                                class="form-control @error('slogan') is-invalid @enderror"
                            >
                        </div>
                        <div class="form-group">
                            <label>Texto del Eslogan</label>
                            <textarea
                                name="slogan_text"
                                id="text_slogan"
                                cols=""
                                rows="4"
                                class="form-control @error('slogan_text') is-invalid @enderror"
                            >
                                {{ old('slogan_text', $company[0]->slogan_text) }}
                            </textarea>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>Imagen Inicio</label>
                                        <img src="{{ $company[0]->get_image }}" alt="" width="100%" height="auto">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>Nueva Imagen Inicio</label>
                                        <input id="imagen_inicio" type="file" name="home_image">
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
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>Video Inicio</label>
                                        <video controls src="{{ $company[0]->get_video }}" width="100%" height="400px" ></video>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>Nuevo Video</label>
                                        <input id="video_company" type="file" name="video_company">
                                    </div>
                                    <div class="form-group text-center">
                                        <video
                                            id="preview-video-before-upload"
                                            width="100%"
                                            height="400px"
                                            controls
                                        >
                                            <source src="" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            @csrf
                            @method('PUT')
                            <input
                                type="submit"
                                value="Actualizar"
                                id="Actualizar"
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
        selector: '#text_slogan',
    })
    </script>

    <script>
        $('#video_company').change(function(){

            let reader = new FileReader();

            reader.onload = (e) => {

                $('#preview-video-before-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });
        $('#imagen_inicio').change(function(){

            let reader = new FileReader();

            reader.onload = (e) => {

                $('#preview-image-before-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });
    </script>
@stop
