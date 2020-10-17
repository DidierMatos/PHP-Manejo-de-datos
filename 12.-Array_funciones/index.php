<?php

echo "<h1>Funciones PHP para arrays</h1>";
echo "---------------";

$course = ['php', 'javascript', 'laravel'];
$course2 = [
	10 => 'php', 
	100 => 'javascript', 
	1000 => 'laravel'
];

#Ordenar
sort($course);
//Ordenar de forma Recursiva
//rsort($course);

#Ordenar por Key
//krsort($course2); //Ordenar de forma Recursiva
ksort($course2);
echo("<pre>");
var_dump($course);
echo "---------------";
echo "<br>";
var_dump($course2);
echo "---------------";
echo "<br>";

#array_slide array rebanada
//en este caso eliminamos el Key 1
array_slice($course, 1);
var_dump(array_slice($course2, 1));
//Resultado
/*
array(2) {
	[0]=>
	string(10) "javascript"
	[1]=>
	string(7) "laravel"
  }
*/
echo "---------------";
echo "<br>";

#array_chunk array pedazo
//en este caso crea un 2 arrays y uno de ellos contiene dos elementos de los 3 que cotiene el array principal
$course_chunk = ['php', 'javascript', 'laravel'];
array_chunk($course_chunk, 2);
var_dump(array_chunk($course_chunk, 2));
echo "---------------";
echo "<br>";

#array_shift() 
//Quita un elemento del principio del array
$course_shift = ['php', 'javascript', 'laravel'];
array_shift($course_shift);
var_dump(array_shift($course_shift));
echo "---------------";
echo "<br>";

#array_pop()
//Extrae el último elemento del final del array
$course_pop = ['php', 'javascript', 'laravel'];
array_pop($course_pop);
var_dump($course_pop);
echo "---------------";
echo "<br>";

#array_unshift()
//Añadir al inicio de un array uno a más elementos
$course_unshift = ['php', 'javascript', 'laravel'];
array_unshift($course_unshift, 'laravel2', 'javascript2');
var_dump($course_unshift);
echo "---------------";
echo "<br>";

#array_push()
//Inserta uno o más elementos al final de un array
$course_push = ['php', 'javascript', 'laravel'];
array_push($course_push, 'laravel1', 'javascript1');
var_dump($course_push);
echo "---------------";
echo "<br>";

#array_flip()
//Intercambia todas las claves de un array con sus valores asociados
$course_flip = [
	'backend' => 'php', 
	'frontend' => 'javascript'
];
$intercambio = array_flip($course_flip);
var_dump($intercambio);
?>