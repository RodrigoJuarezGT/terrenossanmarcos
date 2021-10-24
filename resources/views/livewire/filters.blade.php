<section class="filtros_productos">
    <div class="icono_filtros">
      <i class="fas fa-filter"></i>
    </div>
    <div class="caja_buscador">
      <div class="icono_buscar">
        <i class="fas fa-search-location"></i>
      </div>
      <div class="buscador">
        <span>Municipio</span>
        <select name="municipio" id="select_municipio">
          <option value="Todos">Todos</option>
          <option value="San Marcos">San Marcos</option>
          <option value="San Pedro">San Pedro</option>
        </select>
      </div>
    </div>
    <div class="caja_filtro_presupuesto">
      <div>
        <span>Presupuesto:</span> 
        <span class="caja_presupuesto" id="span_presupuesto">-</span> Q.
      </div>
      <input type="range" min="000000" max="500" name="presupuesto" id="input_presupuesto"> 
      
    </div>
</section>