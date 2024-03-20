<?php

// kernel for 3
function Proccess1(){
    for ($a=0; $a < 11; $a++) { 
        $status1=$a . " x " . 3 . " = " . $a*3 . "<br>";
    }
    return $status1;
}

// kernel for 4
function Proccess2(){
    for ($b=0; $b < 11; $b++) { 
        $status2=$b . " x " . 4 . " = " . $b*4 . "<br>";
    }
    return $status2;
}

// kenel for 5
function Proccess3(){
    for ($c=0; $c < 11; $c++) { 
        $status3=$c . " x " . 4 . " = " . $c*4 . "<br>";
    }
    return $status3;
}

// kernel 6
function Proccess4(){
    for ($d=0; $d < 11; $d++) { 
        $status4=$d . " x " . 4 . " = " . $d*4 . "<br>";
    }
    return $status4;
}

//-----------------
// interface
function Visual1($data) {
    echo $data;
}
function Visual2($data) {
    echo $data;
}
function Visual3($data) {
    echo $data;
}
function Visual4($data) {
    echo $data;
}

//call kernel
$result1=Proccess1();
$result2=Proccess2();
$result3=Proccess3();
$result4=Proccess4();

//call interface
Visual1($result1);
Visual2($result2);
Visual3($result3);
Visual4($result4);


?>