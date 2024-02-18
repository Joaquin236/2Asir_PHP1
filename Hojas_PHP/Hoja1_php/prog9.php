<?php

//kernel
function Process() {
    $number=36;
    for ($i=1; $i < $number; $i++) { 
        if ($number%$i==0) {
            echo $i;
        }else {
            echo $number%2 . "<br>";
        }
    }
}

//-----------------------------
//interface
Process();

?>