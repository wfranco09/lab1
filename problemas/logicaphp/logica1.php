<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $radio = $_POST["radio"];

    $area = round(pi() * pow($radio, 2), 2); // poner solo dos decimales
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="../estilos/problema1.css">
</head>
<body>
<form>
<h2>Resultado</h2>
<h3>El radio ingresado es: <?php echo $radio; ?></h3>
<h3>El área de la circunferencia es: <?php echo $area; ?></h3>
</form>
<a href="../opciones.html">Volver</a>
</body>
</html>
