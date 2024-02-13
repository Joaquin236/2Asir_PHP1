<?php

// kernel for 3
function Proccess1(){
    for ($a=0; $a < 11; $a++) { 
        echo $a . " x " . 3 . " = " . $a*3 . "<br>";
    }
}

// kernel for 4
function Proccess2(){
    for ($b=0; $b < 11; $b++) { 
        echo $b . " x " . 4 . " = " . $b*4 . "<br>";
    }
}

// kenel for 5
function Proccess3(){
    for ($c=0; $c < 11; $c++) { 
        echo $c . " x " . 4 . " = " . $c*4 . "<br>";
    }
}

// kernel 6
function Proccess4(){
    for ($d=0; $d < 11; $d++) { 
        echo $d . " x " . 4 . " = " . $d*4 . "<br>";
    }
}

//-----------------
// interface
Proccess1();
echo "-------------------------<br>";
Proccess2();
echo "-------------------------<br>";
Proccess3();
echo "--------------------------<br>";
Proccess4();


?>