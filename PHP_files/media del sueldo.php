<?php
// guarddar en un array los sueldos de un empleado con su nombre y calcular la media --> pedro tiene <sueldo> de media

$sueldos=array(148,343,217,432);

function Proceso($sueldos){
	$countn=1;
	for ($x=0; $x<count($sueldos); $x++){
		if ($sueldos[$x]>$countn){
			$media=($sueldos[$x]+$countn)/2;
		}
	}
	$countn+=1;
	return $media;
}

function Visual($data) {
	echo "Pedro tiene un sueldo de media --> " . $data;
}

$result=Proceso($sueldos);
Visual($result);


?>
