<?php
// dado 6 numeros visualizar entre ellos esta el valor -99
if (!isset($_POST['enviar'])){
?>
<html>
<h1> Hoja 10 </h1>
<h2> Ejercicio 9 </h2>

    <body>
    <p>9.-) Dados 7 números en 7 cajas de texto html, visualizar si o no está
ordenados ascendentemente.
</p>

        <form method="post">
    
   Numero 1: <input type="text" name="numero1"><br>
     Numero 2: <input type="text" name="numero2"><br>
      Numero 3: <input type="text" name="numero3"><br>
       Numero 4: <input type="text" name="numero4"><br>
        Numero 5: <input type="text" name="numero5"><br>
         Numero 6: <input type="text" name="numero6"><br>
          Numero 7: <input type="text" name="numero7"><br>
           
    <input type="submit" name="enviar">
        </form>
    </body>

</html>
<?php
} 
else{
//--- Recoge el valor de un formulario ---//

// -------- Programa principal --------//

Orden();
}

//-------- Funciones ---------//

function Orden(){
	$i=-99;
	$sw=false;
	while($sw==true && $i<=7){
		$ant=$_POST['numero'.($i-1)];
		if($ant>$_POST['numero'.$i])
			$sw=true;
		$i++;
	}
	if($sw==false)
		echo "No hay -99<br>";
	else 
		echo "-99 localizado<br>";
  }
?>