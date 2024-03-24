<?php

//sueldos
$sueldo1=608;
$sueldo2=615;
$sueldo3=778;
$sueldo4=914;

$sueldo5=1126;
$sueldo6=1002;
$sueldo7=1859;
$sueldo8=2005;


//---------------

//kernel
function Proceso($sueldo1,$sueldo2,$sueldo3,$sueldo4,$sueldo5,$sueldo6,$sueldo7,$sueldo8) {
    $a=1;
    while ($a <= 8) {
        if ($sueldo1 >= 600 || $sueldo2 >= 600 || $sueldo3 >= 600 || $sueldo4 >= 600 || $sueldo5 >= 600 || $sueldo6 >= 600 ||  $sueldo7 >= 600 || $sueldo8 >= 600) {
            $Sueldo_bajo = "Los sueldos bajos son --> " . $a;
        }
    $a++;
    }
    return $a;
}

//interface
function Visual($data) {
    echo $data;
    
}

//call kernel
$result=Proceso($sueldo1,$sueldo2,$sueldo3,$sueldo4,$sueldo5,$sueldo6,$sueldo7,$sueldo8);

//call interface
Visual($result);

?>