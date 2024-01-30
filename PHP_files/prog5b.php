<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<form action="prog5c.php" method="post">
<p>Estoy en 5_B</p>
<p>Llamar al 5_C</p>
<p>el sueldo es <?php echo $_POST['salario']; ?></p>

<?php
$auxiliar_nombre=$_SESSION["nombre"];
$auxiliar_ciudad=$_SESSION["ciudad"];

$_SESSION['nombre']=$auxiliar_nombre;
$_SESSION['ciudad']=$auxiliar_ciudad;
?>

<input type="submit" name="enviar" />
</form>
</body>
</html>

