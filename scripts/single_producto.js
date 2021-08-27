document.querySelector("#boton_compartir_inmueble").onclick = () =>{
    navigator.clipboard.writeText("Mira este Inmueble de TerrenosSanMarcos " + window.location.href);
  }
  
  