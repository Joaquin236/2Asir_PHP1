<?php

// variables
$europeo=0;
$casado=0;
$mujer=0;
$edad=28;
$saldo=12312;

//---------------------

// kernel
function Evaluator($europeo, $casado, $mujer, $edad, $saldo) { // declare (args)
    if ($europeo==1 and $casado==0) { // case1 --> $europeo ==1 && $casado==0
        $status="// DEBUG: ERES EUROPEO Y NO CASADO";
    }elseif ($saldo>10000 or $europeo==0 and $edad%4==0) { // case2 --> saldo>10000 or $europeo==0 && edad % 4 == 0
        $status="// DEBUG: NO ERES EUROPEO, SU SALDO SUPERA LOS 10000 Y SU EDAD ES DIVISIBLE ENTRE 4";
    }
    return $status;    
}

//------------

//interface declare
function Visual($data) {
    echo $data;    
}

//-----------------------

// call the kernel
$result=Evaluator($europeo, $casado, $mujer, $edad, $saldo);

//call interface
Visual($result);
?>