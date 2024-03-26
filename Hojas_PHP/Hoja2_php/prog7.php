<?php

//variables
$numero1=608;
$numero2=-615;
$numero3=778;
$numero4=-914;

$numero5=1126;
$numero6=-1002;
$numero7=1859;
$numero8=-2005;

//-------------------------

//kernel
function Proceso($numero1,$numero2,$numero3,$numero4,$numero5,$numero6,$numero7,$numero8) {
    if ($numero1> 0 || $numero2 > 0 || $numero3 > 0 || $numero4 > 0 || $numero5 > 0 || $numero6 >0 || $numero7 >0 || $numero8>0) {
        $status=($numero1+ $numero2 +$numero3+ $numero4+ $numero5+ $numero6+ $numero7+ $numero8)/8;
    }else{
        $status="error";
    }
    if ($numero1 < 0 || $numero2 < 0 || $numero3 < 0 || $numero4 < 0 || $numero5 < 0 || $numero6 < 0 || $numero7 < 0 || $numero8 < 0) {
        $status=($numero1+ $numero2 +$numero3+ $numero4+ $numero5+ $numero6+ $numero7+ $numero8)/8;
    }else {
        $status="error";
    }
    return $status;
}

//---------------------

//interface
function Visual($data) {
    echo $data;
}

//------------------------------------

//call the kernel
$result=Proceso($numero1,$numero2,$numero3,$numero4,$numero5,$numero6,$numero7,$numero8);


//call the interface
Visual($result);

?>