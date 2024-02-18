<?php

//kernel
function Process () { //declare (without args)
    for ($i=50; $i >=0; $i--) { // start in 50 --> the number is > 0 --> decrement the number $i--
        if ($i%2==0) { // show the par number --> $i % 2 == 0
            echo $i . " ";
        } 
    }
}

//-----------------------------
//interface
Process();

?>