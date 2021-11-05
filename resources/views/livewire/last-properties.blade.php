<section id="seccion_casas_terrenos">

@foreach($propertycategories as $propertycategory)

   <!-- muestra de terrenos -->
   <div id="Seccion_Terrenos" style="height: 60px;">
    
  </div>
  <div class="titulo_presentacion_producto">
    {{ $propertycategory->name }}
  </div>
  <div class="img_presentacion_producto" id="encontrar_terrenos">
    {{ $propertycategory->get_image }}
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
    @foreach($propertycategory->properties as $property)

      @include('components.property-card', compact('property'))

    @endforeach
  </div>

  

@endforeach


</section>