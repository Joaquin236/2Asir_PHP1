<?php

//variables
$usuario1="Alice";
$usuario2="Bob";
$usuario3="Charlie";
$usuario4="Donna";

$usuario5="Erika";
$usuario6="Frank";
$usuario7="Joaquin";
$usuario8="Rogelio";

//-----------------------
//kernel
function Proceso($usuario1,$usuario2,$usuario3,$usuario4,$usuario5,$usuario6,$usuario7,$usuario8){
    if ($usuario1=="Rogelio" || $usuario2=="Rogelio" || $usuario3=="Rogelio" || $usuario4=="Rogelio" || $usuario5=="Rogelio" || $usuario6=="Rogelio" || $usuario7=="Rogelio" || $usuario8="Rogelio") {
        $status="Usuario Rogelio localizado";
    }else {
        $status="Usuario Rogelio no localizado";
    }
    return $status;
}

//---------------------------
//interface
function Visual($data){
    echo $data;
}

//call kernel
$result=Proceso($usuario1,$usuario2,$usuario3,$usuario4,$usuario5,$usuario6,$usuario7,$usuario8);

//call interface
Visual($result);