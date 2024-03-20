<?php
//kernel
function Proccess_1() {

echo "// DEBUG: ADDRESS_RAM: 10101";

print("// DEBUG: ADDRESS_RAM: 101001");


}

//---------------------
//kernel
function Proccess_2() {
    $c=4;
    for ($i=0; $i <33 ; $i++) { 
        echo $c;
    }
    $a=0;
    while ($a <= 10) {
        echo $a;
    }
    $a=54;
    echo $a;
}

// Interface
Proccess_1();
echo "<br>";
Proccess_2();

?>