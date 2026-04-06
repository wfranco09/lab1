<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom= $_POST["nombre"];

    $edad = $_POST["edad"];

    if ($edad >= 18) {
        $mensaje = "usted puede votar las próximas elecciones 2028";
    } else {
        $mensaje = "No puedes votar en las próximas elecciones 2028";
    }
    
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="../estilos/problema5.css">
</head>
<body>
<form>
<h2>Resultado</h2>
<h3><?php echo $nom, " ", $mensaje; ?></h3>
</form>
 <br><br>
<a href="../opciones.html">Volver</a>

</body>
</html>