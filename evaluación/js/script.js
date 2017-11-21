var palabra = ["malandro", "jabon", "estereotipo", "bruja", "bachaquero", "computadora"];
var adivina = "";
var pal_adi = "";
var pal_0 = "";
var num = 0;
var letras = "";
var letraTemp = "";
var flag = false;
var bandera = false;
var salida = false;
var comodines = "";
cont = 5;

num = Math.random() * 5;
num = Math.round(num);
pal_adi = palabra[num];

while(bandera == false){
    cont = prompt ("Cuantos intendos deseas tener? tiene que ser entre 5 y 10", "5");
    if(isNaN && cont <= 10 && cont >= 5){
        bandera = true;
    }else{
        alert("Disculpa, el numero de intentos tiene que ser entre el 5 y el 10");
    }
}



alert ("Holaaa Valeee!!!!" );
alert ("Adivina la palabra, puedes fallar sólo " + cont + " veces, mucha suerte!!");
alert ("En cualquier momento del juego te puedes salir si escribes la palabra (fin) y tambien puedes escribir (comodin) para tener un poco de ayuda");

for (let i = 0; i < pal_adi.length; i++) {
    pal_0 = pal_0 + "0";
}


/*

//nota: haciendo pruebas 


for(let i = 0; i < letras.length; i++){
    let comodin = letras.charAt(i);
    if (comodin == "0"){
        alert("hola   " + comodin);
    }else{
        alert("chao   " + comodin);
        nosalidas = nosalidas + comodin;
        alert(nosalidas);
    }
    
    
}
    comodin = nosalidas.charAt(Math.round(Math.random() * nosalidas.length));
    alert (comodin + "     coño      " + nosalidas);
*/



while (cont > 0 && pal_0 != pal_adi) {
    adivina = prompt ("Tienes " + cont + " intentos, trata de adivinar a ver que tal te va!             " + pal_0);
    
    if(adivina == "fin" || adivina == "FIN"){
        cont = 0;
    }else{
        if(isNaN(adivina)){

            if(adivina == "comodin" || adivina == "COMODIN"){
                adivina = pal_adi.charAt(Math.round(Math.random() * pal_adi.length));
               
                /*
                NOTA: yo se que pude haberlo conseguido, me tarde mucho pensando la forma de hacerlo y haciendo varias pruebas, me complique bastante! 
                pero me gusto el reto, lo voy a seguir intentando en mi casa, un poco mas de tiempo y lo hacía!
                
                for(let i = 0; i < pal_0.length; i++){
                    let comodin = pal_0.charAt(i);
                    if (comodin != "0"){
                        comodines = comodines + comodin;
                    } 
                }
                    
                for(let i = 0; i< pal_0.length; i++){
                    comodines
                    adivina = comodines.charAt(Math.round(Math.random() * comodines.length));
                }
                
                */
            }
            
            for (let i = 0; i < pal_adi.length; i++) {
                if (adivina == pal_adi.charAt(i)) {
                  letraTemp = letraTemp + adivina;
                  flag = true;
                }else {
                  letraTemp = letraTemp + pal_0.charAt(i);
                }

            }

            pal_0 = letraTemp;
            letraTemp = "";
            console.log (pal_0);



            if (flag != true) {
                cont --;
            }

            flag = false;
        }else{
            alert("upss... solo puede introducir letras de la a, hasta la z vualva a intentarlo");
            cont --;
        }
    }
}


if(pal_0 == pal_adi){
    alert("Muy bien, lo conseguiste! adivinaste la palabra (" + pal_adi + ") que suerte!!");
}else{
    alert("Lo siento, no conseguiste adivinar la palabra, vuelve a intentarlo");
}
