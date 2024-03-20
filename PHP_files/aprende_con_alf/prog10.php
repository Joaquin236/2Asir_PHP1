<?php
/*
Construir una función que permita hacer búsqueda de inmuebles
en función de un presupuesto dado. La función recibirá como entrada
la lista de inmuebles y un precio, y devolverá otra lista con
los inmuebles cuyo precio sea menor o igual que el dado.
Los inmuebles de la lista que se devuelva deben incorporar
un nuevo par a cada diccionario con el precio del inmueble,
donde el precio de un inmueble se calcula con las siguiente
fórmula en función de la zona:


Zona A: precio = (metros * 1000 + habitaciones * 5000 + garaje * 15000) * (1-antiguedad/100)
Zona B: precio = (metros * 1000 + habitaciones * 5000 + garaje * 15000) * (1-antiguedad/100) * 1.5

https://aprendeconalf.es/docencia/python/ejercicios/programacion-funcional/


*/
//----------------------------------------------------------------
// arrray asociative
$inmuebles =array("year" => 2000, "metros" => 100, "rooms" => 3, "garage" => 1, "zona" => 'A',
                  "year" => 2012, "metros" => 60, "rooms" => 2, "garage" => 1, "zona" => 'B',
                  "year" => 1980, "metros" => 120, "rooms" => 4, "garage" => 0, "zona" => 'A',
                  "year" => 2005, "metros" => 75, "rooms" => 3, "garage" => 1, "zona" => 'B',
                  "year" => 2015, "metros" => 90, "rooms" => 3, "garage" => 0, "zona" => 'A');

/*$inmuebles =array("year" => 2000, "metros" => 100, "rooms" => 3, "garage" => True, "zona" => 'A');*/

function Proceso($inmuebles){
    foreach ($inmuebles as $key => $value) {
        echo $value;
        $precio=($value["metros"]*1000 + $value["rooms"]*5000 + $value["garage"]*15000 *(1-($value["year"]-2024)/100) );
        echo $precio;
    }
    return $value;
    
}

function Visual($inmuebles){
    $result=Proceso($inmuebles);
       
}

Visual($inmuebles);
 

?>