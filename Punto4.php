<?php
    $matriz = [
        [2,6,7],
        [4,7,8],
        [8,5,6]
    ];

    echo 'Matriz Original';
    echo '<br>';

    //For anidado que muestra la matriz original
    for ($i=0; $i < 3; $i++) { 
        for ($b=0; $b < 3; $b++) { 
            echo $matriz[$i][$b] . '--';
        }
        echo '<br>';   
    }


    echo '<br>';

    //Función que transforma a la matriz transpuesta
    function matrizTranspuesta($arreglo){
        echo 'Matriz Transpuesta';
        echo '<br>';

    //For anidado que crea una matriz transpuesta a la orginal 
        for ($i=0; $i < 3; $i++) { 
            for ($b=0; $b < 3; $b++) { 
                $matrizTranspuesta[$i][$b] = $arreglo[$b][$i];
                echo $matrizTranspuesta[$i][$b] . '--';
                
            }
            echo '<br>';
        }
    }

    matrizTranspuesta($matriz);
    
?>