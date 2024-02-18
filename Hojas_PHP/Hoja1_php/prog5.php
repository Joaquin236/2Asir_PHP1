<?php

// variables
$number=43;


//-------
function Process($number) { //declare (arg)
    if ($number%2==0) { // case1 --> the pars is a 234 % 2 == 0
        echo "// DEBUG: THE NUMBER IS PAR";
    }else { //case2 --> condition1 not validated
        echo "// DEBUG: THE NUMBER ISN`T PAR";
    }
    
}

//------------

//interface
Process($number);
?>