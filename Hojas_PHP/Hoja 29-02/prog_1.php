<?php

// kernel 1 --> execution
function Proccess() { // declare
    for ($i=20; $i < 30; $i++) { // loop. Start the 20 go to 30 n++
        if ($i%$i==0) { // the number is division in number --> visual number
            echo $i . " ";
        } // return the variable
    }return $i;
    
}

// kernel2 --> interface
function Visual($i) { // declare
    echo (Proccess()); // call the kernel
}

// call the interface
Visual($i);

?>