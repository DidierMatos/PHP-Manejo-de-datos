<?php
    echo "<h1>Return</h1>";
    echo "---------------";
    //Forma parte de cualquier función
    //Necesitamos Return precisamente para devolver y entregar con éxito lo que has procesado anteriormente
    
    function greet(){
        return "Hola..";  //Buena práctica
    }
    
    echo greet();
    
    
    //Para retornar mas de un valor o elemento utilizamos un array
    function greet1(){
        return ['PDF', 'Laravel']; 
    }
    
    echo "<pre>";
    var_dump(greet1());
    echo "</pre>";

    exit(); //detiene la ejecución del sistema
    return; //retorna
?>