var num1 = 0;
var cont = 1;
var result = 0;

alert("Aprendiendo la tabla de multiplicar");

while (cont <= 10){
    num1 = parseInt(prompt ("Dime un número del 1 al 100: " , ""));
    
    if(num1 <= 100 && num1 >= 0){
        while(cont <= 10){
            result = num1 * cont;
            console.log (num1 + " x " + cont + "= " + result);
            cont++;
        }
        
    }else {
        alert("Debes introducir un numero entre el 1 y el 100, solo se aceptan numeros.");
    }
    
    
}




