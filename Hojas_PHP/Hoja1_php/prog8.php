<?php

//kernel
function Proceso() {
    for ($i=0; $i < 10; $i++) {
        $caracter="*";
    }
    return $caracter;
}

//------------------

//interface
function Visual($data) {
    echo $data;    
}

//------------------

//call the kernel
$result=Proceso();

//call the interface
Visual($result);