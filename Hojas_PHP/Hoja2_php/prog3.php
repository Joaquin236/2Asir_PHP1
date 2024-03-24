<?php

//variables

$caja1=12;
$caja2=15;
$caja3=8;
$caja4=14;

$caja5=26;
$caja6=37;
$caja7=59;
$caja8=65;

//----------------------------------

// kernel1
function Proceso1($caja1){
	if($caja1%2==0){
		$status1="El numero1 es multiplo de 2";
	}
	elseif($caja1%3==0){
		$status1="El numero1 es multiplo de 3";
	}
	else{
		$status1="El numero1 no es multiplo de 2 y/o 3";
	}
	return $status1;
}

// kernel2
function Proceso2($caja2){
	if($caja2%2==0){
		$status2="El numero2 es multiplo de 2";
	}
	elseif($caja2%3==0){
		$status2="El numero2 es multiplo de 3";
	}
	else{
		$status2="El numero2 no es multiplo de 2 y/o 3";
	}
	return $status2;
}

// kernel3
function Proceso3($caja3){
	if($caja3%2==0){
		$status3="El numero3 es multiplo de 2";
	}
	elseif($caja3%3==0){
		$status3="El numero3 es multiplo de 3";
	}
	else{
		$status3="El numero3 no es multiplo de 2 y/o 3";
	}
	return $status3;
}

// kernel4
function Proceso4($caja4){
	if($caja4%2==0){
		$status4="El numero4 es multiplo de 2";
	}
	elseif($caja4%3==0){
		$status4="El numero4 es multiplo de 3";
	}
	else{
		$status4="El numero4 no es multiplo de 2 y/o 3";
	}
	return $status4;
}

// kernel5
function Proceso5($caja5){
	if($caja5%2==0){
		$status5="El numero5 es multiplo de 2";
	}
	elseif($caja5%3==0){
		$status5="El numero5 es multiplo de 3";
	}
	else{
		$status5="El numero5 no es multiplo de 2 y/o 3";
	}
	return $status5;
}

// kernel6
function Proceso6($caja6){
	if($caja6%2==0){
		$status6="El numero6 es multiplo de 2";
	}
	elseif($caja6%3==0){
		$status6="El numero6 es multiplo de 3";
	}
	else{
		$status6="El numero6 no es multiplo de 2 y/o 3";
	}
	return $status6;
}

// kernel7
function Proceso7($caja7){
	if($caja7%2==0){
		$status7="El numero7 es multiplo de 2";
	}
	elseif($caja7%3==0){
		$status7="El numero7 es multiplo de 3";
	}
	else{
		$status7="El numero7 no es multiplo de 2 y/o 3";
	}
	return $status7;
}

// kernel8
function Proceso8($caja8){
	if($caja8%2==0){
		$status8="El numero8 es multiplo de 2";
	}
	elseif($caja8%3==0){
		$status8="El numero8 es multiplo de 3";
	}
	else{
		$status8="El numero8 no es multiplo de 2 y/o 3";
	}
	return $status8;
}

//----------------------------

//interface
function Visual($data){
	echo $data;
}

//----------------------------

//call kernel
$result1=Proceso1($caja1);
$result2=Proceso2($caja2);
$result3=Proceso3($caja3);
$result4=Proceso4($caja4);

$result5=Proceso5($caja5);
$result6=Proceso6($caja6);
$result7=Proceso7($caja7);
$result8=Proceso8($caja8);


//call interface
Visual($result1);
echo "<br>";
Visual($result2);
echo "<br>";
Visual($result3);
echo "<br>";
Visual($result4);
echo "<br>";
Visual($result5);
echo "<br>";
Visual($result6);
echo "<br>";
Visual($result7);
echo "<br>";
Visual($result8);

?>
