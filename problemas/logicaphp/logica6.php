<?php
$resultado = "";
$expresion = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expresion = trim($_POST["expresion"] ?? "");

    if ($expresion === "") {
        $error = "Por favor ingresa una operación";
    } else {
        try {
            $resultado = eval('return ' . $expresion . ';');
            $resultado = round($resultado, 4);
        } catch (Throwable $e) {
            $error = "Error en la operación";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Resultado Calculadora</title>
    <link rel="stylesheet" href="../estilos/problema6.css">
    <style>
        .resultado-container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 90%;
            text-align: center;
        }

        .resultado-container h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .expresion-display {
            background: #f0f0f0;
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
            font-size: 1.1rem;
            color: #333;
        }

        .resultado-value {
            font-size: 2.5rem;
            font-weight: bold;
            color: #28a745;
            margin: 20px 0;
            padding: 20px;
            background: #f0f8f0;
            border-radius: 8px;
        }

        .error-message {
            color: #dc3545;
            font-size: 1.1rem;
            margin: 15px 0;
            padding: 15px;
            background: #f8d7da;
            border-radius: 8px;
        }

        .boton-grupo {
            margin-top: 30px;
            display: flex;
            gap: 10px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .boton-grupo button,
        .boton-grupo a {
            padding: 12px 25px;
            font-size: 1rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: bold;
        }

        .boton-nuevo {
            background: #007BFF;
            color: white;
        }

        .boton-nuevo:hover {
            background: #0056b3;
            transform: translateY(-2px);
        }

        .boton-volver {
            background: #6c757d;
            color: white;
            display: inline-block;
        }

        .boton-volver:hover {
            background: #5a6268;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

<div class="resultado-container">
    <h2>Resultado</h2>
    
    <?php if (!empty($expresion)): ?>
        <div class="expresion-display">
            <?php echo htmlspecialchars($expresion); ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($error)): ?>
        <div class="error-message">
            ❌ <?php echo $error; ?>
        </div>
    <?php elseif ($resultado !== ""): ?>
        <div class="resultado-value">
            = <?php echo htmlspecialchars($resultado); ?>
        </div>
    <?php endif; ?>

    <div class="boton-grupo">
        <button class="boton-nuevo" onclick="window.location.href='../problema6.html'">Nueva Operación</button>
        <a href="../opciones.html" class="boton-volver">Volver</a>
    </div>
</div>

</body>
</html>