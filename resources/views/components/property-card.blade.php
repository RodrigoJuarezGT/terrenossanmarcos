<a href="{{ route('property.show', $property) }}" class="ficha_producto">
    <div class="precio_ficha_producto">
      Precio: Q {{ $property->price }}
    </div>
    <div class="img_ficha_producto">
      <img src="{{ $property->get_image }}" alt="">
    </div>
    <div class="info_ficha_producto">
      <div class="titulo_ficha_producto">
        {{ $property->tittle }}
      </div>
      <div class="caracteristicas_ficha_producto">
        {{ $property->dimensions }} <br>
        {{ $property->street }} <br>
        {{ $property->address }} <br>
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