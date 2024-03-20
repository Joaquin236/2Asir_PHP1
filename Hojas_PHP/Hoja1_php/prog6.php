<?php

//variables
$number_1=324;
$number_2=758;

//--------------
// kernel
function Proccess($number_1, $number_2) { // declare (arg)
    $sum=$number_1+$number_2; // sumander variable calc
    $multi=$number_1*$number_2; // multiplicator variable calc
    // condition
    if ($sum<$multi) { //case1 --> sumander < multiplicator
        $status="// DEBUG: THE MULTIPLICATION IS MORE BIG";
    }else { //case2 negate the case1
        $status="// DEBUG: THE SUM IS MORE BIG";
    }
    return $status;    
}

//-----------
//Interface declare
function Visutal($data){
    echo $data;   
}

//----------------------

//Call the kernel
$result=Proccess($number_1, $number_2);

//call the interface
Visutal($result);

?>