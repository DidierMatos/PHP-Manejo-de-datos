<?php

echo "<h1>Array Simple</h1>";
echo "---------------";
echo "<br>";
#Array
//Es aquel elemento que no identificamos de manera directa.
#Array Simple
//Es aquel que no le hemos definido un Key o clave

    $courses = [
        'javascript', 
        'laravel', 
        'php', 
        'vuejs'
    ];
    echo '<pre>';
    var_dump($courses);

    //Alterando el arrayy su numeración
    $courses2 = [
        'javascript', 
        'laravel', 
        10 => 'php', 
        'vuejs'
    ];
    echo '<pre>';
    var_dump($courses2);
?>