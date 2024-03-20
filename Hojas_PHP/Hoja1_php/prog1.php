<?php

//numbers
$number_a=1235;
$number_b=21;

// kernel
function Process($number_a, $number_b){ // this function require the argument
    if ($number_a+$number_b>=0) { # case1 --> a+b>=c --> +
        $number_status="// DEBUG: THE NUMBER IS POSITIVE";
    }elseif ($number_a+$number_b<=0) { # case2 --> a+b<=c --> -
        $number_status="// DEBUG: THE NUMBER IS NEGATIVE";
    }else { # case3 --> a+b==o --> 0
        $number_status="// DEBUG: THE NUMBER IS 0";
    }
    return $number_status;
}

// interface declare
function Visual($data) {
    echo $data;
}

// call the kernel
$result=Process($number_a, $number_b);
Visual($result)


?>