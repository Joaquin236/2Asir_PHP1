<?php

// array1
$numbers=array(13,45,65,76,87,21,32);
// array2
$numbers2=array(3,4,5,6,7,1,2);

// kernel 1 --> execution_array1
function Proccess($numbers) { // declare
    foreach ($numbers as $value) { // foreach_loop index --> $array as $value
        if ($value%2==0) { //condition--> $value % 2 == 0
            $sumando=$value+$value; // sumander --> $value + $value
            echo $sumando . " ";
        }
    }return $sumando;
}

//---------------------------

// kernel 2 --> execution_array2
function Proccess2($numbers2) { // declare
    foreach ($numbers2 as $value2) { // foreach_loop index --> $array as $value
        if ($value2%2==0) { //condition--> $value % 2 == 0
            $sumando2=$value2+$value2; // sumander --> $value + $value
            echo $sumando2 . " ";
        }
    }return $sumando2;
}

//--------------------------------------
// kenerl 3 --> compare the numbers
function Proccess3($numbers) { // declare
    if ($sumando==$sumando2) { // case1 --> array1 == array2
        echo "// DEBUG: THE VALUES IS IDENTITY";
    }elseif ($sumando<$sumando2) { // case 2 array1 < array2
        echo "// DEBUG: THE ARRAY_2 IS MORE";
    }else { // case3 --> last option
        echo "// DEBUG: THE ARRAY_1 IS MORE";
    }
}

// interface
echo "// DEBUG: THE FIRST ARRAY IS --> ";
Proccess($numbers);
echo "<br>";
echo "// DEBUG: THE SECOND ARRAY IS --> ";
Proccess2($numbers2);
echo "<br>";
echo "-------------------------------------------";
echo "<br>";
Proccess3($numbers);
?>