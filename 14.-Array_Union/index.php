<?php
    echo "<h1>Unión</h1>";
    echo "---------------";
    echo "<br>";

    $frontend = ['javascript'];
    $backend = ['php', 'laravel'];

    //Remplaza el indice 0 y no muestra php, por lo tanto la union no se completa correctamente
    echo '<pre>';
    var_dump($frontend + $backend);
    echo "---------------";
    echo "<br>";


    // Una posible solución para unir pero debe modificarse el key
    $frontend2 = [
        'frontend' => 'javascript'
    ];
    $backend2 = [
        'backend' => 'php', 
        'framework' => 'laravel'
    ];
    
    var_dump($frontend2 + $backend2);
    echo "---------------";
    echo "<br>"; 
    
    #array_merge()
    //Solución mejor aplicada con función de php y sin necesidad de cambiar el key
    var_dump(array_merge($frontend, $backend));
    echo "---------------";
    echo "<br>"; 

    #array_merge_recursive
    //Une dos o más arrays recursivamente (agrupa) y corrige el remplazo que haria con el merge normal
    $frontent3 = [
        'a' => 'javascript'
    ];
    
    $backend3 = [
        'a' => 'php', 
        'b' => 'laravel'
    ];

    echo "<pre>";
    var_dump(array_merge_recursive($frontent3, $backend3));
    //Esto crea un array "a" donde mete unos elementos y otro "b" que mete los demás
    //resultado
    /* 
    array(2) {
    ["a"]=>
    array(2) {
        [0]=>
        string(10) "javascript"
        [1]=>
        string(3) "php"
    }
    ["b"]=>
    string(7) "laravel"
    }
    */
    echo "---------------";
    echo "<br>";

    //Ejemplo con los mismo key
    #array_combine
    //Crea un nuevo array, usando una matriz para las claves y otra para sus valores
    //Agrupa y une de acuerdo al indice ambos arreglos
    $courses = ['javascript', 'php', 'laravel'];
    $categories = ['frontend', 'backend', 'framework'];

    var_dump(array_combine($categories, $courses));

?>