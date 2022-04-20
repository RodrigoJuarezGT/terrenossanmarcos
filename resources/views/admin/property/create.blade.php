@extends('adminlte::page')

@section('content')



<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    CREAR INMUEBLE
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

                    <form action="{{ route('property.store') }}" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="PropertyCategory">Tipo de Inmueble</label>
                            <select name="property_category_id" required>
                                <option value="">Seleccionar Tipo de Inmueble</option>
                                @foreach($PropertyCategories as $PropertyCategory)
                                    <option value="{{ $PropertyCategory->id }}">{{ $PropertyCategory->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Titulo</label>
                            <input
                                type="text"
                                name="tittle"
                                class="form-control @error('tittle') is-invalid @enderror"
                                value="{{ old('tittle') }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <label>Direccion</label>
                            <input
                                type="text"
                                name="address"
                                class="form-control @error('address') is-invalid @enderror"
                                value="{{ old('address') }}"
                            >
                        </div>
                        <div class="form-group">
                            <label>Precio</label>
                            <input
                                type="number"
                                name="price"
                                class="form-control @error('price') is-invalid @enderror"
                                value="{{ old('price') }}"
                                placeholder="100000"
                            >
                        </div>
                        <div class="form-group">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="image">Dimensiones</label>
                                        <input
                                            type="text"
                                            name="dimensions"
                                            class="form-control @error('dimensions') is-invalid @enderror"
                                        >
                                    </div>
                                    <div class="col-sm">
                                        <label for="image">Pisos</label>
                                        <input
                                            type="text"
                                            name="floors"
                                            class="form-control @error('floors') is-invalid @enderror"
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="image">Medida de Calle</label>
                                        <input
                                            type="text"
                                            name="street"
                                            class="form-control @error('street') is-invalid @enderror"
                                        >
                                    </div>
                                    <div class="col-sm">
                                        <label for="image">Medida de Fondo</label>
                                        <input
                                            type="text"
                                            name="bottom"
                                            class="form-control @error('bottom') is-invalid @enderror"
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Habitaciones</label>
                            @error('rooms')
                                <span class="small text-danger">*Debes llenar este campo</span>
                            @enderror
                            <textarea
                                name="rooms"
                                id="rooms"
                                cols=""
                                rows="4"
                                class="form-control"
                            >
                                {{ old('rooms') }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Descripcion</label>
                            @error('description')
                                <span class="small text-danger">*Se necesita una descripción.</span>
                            @enderror
                            <textarea
                                name="description"
                                id="description"
                                cols=""
                                rows="4"
                                class="form-control"
                            >
                                {{ old('description') }}
                            </textarea>
                        </div>
                        {{-- <div class="form-group">
                            <label>Link Facebook</label>
                            <input
                                type="text"
                                name="facebook_link"
                                class="form-control @error('facebook_link') is-invalid @enderror"
                                value="{{ old('facebook_link') }}"
                            >
                        </div> --}}
                        <div class="form-group">
                            <label>Link Ruta Google Maps</label>
                            <input
                                type="text"
                                name="map_route_link"
                                class="form-control @error('map_route_link') is-invalid @enderror"
                                value="{{ old('map_route_link') }}"
                            >
                        </div>
                        <div class="form-group">
                            <label>Coordenadas Mapa Google Maps</label>
                            <input
                                id="coordinates"
                                type="text"
                                name="coordinates"
                                class="form-control @error('map_link') is-invalid @enderror"
                                value="{{ old('coordinates') }}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="video">Video</label>
                            <input
                                id="video"
                                type="file"
                                name="video"
                                class="form-control"
                            >

                            <div class="form-group text-center">
                                <video
                                    id="preview-video-before-upload"
                                    width="75%"
                                    height="auto"
                                    controls
                                >
                                    <source src="" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>

                            </div>

                        </div>
                        <hr>
                        <div class="form-group">
                            <label>FOTOS</label>
                        </div>
                        <div class="form-group">
                            <div class="container">
                                <div class="row">
                                    @for($i = 1; $i <= 8; $i++)
                                        <div class="col-sm">
                                            <label
                                            for="image{{ $i }}"
                                            @if($i <= 4)
                                            style=" color: rgb(0, 132, 255);"
                                            @endif
                                            >
                                                Foto {{ $i }}
                                            </label>
                                            <input
                                                type="file"
                                                id="image{{ $i }}"
                                                name="image{{ $i }}"
                                                class="form-control @error('image{{$i}}') is-invalid @enderror"
                                                @if($i <= 4)
                                                    required
                                                @endif
                                                src="{{ old('image' . $i) }}"
                                            >

                                            <div class="form-group text-center">
                                                <img id="preview-image-before-upload{{ $i }}"
                                                class="mt-4"
                                                    src=""
                                                    width="100%"
                                                    height="auto"
                                                >
                                            </div>
                                        </div>
                                        @if($i%2 == 0)
                                            <div class="w-100"></div>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            @csrf
                            <input
                                id="crear"
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

<div style="position: fixed; bottom: 10px; right: 10px; z-index: 1000;">
    <a href="{{ route('property.index') }}" class="btn btn-danger btn-sm mb-4">Cancelar</a>
    <button
        class="btn btn-primary btn-sm mb-4 mr-2"
        onclick="document.getElementById('crear').click()"
    >
    Crear
    </button>
</div>

@stop



@section('js')

    <script src="https://cdn.tiny.cloud/1/oph8tkt13egu2yl9zxiyutfk4g3b5srt52tr11x29913nl44/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#description',
            plugins: 'table code lists fullscreen',
            language: 'es'
        })
        tinymce.init({
            selector: '#rooms',
            plugins: 'table code lists fullscreen',
            language: 'es'
        })
    </script>

    <script>

    $(document).ready(function (e) {

        for(let i = 1 ; i <= 8 ; i++){

            $('#image' + i).change(function(){

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-before-upload' + i).attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });
        }


        $('#video').change(function(){

            let reader = new FileReader();

            reader.onload = (e) => {

                $('#preview-video-before-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });

    });

    </script>


@stop

