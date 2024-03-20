<?php

//variables
$salary=1900;

//----------------------------------

// kernel
function Evaluator($salary) { // declare (args)
    if ($salary>=600) { //case1--> salary(+600)
        $status="// DEBUG: SUPERIOR A 600";
    }if ($salary>=1200) { //case2--> salary(+1200)
        $status="// DEBUG: SUPERIOR A 1200";
    }if ($salary>=1800) { // case3--> salary(+1800)
        $status="// DEBUG: SUPERIOR A 1800";
    }elseif ($salary<=600) { //case4--> salary(-600)
        $status="// WARNING: INFERIOR A 600";
    }
    return $status;    
}

//-------------------------------

//declare interface
//interface declare
function Visual($data) {
    echo $data;    
}

//-----------------------

// call the kernel
$result=Evaluator($salary);

//call interface
Visual($result);
?>