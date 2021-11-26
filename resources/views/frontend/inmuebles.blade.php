@extends('layouts.app')

@section('content')


<section class="seccion_baner_principal_pagina_productos">
    <div class="caja_baner_principal_productos">
      <div class="caja_img_baner_productos">
        <img src="{{ asset('storage/img/foto_san_marcos.jpeg') }}" alt="" width="100%" height="auto">
      </div>
    </div>
</section>


  <!-- seccion filtros  -->

  @livewire('filters')


  <!-- seccion muestra terrenos -->
{{-- 
  <section id="seccion_casas_terrenos">

    <div id="presupuesto_insuficiente">
      <div class="msj1_presupuesto_insuficiente">
        Por ahora no disponemos de un lote de terreno que se acomode a tu presupuesto
      </div>
      <div class="icono_presupuesto_insuficiente">
        <i class="fas fa-feather"></i>
      </div>
      <div class="msj2_presupuesto_insuficiente">
        puedes <a href="#scrol_footer">contactarnos</a> para saber mas de como adquirir un lote de terreno <br>
        o puedes ver como trabajamos nuestros <a href="#">Metodos de Financiamiento</a>
      </div>
    </div> --}}


    {{-- lista de inmuebles --}}

    @livewire('properties-list')



  <!------------ SECCION INFO INMUEBLE -------------->

  <section id="seccion_info_inmueble">

   {{-- @livewire('information-property') --}}

  </section>


@endsection
