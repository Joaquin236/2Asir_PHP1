<?php

//variable
$a=1;

//kernel
function Proceso($a) {
    do {
        $status="*";
    } while ($a <= 10);
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