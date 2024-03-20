<?php

//variable
$nota=8;

//-----------

//kernel
function Proceso($nota) {
    if ($nota==0 or $nota<=2) {
        $status="//WARNING: MUY DEFICIENTE";
    }elseif ($nota==3 or $nota==4) {
        $status="//WARNING: DEFICIENTE";
    }elseif ($nota==5) {
        $status="//DEBUG: APROBADO";
    }elseif ($nota==6) {
        $status="//DEBUG: BIEN";
    }elseif ($nota==7 or $nota==8) {
        $status="//DEBUG: NOTABLE";
    }elseif ($nota==9 or $nota==10) {
        $status="//DEBUG: SOBRESALIENTE";
    }else {
        $status="//ERROR, ERROR: FAILTURE TO VERIFICATED. ERROR CODE --> 0x978431FFF";
    }
    return $status;
}


//interface
function Visual($data) {
    echo $data;
}

//-------------------------

//call the kernel
$result=Proceso($nota);

//call the interface
Visual($result);

?>