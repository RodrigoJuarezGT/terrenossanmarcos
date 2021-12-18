@extends('layouts.app')

@section('content')


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
