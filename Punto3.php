<?php
    $arreglo = [1,2,3,4,5,6,7,8,9];
    $h = 0;

    //Función para imrpimir el arreglo usando recursividad
     function imprimir($array, $x){
         echo $array[$x];
         echo '<br>';
        $x++;
       
        //Caso Base para detener la recursividad
        if($x == 9){
        echo 'Fin';
        }
        else{
            imprimir($array,$x);
        }
        
    }

    imprimir($arreglo, $h);


?>