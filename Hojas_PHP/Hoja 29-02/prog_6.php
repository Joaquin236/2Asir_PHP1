<?php

//arrays
$tab_1=array(43,7,4,76,33,90,16,5);
$tab_2=[$tab_1];

//kernel
function Process($tab_1,$tab_2) {
    // loop --> start_index --> index < count($tab_1) --> $i++
    for ($i=0; $i <count($tab_1) ; $i++) {
        if ($i<$i[0]) { //condition --> $i < $i[index_0]
            $tab_2=$tab_1[$i]; //tab2=tab1[$index]
            echo $tab_1;
        }else { //condition_alternative
            echo $i . " ";
        }
    }
}

Process($tab_1,$tab_2);

?>