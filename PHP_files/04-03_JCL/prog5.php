<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST">
<select name="Ciudades" id="">
        Chiclana
        Conil
        Medina
    </select>
</form>
</body>
</html>

<?php
//variable
$tab=[
    array("Nºcuenta"=>2034056,3465748,4768584,4876756,
          "Nombre"=>"Antonio Ruiz","Maria Torres", "Javier Vaquero","Laura Moreno",
          "Saldo"=>1000,38000,25000,18000,
          "Ciudad"=>"Chiclana","Chiclana","Conil","Medina")
    ];

// kernel1
function Process1($tab) {
    foreach ($tab as $Ciudad => $value) {
        $ciudad=$tab[3];
    }
    return $ciudad;
}

//kernel2
function Process2($tab) {
    foreach ($tab as $Saldo => $value) {
        if ($tab[2]>10000) {
            for ($i=0; $i < count($tab[1]); $i++) {
                $nombres=$tab[1];
            }
        }
    }
    return $nombres;
}

//kernel3
function Process3($tab){
    foreach ($tab as $Ciudad => $value) {
        foreach ($tab as $Saldo => $value) {
            $media=($tab[2]+$tab[2])/2;
        }
    }
    return $media;
}

//interfaz1
function Visual1($dato){
    echo Process1($tab);
}


//interfaz2
function Visual2($dato){
    echo Process2($tab);
}



//interfaz3
function Visual3($dato){
    echo Process3($tab);
}


//llamar a la interfaz
Visual1($dato);
echo "<br>";

Visual2($dato);
echo "<br>";

Visual3($dato);

?>