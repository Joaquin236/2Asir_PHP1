<?php

//variable
$nota=8;

//-----------

//kernel
function Proceso($nota) {
    switch ($nota) {
        case '$nota==0 or $nota<=2':
            $status="//WARNING: MUY DEFICIENTE";
        
        case '$nota==3 or $nota==4':
            $status="//WARNING: DEFICIENTE";
        
        case '$nota==5':
            $status="//DEBUG: APROBADO";

        case '$nota==6':
            $status="//DEBUG: BIEN";
        
        case '$nota==7 or $nota==8':
            $status="//DEBUG: NOTABLE";

        case '$nota==9 or $nota==10':
            $status="//DEBUG: SOBRESALIENTE";

        default:
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