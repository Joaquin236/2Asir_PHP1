<?php

//array
$tab_1=array(3454,672,3212,4456,534,6,43,25);

//kernel
function Process($tab_1) { //declare
    for($i=0; $i < 9; $i++) { //loop --> start_index --> $index < 9 --> index++
        $i_f=gmp_fact($i); // factorial_function --> gmp_fact($index)
        echo $i_f . " ";
    }
}

//interface
Process($tab_1);

?>