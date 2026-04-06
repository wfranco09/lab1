<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $pulgadas= $_POST["pulgadas"];

    $centimetros = $pulgadas * 2.54;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="../estilos/problema2.css">
</head>
<body>
<form>
<h2>Resultado</h2>
<h3>Las pulgadas ingresadas son: <?php echo $pulgadas; ?></h3>
<h3>El equivalente en centímetros es: <?php echo $centimetros; ?></h3>
</form>
<a href="../opciones.html">Volver</a>

</body>
</html>
