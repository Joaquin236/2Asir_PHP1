<?php

// variables
$number=42;


//-------
function Process($number) { //declare (arg)
    if ($number%2==0) { // case1 --> the pars is a 234 % 2 == 0
        $number_status="// DEBUG: THE NUMBER IS PAR";
    }else { //case2 --> condition1 not validated
        $number_status="// DEBUG: THE NUMBER ISN`T PAR";
    }
    return $number_status;
}

//------------

//interface declare
function Visual($data){
    echo $data;
}

//-------------------------

//call the kernel
$result=Process($number);

//call interface
Visual($result);
?>