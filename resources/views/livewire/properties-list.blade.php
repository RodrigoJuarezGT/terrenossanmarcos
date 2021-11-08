<div class="caja_muestra_producto">

@foreach($properties as $property)

@include('components.property-card', compact('property'))

@endforeach

</div>

<div class="mt-4">
    {{ $properties->links('pagination::bootstrap-4') }}
</div>


