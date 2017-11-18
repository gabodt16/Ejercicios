var palabra = ["maniatico", "jabon", "centralizar", "bruja", "estereotipo"];
var adivina = "";
var pal_adi = "";
var pal_0 = "";
var num = 0;
var letras = "";
var letraTemp = "";
var flag = false;
cont = 5;

num = Math.random() * 4;
num = Math.round(num);
pal_adi = palabra[num];

alert ("Holaaa Valeee!!!!" );
alert ("Adivina la palabra, puedes fallar sólo 5 veces, mucha suerte!!");

for (let i = 0; i < pal_adi.length; i++) {
    pal_0 = pal_0 + "0";
}

while (cont > 0 && pal_0 != pal_adi) {
    adivina = prompt ("Tienes " + cont + " intentos, trata de adivinar a ver que tal te va!             " + pal_0);

    if(isNaN(adivina)){
    
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
        alert("lo siento, pero solo puede introducir letras de la a, hasta la z vualva a intentarlo");
        cont --;
    }
}


if(pal_0 == pal_adi){
    alert("Felicidades lo has conseguido! adivinaste la palabra (" + pal_adi + ") has ganado!!");
}else{
    alert("Lo siento, no has conseguido adivinar la palabla, mejor suerte la próxima vez");
}




