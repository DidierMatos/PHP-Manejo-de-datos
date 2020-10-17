<?php

echo "<h1>Closure</h1>";
echo "---------------";
echo "<br>";
//Función Anonima 

/*
$greet = function ($name) // variable que requiere lógica
{
    return "Hola, $name";
};

echo $greet('Didier');
*/

function greet(Closure $lang, $name)
{
    return $lang($name);
}

$es = function ($name)
{
    return "Hola, $name";
};

$en = function ($name)
{
    return "Hello, $name";
};

echo greet($es, 'Didier');
echo '<br>';
echo greet($en, 'Eren');