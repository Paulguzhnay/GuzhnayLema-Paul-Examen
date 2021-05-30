function validarCamposObligatorios(){
    var bandera = true
    for(var i = 0; i < document.forms[0].elements.length; i++){
        var elemento = document.forms[0].elements[i]
        if(elemento.value == '' && elemento.type == 'text' || elemento.value == '' && elemento.type == 'password'){
            if (elemento.id == "nlibro") {
                document.getElementById("mensajeNom").innerHTML ="<br>El Campo nombre libro esta vacío"
            }else{
                elemento.style.border = '2px red solid' 
                elemento.className = 'error' 
                bandera = false 
    
            }
            if(elemento.id == "ISBN"){
                document.getElementById("mensajeISBN").innerHTML = "<br>El Campo ISBN esta vacío" 
            }else{
                elemento.style.border = '2px red solid' 
                elemento.className = 'error' 
                bandera = false 
    
            }
            if(elemento.id == "numP"){
                document.getElementById("mensajeNP").innerHTML = "<br>El Campo numero de paginas esta vacío" 
            }else{
            elemento.style.border = '2px red solid' 
            elemento.className = 'error' 
            bandera = false 

            }   

            elemento.style.border = '2px red solid' 
            elemento.className = 'error' 
            bandera = false 
        } 
    }
    if(!bandera){ 
        alert('Error: Campos Obligatorios Vacíos')
    }else{
        alert("Bienvenido, pasaste las validaciones!")
    } 
    return bandera
}
/*---------------------------------------------------------------------------------------------------------*/ 
function validarCamposObligatorios2(){
    var bandera = true
    for(var i = 0; i < document.forms[0].elements.length; i++){
        var elemento = document.forms[0].elements[i]
        if(elemento.value == '' && elemento.type == 'text' || elemento.value == '' && elemento.type == 'password'){
            if (elemento.id == "numcapitulo") {
                document.getElementById("mensajeN").innerHTML ="<br>El numero de capitulo esta vacío"
            }else{
                elemento.style.border = '2px red solid' 
                elemento.className = 'error' 
                bandera = false 
    
            }
            if(elemento.id == "ncapitulo"){
                document.getElementById("mensajeNom").innerHTML = "<br>El nombre de capitulo esta vacío" 
            }else{
                elemento.style.border = '2px red solid' 
                elemento.className = 'error' 
                bandera = false 
                    
            }
 
            elemento.style.border = '2px red solid' 
            elemento.className = 'error' 
            bandera = false 
        } 
    }
    if(!bandera){ 
        alert('Error: Campos Obligatorios Vacíos')
    }else{
        alert("Bienvenido, pasaste las validaciones!")
    } 
    return bandera
}
/*---------------------------------------------------------------------------------------------------------*/ 

function validarISBN(elemento){
    var isbn=elemento.value;
    if(isbn.length>0){
        var miAscii = isbn.charCodeAt(isbn.length-1)
        if(miAscii>=48 && miAscii<=57){
            if(isbn.length==10){
                elemento.style.border = '2px red solid'
                document.getElementById("mensajeISBN").style.color = "blue";
                document.getElementById("mensajeISBN").innerHTML = "<br>ISBN correcto"
    
            }else if ((isbn.length>11)){
                elemento.value = elemento.value.substring(0, elemento.value.length-1)
                document.getElementById("mensajeISBN").style.color = "yellow";
                document.getElementById("mensajeISBN").innerHTML = "<br>ISBN requerido de 10 digitos"    
            }else{
               // elemento.value = elemento.value.substring(0, elemento.value.length-1)
                document.getElementById("mensajeISBN").style.color = "yellow";
                document.getElementById("mensajeISBN").innerHTML = "<br>ISBN de 10 digitos"    
                
            }
        }else{
            elemento.value = elemento.value.substring(0, elemento.value.length-1)
            elemento.style.border = '2px red solid'
            document.getElementById("mensajeISBN").style.color = "yellow";
            document.getElementById("mensajeISBN").innerHTML = "<br>Solo acepta numeros"

        }
        
    }
}
/*-------------------------------------------------------------------------------------------------------------- */
function validarHojas(elemento){
    var nPag=elemento.value;
    if (nPag.length>0){
        var miAscii = nPag.charCodeAt(nPag.length-1)
        if(miAscii>=48 && miAscii<=57){
            elemento.style.border = '2px red solid'
            document.getElementById("mensajeH").style.color = "yellow";
            document.getElementById("mensajeH").innerHTML = "<br>numero de paginas correcto"

        }else{
            elemento.value = elemento.value.substring(0, elemento.value.length-1)
            elemento.style.border = '2px red solid'
            document.getElementById("mensajeH").style.color = "yellow";
            document.getElementById("mensajeH").innerHTML = "<br>Solo acepta numeros"

        }
    }

}

/*--------------------------------------------------------------------------------------------------*/
function validarNumCap(elemento){
    var nC=elemento.value;
    if (nC.length>0){
        var miAscii = nC.charCodeAt(nC.length-1)
        if(miAscii>=48 && miAscii<=57){
            elemento.style.border = '2px red solid'
            document.getElementById("mensajeN").style.color = "yellow";
            document.getElementById("mensajeN").innerHTML = "<br>numero de capitulo correcto"

        }else{
            elemento.value = elemento.value.substring(0, elemento.value.length-1)
            elemento.style.border = '2px red solid'
            document.getElementById("mensajeN").style.color = "yellow";
            document.getElementById("mensajeN").innerHTML = "<br>Solo acepta numeros"

        }
    }

}

     
