<section id="seccion_casas_terrenos">

@foreach($propertycategories as $propertycategory)

   <!-- muestra de terrenos -->

  <div class="titulo_presentacion_producto" id="{{ $propertycategory->name }}">
    {{ $propertycategory->name }}
  </div>
  <div class="img_presentacion_producto" id="encontrar_terrenos">
    <img src="{{ $propertycategory->get_image }}" alt="" width="100%" height="auto">
  </div>

  <div class="presentacion_producto" >
    <div class="texto_presentacion_producto">
    {!! $propertycategory->description !!}
  </div>
    <div class="caja_boton_ver_productos">
      <a href="{{ route('inmuebles') }}" class="boton_ver_productos">
        Ver más inmuebles en venta
      </a>
    </div>
  </div>



  <div class="caja_muestra_producto">

    @php $num = 0; @endphp

    @foreach($propertycategory->properties as $property)

      @include('components.property-card', compact('property'))
        @php $num++; @endphp

        @break(@$num == 6)
    @endforeach
  </div>



@endforeach


</section>
