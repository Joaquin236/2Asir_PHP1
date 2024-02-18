<?php

//variables
$salary=1900;

//----------------------------------

# kernel
function Evaluator($salary) { // declare (args)
    if ($salary>=600) { //case1--> salary(+600)
        echo "// DEBUG: SUPERIOR A 600 <br>";
    }if ($salary>=1200) { //case2--> salary(+1200)
        echo "// DEBUG: SUPERIOR A 1200 <br>";
    }if ($salary>=1800) { // case3--> salary(+1800)
        echo "// DEBUG: SUPERIOR A 1800 <br>";
    }elseif ($salary<=600) { //case4--> salary(-600)
        echo "// WARNING: INFERIOR A 600 <br>";
    }
    
}

//-------------------------------

# interface
Evaluator($salary);
?>