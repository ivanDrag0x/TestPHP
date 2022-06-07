<?php 
// Dado una cadena de texto, imprimir la primera letra que se repite, 
// no distinguiendo entre mayúsculas y minusculas. No utilizar strpos, strstr y substr.
    
$palabra = "zapato";
   
    // for anidado que compara las letras 
    for ($i=0; $i < strlen($palabra) ; $i++) { 
         
        for ($d=$i+1; $d < strlen($palabra) ; $d++) { 

            //IF que manda a imprimir la primera letra que encuentre repetida. 
            if($palabra[$i] == $palabra[$d]){
               echo ('La primera letra que se repite es la: ' . strtoupper($palabra[$i])); 
               $i = strlen($palabra);
               $d = strlen($palabra);
                 
            }
        }
    }
?>

