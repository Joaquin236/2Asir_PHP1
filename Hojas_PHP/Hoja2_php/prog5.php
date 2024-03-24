<?php

//variable de inicio
$numero=1;

//kernel
function Proceso($numero) { //declarar funcion_kernel ($arg)
    $facorial=1; //inicio de factorial
    $contador=1; //inicio de contador-acumulador
    while ($contador <= $numero) { //mientras $contador sea mayor igual a $numero
        $facorial*=$contador; //factorial se multiplica por contador
        $contador++; //incrementar el contador
    }
    return $facorial; //retornar el factorial
    
}

//interface
function Visual($i) { //declarar funcion_interfaz ($arg)
    for ($i=1; $i <= 10; $i++) { //bucle ($variable_incio; $variable <= 10; $incrementar_variable )
        echo "Factorial de " . $i . " es --> " . Proceso($i) . "<br>";
    }
    
}

//llamar al kernel
$result=Proceso($numero);

//llamar la interfaz
Visual($result);

?>