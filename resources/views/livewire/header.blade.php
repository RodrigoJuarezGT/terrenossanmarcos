
<div class="header_sticky" id="sticky_header">
    <div>
      <a href="/"><img src="{{ asset('img/logoterrenosSanMarcos1.png') }}" alt="logo terrenos san marcos" width="20%" height="auto" style="margin-left: 20px;"></a>
    </div>
    <div style="display: flex; align-self: center;">

      @include('components.navigation')

      <a href="https://api.whatsapp.com/send?phone=502{{ $company[0]->whatsapp }} " target="_blank" class="boton_header_whats">
          Contactar <i class="fab fa-whatsapp" style="margin-left: 5px; font-size:20px;"></i>
      </a>

    </div>
  </div>

  <header >
  <div id="logoynavegacion">
    <div  id="seccion_logo">
      <div id="boton_menu">
        <i class="fas fa-bars" id="icono_boton_menu"></i>
      </div>
      <a href="/"><img src="{{ asset('img/logoterrenosSanMarcos1.png') }}" alt="logo terrenos san marcos" width="100%" height="auto"></a>
    </div>
    <div  id="seccion_navegacion">
      <div id="redesytelefono">
        <ul>
          <li style="color: white"> Atencion al cliente {{ $company[0]->telephone }} <i class="fas fa-phone" style="font-size: 20px;"></i> </li>
          <li>
              <a href="https://api.whatsapp.com/send?phone=502{{ $company[0]->whatsapp }} " target="_blank" class="boton_header_whats">
                Contactar <i class="fab fa-whatsapp" style="margin-left: 5px"></i>
              </a>
          </li>
        </ul>
      </div>

      @include('components.navigation')

    </div>
  </div>
  <div id="redestelefono_tablet">
    <ul>
      <li> <a href="tel:+50253586774"><i class="fas fa-phone"></i></a></li>
      <li> <a href="https://api.whatsapp.com/send?phone=50253586774"><i class="fab fa-whatsapp" style="font-size: 45px;"></i></a> </li>
    </ul>
  </div>
  </header>




  <script src="{{ asset('js/header.js') }}" defer></script>
