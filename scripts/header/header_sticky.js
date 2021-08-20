//script header sticky

var rootElement = document.documentElement
var aux_header = true

function handleScroll() 
{
  // Do something on scroll
  var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight
  
  if ((rootElement.scrollTop / scrollTotal ) > 0.23 ) 
  {
    if ((rootElement.scrollTop / scrollTotal ) > 0.95 ) 
    {
  
      document.getElementById("sticky_header").classList.remove("mostrar_stycky_header");
      document.getElementById("sticky_header").classList.add("esconder_stycky_header");
    }else{
    // Mostrar el boton
	  document.getElementById("sticky_header").classList.remove("esconder_stycky_header");
    document.getElementById("sticky_header").classList.add("mostrar_stycky_header");
    aux_header = false
    }

  } else {
    // Ocultar boton
    if(aux_header == false){
      document.getElementById("sticky_header").classList.remove("mostrar_stycky_header");
      document.getElementById("sticky_header").classList.add("esconder_stycky_header");
    }
  }


	
}

document.addEventListener("scroll", handleScroll)