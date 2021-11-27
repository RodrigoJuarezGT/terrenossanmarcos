@extends('layouts.app')

@section('content')

<section class="seccion_conocenos">

    <div class="imagen_conocenos">
        <img src="{{ asset('img/logoterrenossanmarcos2.jpg') }}" alt="" width="100%" height="auto">
    </div>

    <div class="caja_texto_conocenos">
        <div class="texto_conocenos">
            Somos una empresa responsable, dedicada y apasionada a cumplir las metas y sueños de nuestros clientes de poder
            adquirir un lote de terreno oh vivienda, brindandoles soporte, asesoramiento y sobre todo
            <strong style="color: var(--primario)">TRANQUILIDAD AL INVERTIR</strong>
        </div>
    </div>

    <div class="caja_servicios_conocenos">
        <div class="titulo_servicio">
            <i class="fab fa-font-awesome-flag" style="font-size: 25px; margin-right: 8px;"></i> Metodos de Financiamiento
        </div>
        <div class="texto_servicio">
            Trabajamos metodos de financiamiento por medio de pagos a plazos o por cuotas sin intereses o por medio del banco de su elección.
        </div>
    </div>

    <div class="caja_servicios_conocenos">
        <div class="titulo_servicio">
            <i class="fab fa-font-awesome-flag" style="font-size: 25px; margin-right: 8px;"></i> Escritura Registrada
        </div>
        <div class="texto_servicio">
            Todos los terrenos y casas se otorgan inmediatamente con escritura registrada.
        </div>
    </div>

    <div class="caja_servicios_conocenos">
        <div class="titulo_servicio">
            <i class="fab fa-font-awesome-flag" style="font-size: 25px; margin-right: 8px;"></i> Servicios
        </div>
        <div class="texto_servicio">
            Todos los terrenos y casas cuentan con instalacion de candela de drenage y de agua
        </div>
    </div>

    <div class="caja_servicios_conocenos">
        <div class="titulo_servicio">
            <i class="fab fa-font-awesome-flag" style="font-size: 25px; margin-right: 8px;"></i> Tramites Municipales
        </div>
        <div class="texto_servicio">
            Todos los terrenos y casas cuentan con los derechos de servicios pagados.
        </div>
    </div>

</section>




@endsection

