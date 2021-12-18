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
                                    <table class="table" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>TIPO</th>
                                                <th>IMAGEN</th>
                                                <th>TITULO</th>
                                                <th>PRECIO</th>
                                                <th>DIRECCION</th>
                                                <th>ACTIVO</th>
                                                <th>ACCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($properties as $property)

                                                <tr>

                                                    <td>
                                                        @if( @$property->PropertyCategory )
                                                            {{ $property->PropertyCategory->name }}
                                                        @else
                                                            <i class="far fa-circle" style="color:#ffc107; font-size: 18px "></i>
                                                        @endif
                                                    </td>
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
                                                    <td>
                                                        @if( @$property->active == 'on' )
                                                        <i class="fas fa-check" style="color: rgb(117, 175, 0); font-size: 18px"></i>
                                                        @else
                                                        <i class="far fa-circle" style="color:#ffc107; font-size: 18px "></i>
                                                        @endif
                                                    </td>
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

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@stop



@section('js')

 <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

 <script>

$(document).ready( function () {

    $('#myTable').DataTable( {
        columnDefs: [
            { orderable: false, targets: 1 },
            { orderable: false, targets: 2 },
            { orderable: false, targets: 4 },
            { orderable: false, targets: 5 },
            { orderable: false, targets: 6 },
        ],
        "language": {
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "decimal":        "",
            "emptyTable":     "No hay datos",
            "infoEmpty":      "Showing 0 to 0 of 0 registros",
            "infoFiltered":   "(filtrado de _MAX_ total registros)",
            "infoPostFix":    "",
            "thousands":      ",",
            "lengthMenu":     "Mostrando _MENU_  registros",
            "loadingRecords": "Cargando...",
            "processing":     "Procesando...",
            "search":         "Buscar:",
            "zeroRecords":    "No se encontro ningun dato",
            "paginate": {
                "first":      "Primero",
                "last":       "Ultimo",
                "next":       "Siguiente",
                "previous":   "Anterior"
            },
        },
    } );

} );

 </script>


@stop
