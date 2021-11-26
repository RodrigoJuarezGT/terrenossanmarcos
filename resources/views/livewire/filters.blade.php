<form action="{{ route('inmuebles') }}" >
    <section class="filtros_productos">
        <div class="icono_filtros">
            <i class="fas fa-filter"></i>
        </div>
        <div class="caja_buscador">
            <div class="icono_buscar">
            <i class="fas fa-search-location"></i>
            </div>
            <div class="buscador">
            <span>Tipo</span>
            <select name="tipo" id="select_municipio">

                @if($tipo)
                    <option value="{{ $tipo[0]->id }}">{{ $tipo[0]->name }}</option>
                @endif

                <option value="">Todos</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                @endforeach

            </select>
            </div>
        </div>
        <div class="caja_filtro_presupuesto">
            <div>
            <span>Presupuesto: </span>
            </div>
            <input type="number" name="presupuesto" id="input_presupuesto" value="{{ old('presupuesto', $presupuesto) }}">
        </div>
        <input type="submit" value="filtrar">
    </section>
</form>

