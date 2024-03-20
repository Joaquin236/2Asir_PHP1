<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <input type="text" name="entrada"/>
    <input type="submit" mane="enviar" value="Enviar">
    </form>
</body>
</html>

<?php
//variables iniciales
$_POST["entrada"];
$clave="miclave";

function Process($entrada,$clave) {
    for ($i=0; $i < count($entrada); $i++) { 
        if ($clave==count($entrada)) {
            echo "clave encontrada";
        }else {
            echo "clave no encontrada";
        }
    }
    return $clave;
}

//interfaz
function Visual($dato){
    echo Process($entrada,$clave);
}

//llamar la funcion
Visual($dato);

?>