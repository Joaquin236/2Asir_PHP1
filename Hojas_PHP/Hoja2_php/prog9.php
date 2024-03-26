<?php

//variables
$numero1=608;
$numero2=-615;
$numero3=778;
$numero4=-914;

$numero5=1126;
$numero6=-1002;
$numero7=1859;

//-------------------------

//kernel
function Proceso($numero1,$numero2,$numero3,$numero4,$numero5,$numero6,$numero7) {
    if ($numero1 > $numero2 || $numero1 > $numero3 || $numero1 > $numero4 || $numero1 > $numero5 || $numero1 > $numero6 || $numero1 > $numero7) {
        $status=$numero1;
    }elseif ($numero2 > $numero1 || $numero2 > $numero3 || $numero2 > $numero4 || $numero2 > $numero5 || $numero2 > $numero6 || $numero2 > $numero7) {
        $status=$numero2;
    }elseif ($numero3 > $numero2 || $numero3 > $numero1 || $numero3 > $numero4 || $numero3 > $numero5 || $numero3 > $numero6 || $numero3 > $numero7) {
        $status=$numero3;
    }elseif ($numero4 > $numero2 || $numero4 > $numero3 || $numero4 > $numero1 || $numero4 > $numero5 || $numero4 > $numero6 || $numero4 > $numero7) {
        $status=$numero4;
    }elseif ($numero5 > $numero2 || $numero5 > $numero3 || $numero5 > $numero4 || $numero5 > $numero1 || $numero5 > $numero6 || $numero5 > $numero7) {
        $status=$numero5;
    }elseif ($numero6 > $numero2 || $numero6 > $numero3 || $numero6 > $numero4 || $numero6 > $numero5 || $numero6 > $numero1 || $numero6 > $numero7) {
        $status=$numero6;
    }elseif ($numero7 > $numero2 || $numero7 > $numero3 || $numero7 > $numero4 || $numero7 > $numero5 || $numero7 > $numero6 || $numero7 > $numero1) {
        $status=$numero7;
    }
    return $status;
}

//------------------

//interface
function Visual($data) {
    echo $data;
}

//---------------------------

//call the kernel
$result=Proceso($numero1,$numero2,$numero3,$numero4,$numero5,$numero6,$numero7);

//call the interface
Visual($result);
