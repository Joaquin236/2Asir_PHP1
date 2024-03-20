<?php

//variable
$a=1;

//kernel
function Proceso($a) {
    while ($a <= 10) {
        $status="*";
    }
    $a++;
    return $status;
}

//------------
//interface
function Visual($data) {
    echo $data;
}

//-----------------------
//call kernel
$result=Proceso($a);

//call interface
Visual($result);

?>