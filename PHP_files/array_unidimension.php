<?php

//variables
$mat = array (
    array(1,2,3,4,5),
    array(6,7,8,9,10),
    array(11,12,13,14,15),
    array(16,17,18,19,20)
);

$table=array();

Pasar($mat,$table);

Visual($table);

Modify_table($table);

Visual($table);

// kernel1
function Pasar ($mat, &$table){
    for ($i=0; $i <count($mat); $i++) { 
        for ($k=0; $k <count($mat[$i]); $k++) {
            $table[]=$mat[$i][$k];
        }
    }
}

// kernel2
function Visual($tab){
    $i=0;
    while ($a <= count($tab)) {
        echo $tab[$i]." ";
        $i++;
    }
    echo "<br>";
}

// kernel3
function Modify_table(&$tab){
    $aux=$tab[count($tab)-1];
    for ($i=count($tab)-2; $i>=0; $i--){
        $tab[$i+1]=$tab[$i];
    }
    $tab[0]=$aux;
}

?>