<?php

//variables
$nota=7;

$age=28;

$caracter="V";

//----------------------------------

# kernel
function Evaluator($nota, $age, $caracter) {
    if ($nota=>5 and $age=>18 and $caracter=="M" ) {
        echo "// DEBUG: ACEPTADA";
    }elseif ($nota=>5 and $age>=18 and $caracter=="V") {
        echo "// DEBUG: APEPTADO";
    }
    
}

//-------------------------------

# interface
Evaluator($nota, $age, $caracter);



?>