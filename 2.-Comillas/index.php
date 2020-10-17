<?php
/*
echo 'Un texto de una línea 
varias líneas
comilla simple \' backslash \\ continuar con mas texto
$variable';
*/

$name = "Didier Matos";
echo "<h1>Mi nombre es $name</h1>";
//CONCATENAR
echo '<h1>Mi nombre es ' . $name . '</h1> <br>';

//ARRAY
$courses = [
	'backend' => [
		'PHP',
		'Laravel'
	]
];
echo "<h1>Lenguaje: {$courses['backend'][0]} </h1><br>";

//CLASE
class User{
	public $name = 'Didier';
}

//OBJETO
$user = new User;
echo "<h1>$user->name quiere aprender {$courses['backend'][0]} </h1><br>";
$course = ['backend' => 'PHP'];
//echo "<h1>Lenguaje: {$courses['backend']} </h1><br>";

//VARIABLES VARIABLES
$teacher = 'Italo';
$italo = 'Profesor de PHP';
echo "<h1>$teacher es ${$teacher}</h1>";

//FUNCIÓN
function getTeacher(){
	return 'teacher';
}

$teacher = 'Italo';

echo "<h1>{${getTeacher()}} Enseña PHP</h1>";
