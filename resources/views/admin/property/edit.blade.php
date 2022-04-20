@extends('adminlte::page')

@section('content')


<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    EDITAR INMUEBLE
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            Algo ha ido mal, revisa y vuelve a intentar.
                        </div>
                    @endif

                    <form action="{{ route('property.update', $property) }}" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="PropertyCategory">Tipo de Inmueble</label>
                            <select name="property_category_id" required>
                               @if($property->PropertyCategory)
                                <option
                                    value="{{ $property->PropertyCategory->id }}"
                                >
                                    {{ $property->PropertyCategory->name }}
                                </option>
                                @else
                                <option value=""></option>
                               @endif

                                @foreach($PropertyCategories as $PropertyCategory)

                                    @continue(@$PropertyCategory->id == @$property->PropertyCategory->id)

                                    <option
                                        value="{{ $PropertyCategory->id }}"
                                    >
                                        {{ $PropertyCategory->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="active">Activo</label>
                                        <input
                                            type="checkbox"
                                            name="active"

                                        @if( @$property->active == 'on' )
                                            checked
                                        @endif
                                        >
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="invest">Para Invertir</label>
                                        <input
                                            type="checkbox"
                                            name="invest"

                                        @if( @$property->invest == 'on' )
                                            checked
                                        @endif
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Titulo</label>
                            <input
                                type="text"
                                name="tittle"
                                class="form-control @error('tittle') is-invalid @enderror"
                                value="{{ old('tittle', $property->tittle) }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <label>Direccion</label>
                            <input
                                type="text"
                                name="address"
                                class="form-control @error('address')is-invalid @enderror"
                                value="{{ old('address', $property->address) }}"
                            >
                        </div>
                        <div class="form-group">
                            <label>Precio</label>
                            <input
                                type="number"
                                name="price"
                                class="form-control @error('price') is-invalid @enderror"
                                value="{{ old('price', $property->price) }}"
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
                                            value="{{ old('dimensions', $property->dimensions) }}"
                                            class="form-control @error('dimensions') is-invalid @enderror"
                                        >
                                    </div>
                                    <div class="col-sm">
                                        <label for="image">Pisos</label>
                                        <input
                                            type="text"
                                            name="floors"
                                            value="{{ old('floors', $property->floors) }}"
                                            class="form-control @error('floors') is-invalid @enderror"
                                        >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="image">Medida de Calle</label>
                                        <input
                                            type="text"
                                            name="street"
                                            value="{{ old('street', $property->street) }}"
                                            class="form-control @error('street') is-invalid @enderror"
                                        >
                                    </div>
                                    <div class="col-sm">
                                        <label for="image">Medida de Fondo</label>
                                        <input
                                            type="text"
                                            name="bottom"
                                            value="{{ old('bottom', $property->bottom) }}"
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
                                {{ old('rooms', $property->rooms) }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Descripcion</label>
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
                                {{ old('description', $property->description) }}
                            </textarea>
                        </div>
                        {{-- <div class="form-group">
                            <label>Link Facebook</label>
                            <input
                                type="text"
                                name="facebook_link"
                                class="form-control @error('facebook_link') is-invalid @enderror"
                                value="{{ old('facebook_link', $property->facebook_link) }}"
                            >
                        </div> --}}
                        <div class="form-group">
                            <label>Link Ruta Google Maps</label>
                            <input
                                type="text"
                                name="map_route_link"
                                class="form-control @error('map_route_link') is-invalid @enderror"
                                value="{{ old('map_route_link', $property->map_route_link) }}"
                            >
                        </div>
                        @if($property->coordinates)
                            <div class="form-group">
                                <label>Mapa Actual</label>
                                <div class="form-group">
                                    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q={{ $property->coordinates }}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-org.net"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net">embed custom google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
                                </div>
                            </div>
                        @endif
                        <div class="form-group">
                            <label>Nuevas Coordenadas Mapa Google Maps</label>
                            <input
                                id="mapa_campo"
                                type="text"
                                name="coordinates"
                                class="form-control @error('coordinates') is-invalid @enderror"
                                value="{{ old('coordinates', $property->coordinates) }}"
                            >
                        </div>
                        <div class="form-group">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <label>Video Actual</label>
                                        <div class="form-group text-center">
                                            <video
                                                width="75%"
                                                height="auto"
                                                controls
                                            >
                                                <source src="{{ $property->get_video }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <label for="video">Nuevo Video</label>
                                        <input
                                            id="video"
                                            type="file"
                                            name="video"
                                            class="form-control"
                                        >
                                        <div class="form-group text-center">
                                            <video
                                                id="preview-video-before-upload"
                                                width="100%"
                                                height="auto"
                                                controls
                                            >
                                                <source src="" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>

                                        </div>
                                    </div>
                                </div>
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
                                            @if($property["image" . $i])
                                            <label>Foto {{ $i }} Actual</label>
                                            <div class="form-group">
                                                <img class="img-fluid" src="{{ $property->ShowImage($i) }}" alt="">
                                            </div>
                                            @endif
                                        </div>
                                        <div class="col-sm">
                                            <label for="image{{ $i }}">Nueva Foto {{ $i }}</label>
                                            <input
                                                type="file"
                                                id="image{{ $i }}"
                                                name="image{{ $i }}"
                                                class="form-control"
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
                                        <div class="w-100"></div>
                                    @endfor
                                </div>
                            </div>


                        </div>

                        <div class="form-group">
                            @csrf
                            @method('put')
                            <input
                                id="Actualizar"
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

<div style="position: fixed; bottom: 10px; right: 10px; z-index: 1000;">
    <a href="{{ route('property.index') }}" class="btn btn-danger btn-sm mb-4">Cancelar</a>
    <button
    class="btn btn-primary btn-sm mb-4 mr-2"
    onclick="document.getElementById('Actualizar').click()"
    >
    Actualizar
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
