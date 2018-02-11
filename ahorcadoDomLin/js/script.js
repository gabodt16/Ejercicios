var palabras = ["ahorcado", "enfermedad", "congelado", "galleta", "descubrir"];
var adivina = "";
var intentos = 5;
var num = 0;
var palabra0 = "";
var aux = "";
var utilizadas = "";
var flag = false;
var utilizadaFlag = true;
var cont = 5;
var numIntentos = document.getElementById("intentos");

/*  Funcion para hacer que el enter no envie el formulario  */
function mostrarPal1(e){
    var tecla = (document.all) ? e.keyCode :e.which; 
    return (tecla!=13);
}

/*  Funcion principal donde se encuentra todo el código  */

function mostrarPal(){

        var letraLoc = document.getElementById("letra").value;
        utilizadas = utilizadas + letraLoc + ", ";
        var letras = document.getElementById("letra").value="";
        var foco = document.getElementById("letra").focus();
        var LetrasUsadas = document.getElementById("utilizadas");
        LetrasUsadas.innerHTML=utilizadas;
    /*
        for (let i = 0; i < utilizadas.length; i++) {
            if (letraLoc == utilizadas.charAt(i)) {
                utilizadaFlag = true;
                alert ("hola");
            }else{
            utilizadaFlag = false;
            }
        }
    
         if(utilizadaFlag == false){
            var LetrasUsadas = document.getElementById("utilizadas");
            LetrasUsadas.innerHTML=utilizadas;
            utilizadaFlag = true;
        }else{
            var LetrasUsadas = document.getElementById("utilizadas");
            LetrasUsadas.innerHTML=utilizadas;
        }
    */
    
        if(isNaN(letraLoc)){

            for (let i = 0; i < adivina.length; i++) {
                if (letraLoc == adivina.charAt(i)) {
                  aux = aux + letraLoc;
                  flag = true;
                }else {
                  aux = aux + palabra0.charAt(i);
                }

            }

            palabra0 = aux;
            aux = "";
            console.log (palabra0);


            if (flag != true) {
                numIntentos.innerHTML=cont - 1;
                cont --;
            }
            flag = false;
            
            finalizar();
            
        }else{
            finalizar();
            alert("upss... solo puede introducir letras de la a, hasta la z vualva a intentarlo jeje");

            numIntentos.innerHTML=cont - 1;
            cont --;
            
        }
        
    
    var caja_palabra0 = document.getElementById('palabra');
    caja_palabra0.innerHTML= palabra0;
   
} //Final de la funcion principal 

function finalizar(){
    if(adivina == palabra0){
        var boton = document.getElementById("boton").value="Volver a jugar";
        var mensajeFinal = document.getElementById("mensajeFinal");
        mensajeFinal.innerHTML=("Que bien, has adivinado la palabra!!!");
        document.getElementById('boton').style.display='none';
        document.getElementById('refrescar').style.display='inline';
        document.getElementById('letra').style.display=true;
        
    }else if(cont <= 0){
        var boton = document.getElementById("boton").value="Volver a jugar";
        var mensajeFinal = document.getElementById("mensajeFinal");
        mensajeFinal.innerHTML=("Que mala suerte... perdiste!!");
        document.getElementById('boton').style.display='none';
        document.getElementById('refrescar').style.display='inline';
        document.getElementById('letra').style.display=true;
    }
}

/*  Funcion para hacer que el juego comience de nuevo  */

function repetir(){
    
    window.location.reload();

}

/*  funcion para cuando el DOM esté cargado  */

function load(){
    console.log("va!");
    var caja_palabra0 = document.getElementById('palabra');
    caja_palabra0.innerHTML= palabra0;
}

/*  ******* Empieza el código fuera de las funciones *******  */

window.onload = load;

num = Math.random() * (4 - 0) + 0;
num = Math.round(num);
adivina = palabras[num];

for (let i = 0; i < adivina.length; i++) {
  palabra0 = palabra0 + "0";
}

console.log(adivina + " " + palabra0);
