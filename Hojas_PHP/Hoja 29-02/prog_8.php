<?php

//matrix 3x4
$matrix=array(
    array (54,58,23,90),
    array (54,-58,23,90),
    array (54,58,23,90),
    array (53,32,21,-39)
);

//kernel
function Process($matrix) {
    for ($i=0; $i < 9; $i++) { 
        if ($i<=0) {
            var_dump($matrix);
        }else{
            var_dump($matrix);
        }
    }    
}

//interface
Process($matrix);
?>