<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AVG_NOTES</title>
    <style>
        #zone1{
            width: 10px;
        }
        #zone2{
            width: 10px;
        }
        #zone3{
            width: 10px;
        }
    </style>
    <!------- en un formulario donde se guarda las notas de de una asignatura. Mostrar la asinatura con más nota media -->
</head>
<body>
    <form method="post">
        <div id="zone1">
        <!---- zona de la asignatura ----->
            <label for="asignatura">Asignatura</label>
            <input type="text" name="asignatura" id="asignatura"/><br>
        </div>
        <div id="zone2">
        <!---- zona de las notas------>
            <!---- nota1---->
            <label for="nota1">Nota_1</label>
            <input type="text" name="nota1" id="nota1"/><br>

            <!----- nota2 ---------->
            <label for="nota2">Nota_2</label>
            <input type="text" name="nota2" id="nota2"/><br>

            <!----- nota3---->
            <label for="nota3">Nota_3</label>
            <input type="text" name="nota3" id="nota3"/><br>

        </div>
        <div id="zone3">
            <br><!----- boton ----->
            <input type="submit" value="Enviar">
        </div>
        <br>
    </form>

    <?php


function Process(){
    // DEBUG: INFORMATION FORM
    echo "Asignatura --> " . $_POST["asignatura"] . "<br>";
    echo "Nota_1 --> " . $_POST["nota1"] . "<br>";
    echo "Nota_2 --> " . $_POST["nota2"] . "<br>";
    echo "Nota_3 --> " . $_POST["nota3"] . "<br>";
    //-------------
    // DEBUG: LOADING AVERAGE
    /*$notas=array("nota1" => $_POST["nota1"], "nota2" => $_POST["nota2"], "nota3" => $_POST["nota3"]); //array
    
    echo "<br>"; //jump line
    
    var_dump($notas) . "<br>";*/ // array_debugger
    
    //avg calc
    $avg=($_POST["nota1"]+$_POST["nota2"]+$_POST["nota3"])/2;
    echo "<br><br>El promedio de las notas es --> " . $avg;
    if ($avg>=10) {
        echo "<BR> // DEBUG: MATRICULA DETECTADA";
    }else {
        echo "<BR> // DEBUG: MATRICULA NO DETECTADA";
    }
    
}

Process();



?>
</body>
</html>
