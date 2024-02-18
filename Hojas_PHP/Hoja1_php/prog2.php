<?php

//variables
$nota=7;

$age=19;

$caracter="M";

//----------------------------------

# kernel
function Evaluator($nota, $age, $caracter) { // declare (args)
    if ($nota>=5 and $age>=18 and $caracter=="M" or $caracter=="m") { //case1--> nota(+5) edad(+18) letra(M o m)
        echo "// DEBUG: ACEPTADA";
    }elseif ($nota>=5 and $age>=18 and $caracter=="V" or $caracter=="v") { //case2--> nota(+5) edad(+18) letra(V o v)
        echo "// DEBUG: APEPTADO";
    }elseif ($age<=18) { // case3--> edad(-18)
        echo "// CAUTION: NO ES POSIBLE. ES MENOR DE EDAD";
    }elseif ($nota<=5) { //case4--> nota(-5)
        echo "// WARNING: NO ES POSIBLE. NOTA SUSPENSA";
    }
    
}

//-------------------------------

# interface
Evaluator($nota, $age, $caracter);
?>