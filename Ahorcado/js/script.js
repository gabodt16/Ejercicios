var letra = "g";
var letra2 = "G";
var letra3 = "";

console.log("llego");
alert ("Bienvenido al juego del ahorcado modo facil de 1 letra");


while (letra != letra3){
    
    letra3 = prompt ("Adivina la letra " , "");

    if(letra3 == letra){
        alert ("Buenaaa!! la haz adivinado!");
        console.log("llego");
    }else if(letra3 == letra2){
        alert("La pegaste de milagro, que suerte!!");
    }else if (letra3 != letra){
        alert("Pues no, mala leche! sigue intentando");
    }
}