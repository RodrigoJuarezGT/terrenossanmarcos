@extends('layouts.app')

@section('content')


<section class="seccion_baner_principal_pagina_productos">
    <div class="caja_baner_principal_productos">
      <div class="img_presentacion_producto"
        style="

        background-image: url('{{ asset('img/terreno.png') }}');
        height: 300px;

        "
      >
        {{-- <img src="{{ asset('img/terreno.png') }}" alt="" width="100%" height="auto"> --}}
      </div>
    </div>
</section>


  <!-- seccion filtros  -->

  @livewire('filters')


  <!-- seccion muestra terrenos -->

  <section id="seccion_casas_terrenos">


    {{-- lista de inmuebles --}}

    @livewire('properties-list')



  <!------------ SECCION INFO INMUEBLE -------------->

  <section id="seccion_info_inmueble">

   {{-- @livewire('information-property') --}}

  </section>


@endsection
