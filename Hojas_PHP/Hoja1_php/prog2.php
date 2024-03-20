<?php

//variables
$nota=8;

$age=28;

$caracter="M";

//----------------------------------

//kernel
function Evaluator($nota, $age, $caracter) { // declare (args)
    if ($nota>=5 and $age>=18 and $caracter=="M" or $caracter=="m") { //case1--> nota(+5) edad(+18) letra(M o m)
        $eval_status="// DEBUG: ACEPTADA";
    }elseif ($nota>=5 and $age>=18 and $caracter=="V" or $caracter=="v") { //case2--> nota(+5) edad(+18) letra(V o v)
        $eval_status="// DEBUG: APEPTADO";
    }elseif ($age<=18) { // case3--> edad(-18)
        $eval_status="// CAUTION: NO ES POSIBLE. ES MENOR DE EDAD";
    }elseif ($nota<=5) { //case4--> nota(-5)
        $eval_status="// WARNING: NO ES POSIBLE. NOTA SUSPENSA";
    }
    return $eval_status;
}

//-------------------------------

//interface declare
function Visual($data){
    echo $data;
}

//-----------------------


//call kernel 
$result=Evaluator($nota, $age, $caracter);

//call interface
Visual($result);
?>