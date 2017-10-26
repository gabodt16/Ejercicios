var letra = "";
var adivina = "";
var max = 122;
var min = 97;
cont = 1;

letra = Math.random() * (max - min) + min;
letra = Math.round(letra);
letra = String.fromCharCode(letra);

//alert (letra);
alert ("Holaaa  Valeee");
alert ("Adivina la letra, tienes 5 intentos, mucha suerte!!");
adivina = prompt ("Trata de adivinar a ver que tal te va!" , "");


if (letra == adivina) {
  alert("Es increible!! no te creo que la hayas pegado a la primera... Es que eres un/a pro en esto!!!");
}else{
  while (letra != adivina && cont < 5) {
  adivina = prompt ("No, no es esa, lo siento vuelve a probar" , "");

  cont ++;
  }
  if(letra == adivina){
    alert ("Exelente nojodaaa!!! que leche tienes, la pegaste!! XD");
  }else {
    alert ("Mala tuya, lo siento! creo que no se te da éste juego...");
  }
}
