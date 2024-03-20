<?php

function Process(){
    for ($i=0; $i<32; $i++){
        $frase="101010101";
    }
    return $frase;
}

function Visual($data) {
    echo $data;    
}

$result=Process();

Visual($result);

?>