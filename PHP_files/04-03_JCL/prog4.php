<?php
//tabla 4x4
$matrix=[
    array(6,8,1,3),
    array(6,8,1,3),
    array(6,8,1,3),
    array(6,8,1,3)
];

//kernel
function Process($matrix) {
    $matrix_2=[
        array(6,8,1,3),
        array(6,8,1,3),
        array(6,8,1,3),
        array(6,8,1,3)
    ];
    for ($i=0; $i < count($matrix); $i++) { 
        if ($matrix[0][2]==1){
            echo $matrix[0][0];
        }elseif ($matrix[0][1]==8) {
            echo $matrix[0][1];
        }elseif ($matrix[0][0]) {
            echo $matrix[0][2];
        }else {
            echo $matrix[0][3];
        }
    }
    return $matrix;
}

//interfaz
function Visual($data) {
    echo Process($matrix);
    
}

//llamar la interfaz
Visual($matrix);

?>