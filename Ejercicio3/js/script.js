var num1 = 39;
var num2 = 0;


while (num1 != num2) {
  num2 = prompt ('Adivina un número del 1 al 100 ', '');
  if (num2 < num1){
    alert ("TE QUEDASTE CORTO PRINGAOOO");
  } else if (num2 > num1){
    alert ("TE VOLASTE!!");
  } else if (num2 == num1){
    alert ("Que leche tienes, la pegaste!!!");
  } else {
    alert ("Error, solo debe escribir números");
  }
}


console.log("SOYYY UNN GUEVOOO!!!");
