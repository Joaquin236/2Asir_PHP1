<?php

echo "Ejercicios hoja 2B";

echo "1.-) Cargar o almacenar los valores enteros del 1 al 10 en un array. Visualizarlos a continuación.";

$tab= array();
Proceso ($tab);
Visualizar ($tab);

// ---------- funciones ---------
function Proceso (&$tab){
    for ($i=0; $i < 10; $i++){
        $tab[] = $i+1;
    }
}

function Visualizar ($tab){
    foreach ($tab as $valor){
        echo $valor." ";
    }
}

//---------------------------------------


echo "2.-) Cargar en una matriz 3x5, los valores: en la primera fila todos los valores con 1, en la segunda fila todos con 2 y en la tercera fila todos con 3.";
 
$mat = array(array());

Proceso ($mat);
Visualizar ($mat);

// ---------- funciones -------------
function Proceso (&$mat){
    for ($i = 0; $i < 3; $i++){
        for ($k = 0; $k < 5; $k++){
            $mat[$i][$k] = $i+1;
        }
    }
}

function Visualizar ($mat){
    for ($i = 0; $i < 3; $i++){
        for ($k = 0; $k < 5; $k++){
            echo $mat[$i][$k]." ";
        }
        echo "\n";
    }
}

//---------------------------------------------------

echo "3.-) En una matriz 3x5, obtener el mayor de todos los valores, así como la fila y columna donde está situado.";

$mat = array(array(23,45,67,34,22),
             array(11,65,87,33,21),
             array(3,6,74,36,43) );
      
Proceso ($mat,$fila_mayor, $columna_mayor);
Visualizar ($mat,$fila_mayor, $columna_mayor);

// ---------- funciones -------------
function Proceso ($mat, &$fila_mayor, &$columna_mayor){
    $mayor=-99999;
    for ($i = 0; $i < 3; $i++){
        for ($k = 0; $k < 5; $k++){
            if ($mat[$i][$k] > $mayor){
                $mayor = $mat[$i][$k];
                $fila_mayor = $i;
                $columna_mayor =$k;
            }
        }
    }
}

function Visualizar ($mat, $fila_mayor, $columna_mayor){
   
            echo $mat[$fila_mayor][$columna_mayor]."\n";
            echo "en la fila: ".$fila_mayor." y columna ". $columna_mayor;
}


//----------------------------------------------

echo "4.-) En la matriz. Dado una fila y columna, visualizar el valor correspondiente guardado en la matriz.";

  $mat = array(
             array(23,45,67,34,22),
             array(11,65,87,33,21),
             array(3,6,74,36,43) );
      


$fila = 1;
$columna= 1;

Visualizar ($mat,$fila, $columna);

// ---------- funciones -------------
function Visualizar ($mat, $fila, $columna){
    
   
            echo $mat[$fila][$columna];
            
     
}


//------------------------------------------------


echo " 5.-) En la matriz. Dado una fila  visualizar los valores de esa fila.";

  $mat = array(
             array(23,45,67,34,22),
             array(11,65,87,33,21),
             array(3,6,74,36,43) );
      

      
$fila = 1;

Visualizar ($mat,$fila);

// ---------- funciones -------------
function Visualizar ($mat, $fila){
    
    for ($i=0; $i < 5; $i++){
            echo $mat[$fila][$i]." ";
    }   
     
}

//----------------------------------------

echo "  6.-) Usando una matriz. Dado una columna,  visualizar los valores de esa columna.";

$mat = array(array(23,45,67,34,22),
             array(11,65,87,33,21),
             array(3,6,74,36,43) );
      


$columna = 2;


Visualizar ($mat,$columna);

// ---------- funciones -------------
function Visualizar ($mat, $columna){
    
    for ($i=0; $i < 3; $i++){
            echo $mat[$i][$columna]." ";
    }   
     
}



?>