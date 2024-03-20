<?php
//numbers
$matrix=array(45,875,45,2,23,34,4,8);
//---------------------------------------------

// kernel 1
function Process1($matrix) {
    for ($i=0; $i < 24; $i++) {
        $sum=$matrix+$i;
        
    }
    return $sum;
}
//-------------------------------------

// kernel 2
function Process2($matrix) {
    for ($i=0; $i < 24; $i++) { 
        $sum=$matrix+$matrix;
    }
    return $sum;
}
#-------------------------------------
// interface.exe
function Visual1() {
    echo Process1($matrix);
}

function Visual2() {
    echo Process2($matrix);
}

// interface
Visual1($matrix);
echo "<br>";
Visual2($matrix);


?>