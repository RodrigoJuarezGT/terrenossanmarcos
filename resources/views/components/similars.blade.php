<section id="seccion_casas_terrenos">


      <div class="presentacion_producto" >
        <div class="texto_presentacion_producto">
        Tambien te puede interesar
        </div>
        <div class="caja_boton_ver_productos">
          <a href="{{ route('inmuebles') }}" class="boton_ver_productos">
            Ver más inmuebles en venta
          </a>
        </div>
      </div>


      <div class="caja_muestra_producto">

        @foreach($similars as $property)

          @include('components.property-card', compact('property'))

        @endforeach
        
      </div>



    </section>
