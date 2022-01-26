@extends('layouts.app')

@section('content')


<section id="seccion_imgs_single_product">

    <div id="titulo_direccion">
      <div>
        <h2>{{ $property->tittle }}</h2>
      <p>{{ $property->address }}</p>
      </div>
      <div class="enventa">
        <div>
          <i class="far fa-check-circle"></i> En venta | Servicios Garantizados | desde <span style="color: var(--primario);">Q{{ $property->price }}</span>
        </div>
      </div>
    </div>

    <div id="caja_imgs_slider">
      <div class="caja_slider">

        <div class="wrapper">
            <div class="container">
                <div class="slider">

                    @for($i = 1; $i <= 8; $i++)

                        @continue(!$property->ShowImage($i))
                        <div class="slide">
                            <img src="{{ $property->ShowImage($i) }}" alt="imagen" width="100%" height="auto">
                        </div>
                    @endfor
                    @if($property->get_video)
                        <div class="slide">
                            <video
                            width="100%"
                            controls
                            style="max-height: 300px;"
                            >
                                <source src="{{ $property->get_video }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @endif
                </div>
            </div>
        </div>

      </div>
      <div class="caja_galeria">


        @for($i = 5; $i <= 8; $i++)

        @continue(!$property->ShowImage($i))

            <div class="img_galeria">
                <img src="{{ $property->ShowImage($i) }}" alt="" width="100%" height="auto">
            </div>

        @endfor

      </div>
    </div>

  </section>




  <!-- SECCION INFORMACION Y CONTACTO -->


  <section id="seccion_info_contacto">
    <div class="caja_info_single_product">
      <div class="breadcrumbs">

        <ul class="breadcrumbs">
          <li> <a href="{{ route('inicio') }}"> <i class="fas fa-home" style="font-size: 15px;"></i> Inicio</a> </li>
          <li> <a href="{{ route('inmuebles') }}">Inmuebles</a> </li>
          <li>{{ $property->tittle }}</li>
        </ul>

      </div>

      <div class="simple_icons_info">
        @if($property->dimensions)
            <div>
                <i class="fas fa-ruler-combined"></i> {{ $property->dimensions }}
            </div>
        @endif
        @if($property->street)
            <div>
                <i class="fas fa-road"></i> {{ $property->street }}
            </div>
        @endif
        @if($property->bottom)
            <div>
                <i class="fas fa-arrows-alt-v"></i> {{ $property->bottom }}
            </div>
        @endif
        @if($property->floors)
            <div>
                <i class="fas fa-building"></i> {{ $property->floors }}
            </div>
        @endif
      </div>

      <div class="detalles">
        <div class="iconos_detalles">
          <p> <i class="fas fa-home"></i> Listo para construir o mudar </p>
          <p> <i class="fas fa-scroll"></i> Escritura registrada </p>
          <p> <i class="fas fa-hand-holding-water"></i> Derecho a servicios pagados </p>
        </div>
        <div class="detalles_metodos_finan">
          Puedes enganchar este inmueble con la cantidad que desees el proceso de compra es por medio de pagos
          a plazos o por medio del banco de tu confianza.
          <div>Los derechos a servicios estan 100% garantizados</div>
        </div>
      </div>

      @if($property->rooms)
        <div class="caracteristicas">
            <h3><strong>Habitaciones</strong></h3>
            {!! $property->rooms !!}
        </div>
      @endif
      <div class="caracteristicas">
        <h3><strong>Descripcion</strong></h3>
        {!! $property->description !!}
      </div>


      <div class="ubicacion">
        <h3>Ubicación</h3>
        <p>{{ $property->address }}</p>
        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q={{ $property->coordinates }}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-org.net"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net">embed custom google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
        <div class="botones_ubicacion">
          <a href="{{ $property->map_route_link }}" target="_blank"> <i class="fas fa-car"></i> ¿Como llegar desde el parque central municipal? </a>
        </div>
      </div>

    </div>

    <div class="caja_capsula_contacto">
      <div class="capsula_contacto">

        <div class="precio_compartir">
          <div>
            Desde <br>
            <span>Q {{ $property->price }}</span>
          </div>
          <div class="iconos_compartir">
            <div onclick="alert('Enlace Copiado')">
              <i class="far fa-share-square" id="boton_compartir_inmueble" title="Copiar Link" "></i>
            </div>
          </div>
        </div>

        <div class="metodos_contacto">
          <h4>Conctacta y recibe asesoramiento</h4>
          <a href="{{ $company[0]->get_whatsapp }}" target="_blank">
            <i class="fab fa-whatsapp"></i> Contactar por WhatsApp
          </a>
          @if($property->facebook_link)
            <a href="{{ $property->facebook_link }}" target="_blank">
                <i class="fab fa-facebook"></i> Contactar por Facebook
            </a>
          @endif
        </div>

        <div class="contacto_llamada">
          <h5>Atencion al cliente 24/7</h5>
          <a href="tel:+502{{ $company[0]->telephone }}">
            <i class="fas fa-phone"></i> {{ $company[0]->telephone }}
          </a>
        </div>

      </div>
    </div>



  </section>



  {{-- similars --}}

    <section class="section_similars">

    @include('components.similars', [  'similars' => $property->similars() ])

    </section>






  <script>
    document.querySelector("#boton_compartir_inmueble").onclick = () =>{
        navigator.clipboard.writeText("Mira este Inmueble de TerrenosSanMarcos " + window.location.href);
    }
  </script>

  <script>


    EventTarget.prototype.slider = function(params = {
        slidesToShow: 1,
        controlButtons: true,
        transition: 0.5
    }) {
        variablesAuto(params);
        parentElements(this);
        sliderClones(this, params);
        variables(this, params);
        sliderClones(this, params);
        firstSettings(this, params);
        childSettings(this, params);
        sliderSettings(this);
        controlButtons(this, params);
        currentSlide(this, params);
        resizeSettings(this, params);
        dragSlider(this, params);
    }

    function variablesAuto(params) {
        if (!params.transition) params.transition = 0.5;
        if (!params.slidesToShow) params.slidesToShow = 1;
    }

    function variables(slider, params) {
        slider.step = -params.slidesToShow;
        slider.childrenLength = slider.children.length;
        slider.removeEventListener("transitionstart", slider.scrollFalse);
        slider.startChecker = true;
        slider.scrollFalse = function() {
            slider.startChecker = false;
        }
    }

    function parentElements(slider) {
        if (document.querySelector(".slider-container") && document.querySelector(".slider-list")) return;
        let slider_container = document.createElement("div");
        slider_container.classList = "slider-container";
        let slider_list = document.createElement("div");
        slider_list.classList = "slider-list";
        slider.parentElement.prepend(slider_container, slider_list);
        slider_container.append(slider_list);
        slider_list.append(slider);
    }

    function childSettings(slider, params) {
        for (let slider_child of slider.children) {
            slider_child.style.flex = "0 " + "0 " + slider.parentElement.clientWidth / params.slidesToShow + "px";
            slider_child.classList.add("slider-child");
        }
    }

    function sliderSettings(slider) {
        slider.classList.add("drag-slider-list");
        slider.style.width = slider.children[0].clientWidth * slider.childrenLength + "px";
    }

    function controlButtons(slider, params) {
        if (document.querySelector(".slider-prev-button") && document.querySelector(".slider-next-button")) {
            slider.parentElement.parentElement.removeChild(slider.nextButton);
            slider.parentElement.parentElement.removeChild(slider.prevButton);
        }
        if (!params.controlButtons) return;
        slider.prevButton = document.createElement("div");
        slider.prevButton.classList = "slider-prev-button";
        slider.nextButton = document.createElement("div");
        slider.nextButton.classList = "slider-next-button";
        slider.parentElement.parentElement.prepend(slider.prevButton, slider.nextButton);
    }

    function currentSlide(slider, params) {
        if (slider.nextButton && slider.prevButton) {
            slider.nextButton.onclick = () => {};
            slider.prevButton.onclick = () => {};
        }
        if (!params.controlButtons) return;
        slider.nextButton.onclick = () => {
            if (!slider.startChecker) return;
            transition(slider, params.transition);
            slider.step--;
            slider.style.transform = "translate3d(" + (slider.parentElement.clientWidth / params.slidesToShow * slider.step) + "px," + " 0," + " 0)";
            slider.startChecker=false;
            infinitySlider(slider, params);
        };
        slider.prevButton.onclick = () => {
            if (!slider.startChecker) return;
            transition(slider, params.transition);
            slider.step++;
            slider.style.transform = "translate3d(" + (slider.parentElement.clientWidth / params.slidesToShow * slider.step) + "px," + " 0," + " 0)";
            slider.startChecker=false;
            infinitySlider(slider, params);
        };
    }

    function sliderClones(slider, params) {
        if (document.querySelectorAll(".slider-child-clone")) {
            for (let clone of document.querySelectorAll(".slider-child-clone")) {
                slider.removeChild(clone);
            }
        }
        let start = [];
        let end = [];
        for (let slide_to_clone = 0; slide_to_clone < params.slidesToShow; slide_to_clone++) {
            let slider_child_Clone = slider.children[slide_to_clone].cloneNode(true);
            slider_child_Clone.classList.add("slider-child-clone");
            start.push(slider_child_Clone);
        }
        for (let slide_to_clone = slider.children.length - 1; slide_to_clone > slider.children.length - params.slidesToShow - 1; slide_to_clone--) {
            let slider_child_Clone = slider.children[slide_to_clone].cloneNode(true);
            slider_child_Clone.classList.add("slider-child-clone");
            end.unshift(slider_child_Clone);
        }
        slider.append(...start);
        slider.prepend(...end);
    }

    function firstSettings(slider, params) {
        transition(slider, 0);
        slider.style.transform = "translate3d(" + (slider.parentElement.clientWidth / params.slidesToShow * slider.step) + "px," + " 0," + " 0)";
    }

    function infinitySlider(slider, params) {
        let timer = setTimeout(function() {
            if (-slider.step == slider.childrenLength - params.slidesToShow) {
                transition(slider, 0);
                slider.step = -params.slidesToShow;
                slider.style.transform = "translate3d(" + (slider.parentElement.clientWidth / params.slidesToShow * slider.step) + "px," + " 0," + " 0)";
            } else if (slider.step == 0) {
                transition(slider, 0);
                slider.step = -slider.childrenLength + params.slidesToShow * 2;
                slider.style.transform = "translate3d(" + (slider.parentElement.clientWidth / params.slidesToShow * slider.step) + "px," + " 0," + " 0)";
            }
            slider.startChecker=true;
        }, params.transition * 1000);
    }

    function transition(slider, number) {
        slider.style.transition = number + "s";
    }

    function resizeSettings(slider, params) {
        window.onresize = () => {
            transition(slider, 0);
            for (let slider_child of slider.children) {
                slider_child.style.flex = "0 " + "0 " + slider.parentElement.clientWidth / params.slidesToShow + "px";
            }
            slider.style.width = slider.children[0].clientWidth * slider.childrenLength + "px";
            slider.style.transform = "translate3d(" + (slider.parentElement.clientWidth / params.slidesToShow * slider.step) + "px," + " 0," + " 0)";
        };
    }

    function dragSlider(slider, params) {
        let touchstart = 0;
        let touchend = 0;
        let wasStarted=false;
        function dragStart() {
            if (!slider.startChecker) return;
            wasStarted=true;
            touchstart = event.clientX || event.changedTouches[0].clientX;
            slider.style.cursor = "grab";
            slider.onmousemove = () => dragOn();
            slider.addEventListener("touchmove", dragOn);
        }

        function dragOn() {
            if (!slider.startChecker) return;
            slider.onmouseout = () => dragEnd();
            transition(slider, 0);
            touchend = event.clientX || event.changedTouches[0].clientX;
            slider.style.transform = `translate3d(${slider.parentElement.clientWidth / params.slidesToShow * slider.step - touchstart + touchend}px, 0, 0)`;
        }

        function dragEnd() {
            if (!slider.startChecker || !wasStarted) return;
            touchend = event.clientX || event.changedTouches[0].clientX;
            slider.style.cursor = "pointer";
            slider.onmousemove = () => {};
            slider.onmouseout = () => {};
            slider.removeEventListener("touchmove", () => {});
            if (touchstart > touchend + slider.children[0].clientWidth / 4) {
                transition(slider, params.transition);
                slider.step--;
                slider.style.transform = "translate3d(" + (slider.parentElement.clientWidth / params.slidesToShow * slider.step) + "px," + " 0," + " 0)";
                slider.startChecker=false;
                infinitySlider(slider, params);
            } else if (touchstart + slider.children[0].clientWidth / 4 < touchend) {
                transition(slider, params.transition);
                slider.step++;
                slider.style.transform = "translate3d(" + (slider.parentElement.clientWidth / params.slidesToShow * slider.step) + "px," + " 0," + " 0)";
                slider.startChecker=false;
                infinitySlider(slider, params);
            }
            else {
                transition(slider, params.transition);
                slider.style.transform = "translate3d(" + (slider.parentElement.clientWidth / params.slidesToShow * slider.step) + "px," + " 0," + " 0)";
            }
            slider.removeEventListener("touchmove", dragOn);
            wasStarted=false;
        }
        slider.onmousedown = (event) => dragStart();
        slider.onmouseup = (event) => dragEnd();
        slider.ontouchstart = (event) => dragStart();
        slider.ontouchend = (event) => dragEnd();
    }


    let slider = document.querySelector(".slider");
    slider.slider({
        slidesToShow: 1,
        controlButtons: true,
        transition: 0.5,
    });

  </script>

@endsection

