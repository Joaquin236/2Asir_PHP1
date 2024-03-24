<?php

//variables

$caja1=43;
$caja2=45;
$caja3=45;

$caja4=45;
$caja5=45;
$caja6=45;

//----------------------------------

// kernel1
function Proceso1($caja1,$caja2,$caja3,$caja4,$caja5,$caja6){
	if($caja1<100 or $caja2<100 or $caja3<100 or $caja4<100 or $caja5<100 or $caja6<100){
		$status="Los valores númericos son menores de 100";
		}
	else{
		$status="Los valores númericos son mayores de 100";			
		}
	return $status;
}

// kernel2
function Proceso2($caja1,$caja2,$caja3,$caja4,$caja5,$caja6){
	if($caja1<500 or $caja2<500 or $caja3<500 or $caja4<500 or $caja5<500 or $caja6<500){
		$status="Los valores númericos son menores de 500";
		}
	else{
		$status="Los valores númericos son mayores de 500";			
		}
	return $status;
}

// kernel3
function Proceso3($caja1,$caja2,$caja3,$caja4,$caja5,$caja6){
	if($caja1<2000 or $caja2<2000 or $caja3<2000 or $caja4<2000 or $caja5<2000 or $caja6<2000){
		$status="Los valores númericos son menores de 2000";
		}
	else{
		$status="Los valores númericos son mayores de 2000";			
		}
	return $status;
}

//----------------------------------

// interface1
function Visual1($data){
	echo $data;
}

// interface2
function Visual2($data){
	echo $data;
}

// interface3
function Visual3($data){
	echo $data;
}

//----------------------------------

//call the kernels
$result1=Proceso1($caja1,$caja2,$caja3,$caja4,$caja5,$caja6);
$result2=Proceso2($caja1,$caja2,$caja3,$caja4,$caja5,$caja6);
$result3=Proceso3($caja1,$caja2,$caja3,$caja4,$caja5,$caja6);

//----------------------------------

//call the interfaces
Visual1($result1);
echo "<br>";
Visual2($result2);
echo "<br>";
Visual3($result3);

?>
