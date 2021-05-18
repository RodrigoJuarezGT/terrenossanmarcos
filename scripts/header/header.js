var boton_menu = document.getElementById("icono_boton_menu")
var seccion_navegacion = document.getElementById("seccion_navegacion")
var flag_boton_menu = false;

boton_menu.onclick = function(){
  
  if(flag_boton_menu){
    seccion_navegacion.classList.remove("clase_animacion_header_desplegar")
    seccion_navegacion.classList.add("clase_animacion_header_ocultar")
    boton_menu.classList.add("fa-bars")
    boton_menu.classList.remove("fa-times")
    flag_boton_menu = false
  }
  else{
    seccion_navegacion.classList.remove("clase_animacion_header_ocultar")
    seccion_navegacion.classList.add("clase_animacion_header_desplegar")
    boton_menu.classList.remove("fa-bars")
    boton_menu.classList.add("fa-times")
    flag_boton_menu = true
  }
  
}