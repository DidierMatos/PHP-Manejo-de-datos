<?php

    echo "<h1>Comparación</h1>";
    echo "---------------";
    echo "<br>";

    $courses = ['javascript', 'php'];
    $wishes = ['php', 'laravel', 'javascript', 'vuejs'];

    #array_diff();
    //Calcula la diferencia entre arrays
    echo '<pre>';
    var_dump(array_diff($wishes, $courses));
    echo '------------------';
    echo '<br>';

    $arrayA = [1,2,3,4,5];
    $arrayB = [4,6,1,7,8];
    
    //Evalua depende al orden que coloquemos
    var_dump(array_diff($arrayA, $arrayB));
    echo '------------------';
    echo '<br>';
    var_dump(array_diff($arrayB, $arrayA));

    #array_diff_assoc()
    //Calcula la diferencia entre arrays con un chequeo adicional de índices




?>