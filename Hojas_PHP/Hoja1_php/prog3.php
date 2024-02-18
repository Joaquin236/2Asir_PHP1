<?php

// variables
$europeo=0;
$casado=0;
$mujer=0;
$edad=28;
$saldo=12312;

//---------------------

// kernel
function Evaluator($europeo, $casado, $mujer, $edad, $saldo) {
    if ($europeo==1 and $casado==0) {
        echo "// DEBUG: ERES EUROPEO Y NO CASADO";
    }elseif ($saldo>10000 or $europeo==0 and $edad%4==0) {
        echo "// DEBUG: NO ERES EUROPEO, SU SALDO SUPERA LOS 10000 Y SU EDAD ES DIVISIBLE ENTRE 4";
    }
    
}

//------------
//interface
Evaluator($europeo, $casado, $mujer, $edad, $saldo);
?>