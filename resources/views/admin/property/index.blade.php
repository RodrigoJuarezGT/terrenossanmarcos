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
                                INMUEBLES
                                <a href="{{ route('property.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
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
                                                <th>ID</th>
                                                <th>TIPO</th>
                                                <th>IMAGEN</th>
                                                <th>TITULO</th>                                             
                                                <th>PRECIO</th>
                                                <th>DIRECCION</th>
                                                <th>ACCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($properties as $property)

                                                <tr>

                                                    <td><strong>{{ $property->id }}</strong></td>
                                                    <td>{{ $property->PropertyCategory->name }}</td>
                                                    <td>
                                                        @if($property->image1)

                                                        <img src="{{ $property->get_image }}" height="auto" width="100px" alt="imagen_PropertyCategory">

                                                        @else

                                                        No hay imagen

                                                        @endif
                                                    </td>
                                                    <td>{{ $property->tittle }}</td>
                                                    <td>{{ $property->price }}</td>
                                                    <td>{{ $property->address }}</td>
                                                    <td class="d-flex">
                                                        <a href="{{ route('property.edit', $property) }}" class="btn btn-warning mr-2"><i class="far fa-edit"></i></a>
                                                        <form action="{{ route('property.destroy', $property) }}" method="POST">
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
                                        {{ $properties->links('pagination::bootstrap-4') }}
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