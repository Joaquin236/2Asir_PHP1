<?php

//numeros
$matrix=[
    array(1,14,8,3),
    array(6,19,7,2),
    array(3,13,4,1)
];

//kernel
function Process($matrix) {
    $niveles=array("Principiante","Medio","Perfeccionamiento");

    $idiomas=array("Inglés","Francés","Alemán","Ruso");

    for ($i=0; $i < count($matrix); $i++) {
        if ($matrix[1][2]) {
            $matriculados=$niveles[2] . $idiomas[0];
        }
    }
    return $matriculados;
}

//interfaz
function Visual($dato) {
    echo Process($matrix);
}

//llamada a la interfaz
Visual($dato);






?>