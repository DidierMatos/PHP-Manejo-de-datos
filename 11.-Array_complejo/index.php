<?php

echo "<h1>Array Complejo</h1>";
echo "---------------";
echo "<br>";


    $courses = [
        'frontend' => 'javascript', 
        'framework' => 'laravel', 
        'backend' => 'php', 
    ];

    foreach($courses as $key => $course){
        echo "$key: $course <br>";
    }

    echo "---------------";
    echo "<br>";

    function upper($course){
        echo strtoupper($course) . "<br>";
    }

    array_walk($courses, 'upper');

    echo "---------------";
    echo "<br>";

    function upper1($course, $key){
        echo strtoupper($course) . ": $key <br>";
    }

    array_walk($courses, 'upper1');

/*	
	//Existe un Key
	array_key_exists('frontend', $courses);
	//Existe un valor
	in_array('javascript', $courses);
	//Muestra todos los Key
	array_keys($courses);
	//Muestra todos los valores
	array_values($courses);
*/
?>