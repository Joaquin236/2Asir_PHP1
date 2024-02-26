<?php

//array_asoc
// array("Key_Day" => value_contagio[array("Sub_Key_City"=> Sub_Value_infections)])
$contagios=array(
$Lunes = array("Chiclana"=> 130, "Conil"=>220, "San_Fernado"=>280),
$Martes = array("Chiclana"=> 138, "Conil"=>228, "San_Fernado"=>288),
$Miercoles = array("Chiclana"=> 230, "Conil"=>201, "San_Fernado"=>380),
$Jueves = array("Chiclana"=> 170, "Conil"=>320, "San_Fernado"=>480),
$Viernes = array("Chiclana"=> 180, "Conil"=>420, "San_Fernado"=>580),
$Sabado = array("Chiclana"=> 70, "Conil"=>71, "San_Fernado"=>100),
$Domingo = array("Chiclana"=> 40, "Conil"=>49, "San_Fernado"=>100)
);

// Kernel-1 --> Contagios_Martes
// declare (args)
function Process_1($contagios, $Lunes, $Martes, $Miercoles, $Jueves, $Viernes, $Sabado, $Domingo) {
    foreach ($Martes as $key => $value) { //loop --> $sub_array as $key => $value
        echo $value . " ";
    }
    echo "<br>Fueros los contagios del martes en las 3 ciudades";
}

// Kernel-2 --> Contagios_Chiclana
// declare (args)
function Process_2($contagios, $Lunes, $Martes, $Miercoles, $Jueves, $Viernes, $Sabado, $Domingo) {
    foreach ($Lunes as $key => $value ) { // loop1 --> $sub_array_Lunes as $key => $value
        if ($value==130) { // the condition show the value of chiclana
            echo $value . " ";
        }
    }
    foreach ($Martes as $key => $value ) { // loop2 --> $sub_array_Martes as $key => $value
        if ($value==138) { // the condition show the value of chiclana
            echo $value . " ";
        }
    }
    foreach ($Miercoles as $key => $value ) { // loop3 --> $sub_array_Miercoles as $key => $value
        if ($value==230) { // the condition show the value of chiclana
            echo $value . " ";
        }
    }
    foreach ($Jueves as $key => $value ) { // loop4 --> $sub_array_Jueves as $key => $value
        if ($value==170) { // the condition show the value of chiclana
            echo $value . " ";
        }
    }
    foreach ($Viernes as $key => $value ) { // loop5 --> $sub_array_Jueves as $key => $value
        if ($value==180) { // the condition show the value of chiclana
            echo $value . " ";
        }
    }
    foreach ($Sabado as $key => $value ) { // loop6 --> $sub_array_Jueves as $key => $value
        if ($value==70) { // the condition show the value of chiclana
            echo $value . " ";
        }
    }
    foreach ($Domingo as $key => $value ) { // loop7 --> $sub_array_Jueves as $key => $value
        if ($value==40) { // the condition show the value of chiclana
            echo $value . " ";
        }
    }
}


// interface
Process_1($contagios, $Lunes, $Martes, $Miercoles, $Jueves, $Viernes, $Sabado, $Domingo);
echo "<br>";
echo "<br>";
Process_2($contagios, $Lunes, $Martes, $Miercoles, $Jueves, $Viernes, $Sabado, $Domingo);
?>