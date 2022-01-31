@extends('layouts.app')

@section('content')


<!-- BANER PRINCIPAL -->
<section
        id="baner_principal"
        style="
            background-image: url(' {{ $company[0]->get_image}} ');
        "
    >
    <div id="caja_contenido_baner_principal">
        <div id="caja_textos_baner_principal">
          <div id="caja_texto_invierte_baner_principal">
            INVIERTE
          </div>
          <div id="caja_slider_texto_baner_principal" class="tarejta_baner_principal">
            en tu futuro
          </div>
        </div>
        <div id="caja_tarjetas_baner_principal">
          <a href="#Casas" class="tarejta_baner_principal">
            <div class="logo_tarjeta">
              <img src="{{ asset('icons/casa.svg') }}" alt="">
            </div>
            <hr>
            <div class="texto_tarjeta">
              <div>Encontrar </div>
              <div style="color: var(--primario);">Casas</div>
            </div>
          </a>
          <a href="#Terrenos" class="tarejta_baner_principal">
            <div class="logo_tarjeta">
              <img src="{{ asset('icons/mapa.svg') }}" alt="">
            </div>
            <hr>
            <div class="texto_tarjeta">
              <div>Encontrar </div>
              <div style="color: var(--primario);">Terrenos</div>
            </div>
          </a>
        </div>
    </div>
  </section>



  <script src="{{ asset('js/baner_principal.js') }}" defer></script>





  <section id="seccion_informacion">

  <div class="contenedor_waves">

    <div class="titulo_footer">
      <div class="video_empresa">
            <video controls="allowed" src="{{ $company[0]->get_video }}" width="auto" height="400px" ></video>
      </div>
      <div id="caja_mapa_texto">
        <img src="{{ asset('img/casa_abstracta1.jpg') }}" alt="tigre" width="50%" id="logo_leon_circulo">
        <div id="caja_textos_iconosanimados">
          <div id="texto_mapa">
            En <span>TERRENOS SAN MARCOS</span> somos una empresa confiable, expertos en soluciones inmobiliarias,
            facilitando a nuestros clientes el proceso de invertir o construir su nuevo hogar
            o comercio en el departamento de San Marcos.
            <a href="{{ route('conocenos') }}"> Conocenos más ></a>
          </div>

          @livewire('properties-sold')

        </div>
      </div>

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





  <div id="cajas_info">
    <div class="div_caja_info">
      <a href="#scrol_footer" class="caja_info">
        <div class="titulo_caja_info">
          Metodos de Financiamiento
          <div class="caja_icono_info">
            <img src="icons/money.svg" alt="">
          </div>
        </div>
        <div class="texto_caja_info">
          <div>Trabajamos metodos de financiamiento por medio de pagos a plazos o por cuotas sin intereses o por medio del banco de su elección.  </div>
          <div class="caja_boton_saber_mas_cajas_info">
            <div class="boton_saber_mas_cajas_info">
              Contactanos
            </div>
          </div>
        </div>
      </a>
      <a href="#scrol_footer" class="caja_info">
        <div class="titulo_caja_info">
          Escritura Registrada
          <div class="caja_icono_info">
            <img src=" {{ asset('icons/escritura.svg') }} " alt="">
          </div>
        </div>
        <div class="texto_caja_info">
          <div>Todos los terrenos y casas se otorgan con escritura registrada. <br><br> <strong style="color: var(--amarillo2); font-size: 15px">Tu contratas al abogado de tu confianza.</strong></div>
          <div class="caja_boton_saber_mas_cajas_info">
            <div class="boton_saber_mas_cajas_info">
              Contactanos
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="div_caja_info">
      <a href="#scrol_footer" class="caja_info">
        <div class="titulo_caja_info">
          Servicios
          <div class="caja_icono_info ">
            <img src="{{ asset('icons/focet.svg') }}" alt="">
          </div>
        </div>
        <div class="texto_caja_info">
          <div>Todos los terrenos y casas cuentan con instalacion de candela de drenage y de agua</div>
          <div class="caja_boton_saber_mas_cajas_info">
            <div class="boton_saber_mas_cajas_info">
              Contactanos
            </div>
          </div>
        </div>
      </a>
      <a href="#scrol_footer" class="caja_info">
        <div class="titulo_caja_info">
          Tramites Municipales
          <div class="caja_icono_info">
            <img src="{{ asset('icons/check.svg') }}" alt="" style="width: 45px;">
          </div>
        </div>
        <div class="texto_caja_info">
          <div>Todos los terrenos y casas cuentan con los derechos de servicios pagados.</div>
          <div class="caja_boton_saber_mas_cajas_info">
            <div class="boton_saber_mas_cajas_info">
              Contactanos
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
  </section>



 @livewire('last-properties')

 @livewire('reviews')

@endsection
