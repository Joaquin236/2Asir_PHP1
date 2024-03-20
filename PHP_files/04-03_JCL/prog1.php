<?php
//numeros tabla 3x5
$matrix=[
    array(4,2,3,6,2),
    array(4,2,3,6,2),
    array(4,2,3,6,2)];
// kernel
function Process($matrix) {
    for ($i=0; $i < count($matrix); $i++) {
        if ((count($matrix)+count($matrix))/2) {
            $tab=array("primera","segunda","tercera");
            echo $tab;
        }else {
            $media=(count($matrix)+count($matrix)/2);
        }
    }
    return $media;
}
// interfaz
function Visual($dato) {
    echo Process($matrix);
}

// llamar la interfaz
Visual($dato);
?>
