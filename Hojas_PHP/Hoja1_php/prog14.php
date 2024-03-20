<?php
// kernel
function Process(){ # declare
    # start value
    $a=0;
    $b=0;
    $c=0;
    $d=0;
    # loop execution aninaded
    while ($a <= 10) { // loop 1 --> multiplicate the 3
        while ($b <= 10) { // loop 2 --> multiplicate the 4
            while ($c <= 10) { // loop 3 --> multiplicate the 5
                while ($d <= 10) { // loop 4 --> multiplicate the 6
                    $status=$d . " x " . 6 . " = " . $d*6 . "<br>";
                    $d++;
                } // interface
                $status=$c . " x " . 5 . " = " . $c*5 . "<br>";
                $c++;
            } // interface
            $status=$b . " x " . 4 . " = " . $b*4 . "<br>";
            $b++;
        } // interface
        $status=$a . " x " . 3 . " = " . $a*3 . "<br>";
        $a++;
    }
    return $status;
}

// interface
function Visual($data) {
    echo $data;
}

//call kernel
$result=Process();

//call interface
Visual($result);

?>