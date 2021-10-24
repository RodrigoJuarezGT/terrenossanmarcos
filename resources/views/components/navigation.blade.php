

<nav class="links_navegacion">
    <ul>
      <li class=" {{ (request()->is('/')) ? 'link_actual' : '' }}" ><a href="/">Inicio</a></li>
      <li class=" {{ (request()->is('inmuebles')) ? 'link_actual' : '' }}"  ><a href="{{ route('inmuebles') }}">Inmuebeles</a></li>
      <li class=" {{ (request()->is('conocenos')) ? 'link_actual' : '' }}" ><a href=" {{ route('conocenos') }} ">Conocenos</a></li>
      <li><a href="#scrol_footer">Contactanos</a></li>
    </ul>
</nav>