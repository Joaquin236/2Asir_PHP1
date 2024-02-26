<?php

//matrix 3x4
$matrix=array(
    array (54,58,23,90),
    array (54,58,23,90),
    array (54,58,23,90)
);

//kernel
function Process($matrix) {
    $fusion=array_map('current', $matrix);
    echo $fusion;
    var_dump($matrix);
    
}

//interface
Process($matrix);
?>