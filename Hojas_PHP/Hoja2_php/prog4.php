<?php

//variables

$caja1=7;
$caja2=15;
$caja3=8;
$caja4=14;

$caja5=26;
$caja6=37;
$caja7=59;

//----------------------------------

// kernel1
function Proceso1($caja1){
	switch ($caja1) {
		case $caja1>40 && $caja1<50:
			$status1="El numero1 está entre 40 y 50";
			break;
		case $caja1 %7 ==0:
			$status1="El numero1 es multiplo de 7";
			break;
		case $caja1 %2 !=0:
			$status1="El numero1 es impar";
			break;
		case $caja1 %2 ==0:
			$status1="El numero1 es par";
			break;
		}
	return $status1;
}

// kernel2
function Proceso2($caja2){
	switch ($caja2) {
		case $caja2>40 && $caja2<50:
			$status2="El numero2 está entre 40 y 50";
			break;
		case $caja2 %7 ==0:
			$status2="El numero2 es multiplo de 7";
			break;
		case $caja2 %2 !=0:
			$status2="El numero2 es impar";
			break;
		case $caja2 %2 ==0:
			$status2="El numero2 es par";
			break;
		}
	return $status2;
}

// kernel3
function Proceso3($caja3){
	switch ($caja3) {
		case $caja3>40 && $caja3<50:
			$status3="El numero3 está entre 40 y 50";
			break;
		case $caja3 %7 ==0:
			$status3="El numero3 es multiplo de 7";
			break;
		case $caja3 %2 !=0:
			$status3="El numero3 es impar";
			break;
		case $caja3 %2 ==0:
			$status3="El numero3 es par";
			break;
		}
	return $status3;
}

// kernel4
function Proceso4($caja4){
	switch ($caja4) {
		case $caja4>40 && $caja4<50:
			$status4="El numero4 está entre 40 y 50";
			break;
		case $caja4 %7 ==0:
			$status4="El numero4 es multiplo de 7";
			break;
		case $caja4 %2 !=0:
			$status4="El numero4 es impar";
			break;
		case $caja4 %2 ==0:
			$status4="El numero4 es par";
			break;
		}
	return $status4;
}

// kernel5
function Proceso5($caja5){
	switch ($caja5) {
		case $caja5>40 && $caja5<50:
			$status5="El numero5 está entre 40 y 50";
			break;
		case $caja5 %7 ==0:
			$status5="El numero5 es multiplo de 7";
			break;
		case $caja5 %2 !=0:
			$status5="El numero5 es impar";
			break;
		case $caja5 %2 ==0:
			$status5="El numero5 es par";
			break;
		}
	return $status5;
}

// kernel6
function Proceso6($caja6){
	switch ($caja6) {
		case $caja6>40 && $caja6<50:
			$status6="El numero6 está entre 40 y 50";
			break;
		case $caja6 %7 ==0:
			$status6="El numero6 es multiplo de 7";
			break;
		case $caja6 %2 !=0:
			$status6="El numero6 es impar";
			break;
		case $caja6 %2 ==0:
			$status6="El numero6 es par";
			break;
		}
	return $status6;
}

// kernel7
function Proceso7($caja7){
	switch ($caja7) {
		case $caja7>40 && $caja7<50:
			$status7="El numero7 está entre 40 y 50";
			break;
		case $caja7 %7 ==0:
			$status7="El numero7 es multiplo de 7";
			break;
		case $caja7 %2 !=0:
			$status7="El numero7 es impar";
			break;
		case $caja7 %2 ==0:
			$status7="El numero7 es par";
			break;
		}
	return $status7;
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

?>
