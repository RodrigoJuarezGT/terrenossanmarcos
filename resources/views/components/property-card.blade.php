@if(@$property->active == 'on' )

    <a href="{{ route('property', [ 'property' => $property, 'slug' => $property->slug ]) }}" class="item ficha_producto">
        <div class="precio_ficha_producto">
        Desde: Q {{ $property->price }}
        </div>
        <div class="img_ficha_producto">
        <img src="{{ $property->get_image }}" alt="">
        </div>
        <div class="info_ficha_producto">
        <div class="titulo_ficha_producto">
            {{ substr($property->tittle, 0, 48) }}...
        </div>
        <div class="caracteristicas_ficha_producto">
            {{ $property->dimensions }} <br>
            {{ $property->street }} <br>
            {{ substr($property->address,0,60) }}... <br>
        </div>
        <div class="disponibilidad_ficha">
            <i class="fas fa-check"></i> Disponible
        </div>
        <div class="caja_boton_ficha_producto">
            <div class="boton_ficha_producto">
            ver mas
            </div>
        </div>
        </div>
    </a>

@endif
