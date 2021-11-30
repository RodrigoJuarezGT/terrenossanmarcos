@if( @sizeof($properties) != '0')

    <div class="caja_muestra_producto">

        @foreach($properties as $property)

        @include('components.property-card', compact('property'))

        @endforeach

    </div>

    <div class="mt-4 d-flex justify-content-center">
        <div>
            {{ $properties->links() }}
        </div>
    </div>

@else

    <div id="presupuesto_insuficiente">
        <div class="msj1_presupuesto_insuficiente">
        Por ahora no disponemos de un lote de terreno que se acomode a tu presupuesto
        </div>
        <div class="icono_presupuesto_insuficiente">
        <i class="fas fa-feather"></i>
        </div>
        <div class="msj2_presupuesto_insuficiente">
        puedes <a href="#scrol_footer">contactarnos</a> para saber mas de como adquirir un lote de terreno <br>
        o puedes ver como trabajamos nuestras <a href="#">Formas de Pago</a>
        </div>
    </div>

@endif


