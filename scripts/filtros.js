var presupuetso = document.querySelector("#input_presupuesto"),
	fichas = document.getElementsByClassName("ficha_producto"),
    precio_ficha = undefined,
    msj_presupuesto_insuficiente = document.querySelector("#presupuesto_insuficiente"),
    select_municipio = document.querySelector("#select_municipio"),
    municipio_ficha = undefined



//script para presupuesto

presupuetso.value = 0

presupuetso.oninput = function(){
  
  document.getElementById('span_presupuesto').innerHTML = this.value+',000'
  
  	//mostrar inmuebles segun el input
  	mostar_segun_filtro(this.value, select_municipio.value)
  	
  
}

function mostar_segun_filtro(precio_ingresado,municipio_ingresado){
    esconder_fichas()
    msj_presupuesto_insuficiente.style.display = "block"
    msj_presupuesto_insuficiente.classList.add("clase_animacion_filtros_fichas")
    for (let i = 0; i < fichas.length; i++) {
        precio_ficha = fichas[i].querySelector("span").innerHTML
        municipio_ficha = fichas[i].querySelector(".caracteristicas_ficha_producto").innerHTML
        if(municipio_ingresado == "Todos"){
            if(precio_ingresado == 0){
                mostrar_fichas()
                msj_presupuesto_insuficiente.style.display = "none"
                document.getElementById('span_presupuesto').innerHTML = "-"
                break
            }else{
                if(Number(precio_ficha) <= precio_ingresado){
                    msj_presupuesto_insuficiente.style.display = "none"
                    fichas[i].style.display = "block"
                    fichas[i].classList.add("clase_animacion_filtros_fichas")
                }
            }

        }else if(precio_ingresado == 0){
            if(municipio_ficha.includes(municipio_ingresado)){
                document.getElementById('span_presupuesto').innerHTML = "-"
                msj_presupuesto_insuficiente.style.display = "none"
                fichas[i].style.display = "block"
                fichas[i].classList.add("clase_animacion_filtros_fichas")
            }
        }else if((Number(precio_ficha) <= precio_ingresado)&&(municipio_ficha.includes(municipio_ingresado))){
                msj_presupuesto_insuficiente.style.display = "none"
                fichas[i].style.display = "block"
                fichas[i].classList.add("clase_animacion_filtros_fichas")
            
        }
    }
}


function esconder_fichas(){
	for (let i = 0; i < fichas.length; i++) {
        fichas[i].style.display = "none"
	} 
}




//fin script para presupuesto

//script para municipio

select_municipio.onchange = function(){
  mostar_segun_filtro(presupuetso.value,this.value)
}

function mostrar_fichas(){
	 for (let i = 0; i < fichas.length; i++) {
  	    fichas[i].style.display = "block"
        fichas[i].classList.remove("clase_animacion_filtros_fichas")
	} 
    document.getElementById("seccion_casas_terrenos").classList.add("clase_animacion_filtros_fichas")
    setTimeout(function(){
        document.getElementById("seccion_casas_terrenos").classList.remove("clase_animacion_filtros_fichas")
    },500);
}

//fin script para municipio








































