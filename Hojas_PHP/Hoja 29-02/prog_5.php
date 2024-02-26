<?php


//matrix 6x4
$matrix = array (
array(34,62,12,34), //1
array(74,62,87,56), //2
array(41,21,14,22), //3
array(15,16,19,94), //4
array(45,65,14,33), //5
array(13,12,16,14) //6
);

// kernel
function Process($matrix) {
    foreach ($matrix as $key => $value) {
        var_dump($value);
    }
    
}

Process($matrix);