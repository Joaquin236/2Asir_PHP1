<?php

//variables

$caja1=3;
$caja2=5;
$caja3=5;

$caja4=4;
$caja5=6;
$caja6=7;
$caja7=9;

//----------------------------------

// kernel1
function Proceso1($caja1){
	if($caja1>5){
		$status1="Nota1 aprobada";
	}else{
		$status1="Nota1 suspensa";
	}
	return $status1;
}

// kernel2
function Proceso2($caja2){
	if($caja2>5){
		$status2="Nota2 aprobada";
	}else{
		$status2="Nota2 suspensa";
	}
	return $status2;
}

// kernel3
function Proceso3($caja3){
	if($caja3>5){
		$status3="Nota3 aprobada";
	}else{
		$status3="Nota3 suspensa";
	}
	return $status3;
}

// kernel4
function Proceso4($caja4){
	if($caja4>5){
		$status4="Nota4 aprobada";
	}else{
		$status4="Nota4 suspensa";
	}
	return $status4;
}

// kernel5
function Proceso5($caja5){
	if($caja5>5){
		$status5="Nota5 aprobada";
	}else{
		$status5="Nota5 suspensa";
	}
	return $status5;
}

// kernel6
function Proceso6($caja6){
	if($caja6>5){
		$status6="Nota6 aprobada";
	}else{
		$status6="Nota6 suspensa";
	}
	return $status6;
}

// kernel7
function Proceso7($caja7){
	if($caja7>5){
		$status7="Nota7 aprobada";
	}else{
		$status7="Nota7 suspensa";
	}
	return $status7;
}

//--------------------------

// interface1
function Visual($data){
	echo $data;
}



//----------------------------------

//call the kernels
$result1=Proceso1($caja1);
$result2=Proceso2($caja2);
$result3=Proceso3($caja3);
$result4=Proceso4($caja4);
$result5=Proceso5($caja5);
$result6=Proceso6($caja6);
$result7=Proceso7($caja7);

//----------------------------------

//call the interfaces
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

?>
