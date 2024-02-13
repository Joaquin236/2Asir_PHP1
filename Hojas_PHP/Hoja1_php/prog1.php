<?php

//numbers
$number_a=1235;
$number_b=21;

// kernel
function Process($number_a, $number_b){ // this function require the argument
    if ($number_a+$number_b>=0) { # case1 --> a+b>=c --> +
        echo "// DEBUG: THE NUMBER IS POSITIVE";
    }elseif ($number_a+$number_b<=0) { # case2 --> a+b<=c --> -
        echo "// DEBUG: THE NUMBER IS NEGATIVE";
    }else { # case3 --> a+b==o --> 0
        echo "// DEBUG: THE NUMBER IS 0";
    }
    
}

// interface
Process($number_a, $number_b);



?>