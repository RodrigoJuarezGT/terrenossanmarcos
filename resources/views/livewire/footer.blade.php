
<footer style="margin-top: 40px;">


    <div class="contenedor_waves">

      <div class="titulo_footer" id="scrol_footer">
        <h2>{{ $company[0]->slogan }}</h2>
        <p>{!! $company[0]->slogan_text !!}</p>
      </div>
      <hr style="width: 20%;">
      <div class="caja_contacto_footer">
        <div style="font-size: 19px; margin-top: 30px;">Contactanos</div>
        <div class="iconos_metodos_contacto_footer">
          <div class="icono_contacto">
            <a href="https://api.whatsapp.com/send?phone=502{{ $company[0]->whatsapp }}" target="_blank"><i class="fab fa-whatsapp"></i></a>
          </div>
          <div class="icono_contacto">
            <a href="{{ $company[0]->messenger }}" target="_blank"><i class="fab fa-facebook"></i></a>
          </div>
          <div class="icono_contacto">
            <a href="tel:+502{{ $company[0]->telephone }}"><i class="fas fa-phone"></i></a>
          </div>
        </div>
      </div>
      <div style="margin: 50px 0 0 0; display: flex; justify-content: center;">
        <div style="align-self: center;">Echo con <i class="fas fa-heart" style="color: var(--amarillo2)"></i> en San Marcos, Guatemala.</div>
        <div><img src="{{ asset('img/mapa-mudo-de-guatemala-sanmarcos.jpg') }}" alt="" width="120px" height="auto"></div>
      </div>

      <div>
        <svg class="waves" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="parallax">
          <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
          <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
          <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
          <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
          </g>
        </svg>
      </div>

    </div>

    <div class="derechos">
      <div>
        terrenossanmarcos.com <i class="fa fa-copyright" aria-hidden="true"></i>  {{ now()->year }} Todos los derechos reservados.
      </div>
      <div style="margin-top: 15px">
        Desarrollado por <a href="https://github.com/RodrigoJuarezGT" target="_blank"><strong>RODRIGO JUAREZ <i class="fab fa-github"></i></strong></a>
      </div>
    </div>
      <!--Content ends-->

    </footer>
