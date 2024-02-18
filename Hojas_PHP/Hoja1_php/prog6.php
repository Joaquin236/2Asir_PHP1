<?php

//variables
$number_1=324;
$number_2=758;

//--------------
// kernel
function Proccess($number_1, $number_2) { // declare (arg)
    $sum=$number_1+$number_2; // sumander variable calc
    $multi=$number_1*$number_2; // multiplicator variable calc
//-------------------------------------
    echo "// DEBUG: THE SUM IS --> " . $sum . "<br>";
    echo "// DEBUG: THE MULTIPLICATOR IS --> " . $multi . "<br>";
//-------------------------------------------------
    // condition
    if ($sum<$multi) { //case1 --> sumander < multiplicator
        echo "// DEBUG: THE MULTIPLICATION IS MORE BIG";
    }else { //case2 negate the case1
        echo "// DEBUG: THE SUM IS MORE BIG";
    }
    
}

//-----------
//Interface
Proccess($number_1, $number_2);

?>