<?php

//kernel
function Process () { //declare (without args)
    for ($i=50; $i >=0; $i--) { // start in 50 --> the number is > 0 --> decrement the number $i--
        $i;

    }
    return $i;
}

//-----------------------------

//interface declare
function Visual($data){
    echo $data;    
}

//----------------------

//call the kernel
$result=Process();

//call the interface
Visual($result);


?>