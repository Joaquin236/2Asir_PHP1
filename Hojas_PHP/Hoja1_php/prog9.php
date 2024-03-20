<?php

//kernel
function Process() {
    $number=362;
    for ($i=1; $i < $number; $i++) { 
        if ($number%$i==0) {
            $status=$i;
        }else {
            $status=$number%2;
        }
    }
    return $status;
}

//-----------------------------
//interface
function Visual($data) {
    echo $data;
}

//---------------------
//call kernel
$result=Process();

//call interface
Visual($result);


?>