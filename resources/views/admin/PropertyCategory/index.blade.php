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
                                TIPO DE INMUEBLE
                                <a href="{{ route('PropertyCategory.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
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
                                                <th>IMAGEN</th>
                                                <th>NOMBRE</th>
                                                <th>TEXTO</th>
                                                <th>ACCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($PropertyCategories as $PropertyCategory)

                                                <tr>

                                                    <td>
                                                        @if($PropertyCategory->image)

                                                        <img src="{{ $PropertyCategory->get_image }}" height="auto" width="100px" alt="imagen_PropertyCategory">

                                                        @else

                                                        No hay imagen

                                                        @endif
                                                    </td>
                                                    <td>{{ $PropertyCategory->name }}</td>
                                                    <td>{!! $PropertyCategory->description !!}</td>
                                                    <td class="d-flex">
                                                        <a href="{{ route('PropertyCategory.edit', $PropertyCategory) }}" class="btn btn-warning mr-2"><i class="far fa-edit"></i></a>
                                                        <form action="{{ route('PropertyCategory.destroy', $PropertyCategory) }}" method="POST">
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
                                <div class="mt-3">
                                        {{ $PropertyCategories->links('pagination::bootstrap-4') }}
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

    <script src="https://cdn.tiny.cloud/1/oph8tkt13egu2yl9zxiyutfk4g3b5srt52tr11x29913nl44/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
    tinymce.init({
        // selector: '#description',
    })
    </script>


@stop
