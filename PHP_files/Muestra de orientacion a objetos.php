<?php
/*
Un objeto lleva 2 elementos:
1º Los datos del objeto
2º Las funciones:
instrucciones que trabajan los datos
de objetos.
La estructura es la clase
*/
class Elemento
{
    public function Inicio($nom) {
        $this->nombre=$nom;
    }
    public function Execution() {
        echo $nom;
    }
    public function End() {
        echo "End";   
    }
}

$obj_1=new Elemento();
$obj_1->Inicio();
$obj_1->Execution('Ana');
/*
Herencia de clases--> una clase base distribuye a la clase hederadas

class base

class hija extends class base

Constructor --> funcion sin nombre personalizado,
se ejecuta automaticamente cuando se activa el objeto

Encapsular --> encierra los objetos en las funciones

Poliformismo --> funciones que repiten su nombre en distintos niveles
La funcion de la base se llama igual que la funcion hija

//-----------------------------------------------------
declara una clase con un alumno, verficar si su nota esta aprobada o suspensa
*/
final class Alumno
{
    public function Inicio($nom,$nota1)
    {
        $this->nombre=$nom;
        $this->nota1=$nota1;

    }
    public function Execution()
    {
        echo "LOADING ... ";
        echo "NAME OF ALUMN --> " . $nom;
        if ($nota1<5) {
            echo "APROBADO";
        }else {
            echo "SUSPENSO";
        }
    }
}

$alumn=new Alumno();
$alumn->Inicio('Joaquin');
$alumn->Execution();

//----------------------
// declara un array con 5 numeros y visualizar la media

class Media_Array 
{
    public function __construct()
    {
        $numeros=array(4,6,8,1,2);
    }

    function Execution($numeros) {
        foreach ($numeros as $value) {
            if ($numeros>=1) {
                $media=$numeros/3;
                echo $media;
            }else {
                echo "fail";
            }
        }   
    }
}
$media=new Media_Array();
$media->Execution();




?>
