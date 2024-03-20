<?php

//variable
$nombres=[
    array("Bill","Pablo","Nuria","Valentina"),
    array("Steve","Chell","Henry","Juan","Frank")
];

//kernel
function Process($nombres){
    foreach ($nombres as $value) {
        $cadena=$nombres;
    }
    return $cadena;
    
}

//interfaz
function Visual($dato) {
    echo Process($nombres);
}

//llamada a interfaz
Visual($dato);


?>