var texto = document.getElementById("caja_slider_texto_baner_principal")
var array_textos = ["en tu futuro",
                   	"en tu familia",
                   	"con tranquilidad",
                   	"con nosotros"];
var i = 0;


function cambiar_texto(){
  texto.classList.remove("clase_animacion_texto_cambiante")
  setTimeout(() => {
    texto.innerHTML = array_textos[i++]
    texto.classList.add("clase_animacion_texto_cambiante")
}, 300);
  
  if(i == 4){i=0};
  setTimeout(cambiar_texto, 5000)
}

cambiar_texto()