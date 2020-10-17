<?php
    // Alterar
    $text = "PHP es UN LENGUAJE";
    // echo strtolower($text);
    // echo strtoupper($text);
    // echo ucfirst($text);
    // echo lcfirst($text);

    //REMPLAZAR
    $slug = str_replace(' ', '-', $text);
    // echo strtolower($slug);

    //MODIFICACIÓN
    $code = 39;
    // echo str_pad($code, 8, '#', STR_PAD_LEFT);
    // echo str_pad($code, 8, '#', STR_PAD_BOTH);
    
    //LIMPIANDO CÓDIGO HTML
    $textHTML = "<h1>PHP es UN LENGUAJE</h1>";
    // echo strip_tags($textHTML);

    $text2 = "PHP es UN LENGUAJE, año 2020, programación";
    // echo strtoupper($text2);
    echo mb_strtoupper($text2);



?>


