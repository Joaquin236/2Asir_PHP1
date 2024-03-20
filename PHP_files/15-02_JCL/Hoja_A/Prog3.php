<?php
//numbers
$matrix=array(32,42,534,534);
//---------------------------------------------

// kernel 1
function Process1($matrix) {
    for ($i=0; $i < 24; $i++) { //loop iteraction. Extract the last number
        $last_number=$matrix[3];
        
    }
    return $last_number;
}
//-------------------------------------

// kernel 2
function Process2($matrix) {
    for ($i=0; $i < 24; $i++) { //loop iteraction. Sum the numbers
        $sum=$matrix+$matrix;
        
    }
    return $sum;
}
#-------------------------------------
// interface.exe
function Visual1($matrix) { //vualizate the returned variable
    echo Process1($matrix);
    
}
//---------------------
function Visual2($matrix) { //vualizate the returned variable
    echo Process2($matrix);
    
}

// interface
Visual1($matrix);
echo "<br>";
Visual2($matrix);


?>