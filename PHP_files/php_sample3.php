<?php
$notas=array(8,3,7,2);

function Proceso($notas){
	$countn=1;
	for ($x=0; $x<count($notas); $x++){
		if ($notas[$x]>$countn){
			$media=($notas[$x]+$countn)/2;
		}
	}
	$countn+=1;
	return $media;
}

function Visual($data) {
	echo $data;
}

$result=Proceso($notas);
Visual($result);


?>
