<?php
//numbers
$tab1=array(1,2,7,6,6,5,4,6,9);
//---------------------------------------------

// kernel 1
function Process($tab1) {
    for ($i=0; $i < 8; $i++) { 
        $sum=$tab1+($tab1/$tab1);
        return $sum;

    }
}
//-------------------------------------

// interface.exe
function Visual(){
    echo Process($tab1);
    
}

//interface
Visual($tab1);


?>