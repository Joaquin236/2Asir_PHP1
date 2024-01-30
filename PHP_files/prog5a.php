<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<form action="prog5b.php" method="post">
    <?php
    $_SESSION["nombre"]="Joaquin";
    $_SESSION["ciudad"]="Chiclana";



?>
    <p>Estoy en 5_A</p>
    <p>Llamar al 5_B</p>
    <input type="submit" name="enviar" />

    <input type="hidden" name="salario" value="2111">
</form>




</body>
</html>
