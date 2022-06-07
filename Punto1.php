<?php 
// Recorrer los numeros del 1 al 100 e imprimir:
// a. Si es divisible por 3, escribir fizz.
// b. Si es divisible por 2, escribir buzz.

$var = 0;
while($var < 100){

    $var++; 
    // Si el numero es divisible entre 2 regresa 'buzz'
    if(is_int($var/2)){
        echo 'buzz';
    }

    // Si el numero es divisible entre 3 regresa 'fizz'
    else if(is_int($var/3)){
        echo 'fizz';
    }

    // Si no es divisible ni entre 2 ni entre 3 regresa el valor normal
    else{
        echo $var;
    }
    echo '<br>';

}

?>