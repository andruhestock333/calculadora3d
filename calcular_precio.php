<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Resultado</title>
</head>
<body>
    <div class="container">
        <h2>Resultado</h2>
        <?php
            $costo_material = $_POST['costo_material'];
            $costo_luz = $_POST['costo_luz'];
            $porcentaje_ganancia = $_POST['porcentaje_ganancia'];
            $porcentaje_desgaste = $_POST['porcentaje_desgaste'];
            $horas_operacion = $_POST['horas_operacion'];
            $valor_hora_operador = $_POST['valor_hora_operador'];

            // Cálculo del costo total del material
            $costo_material_total = $costo_material * (1 + $porcentaje_desgaste);

            // Cálculo del costo de luz
            $costo_luz_total = $costo_luz * $horas_operacion;

            // Cálculo del costo de operador
            $costo_operador = $valor_hora_operador * $horas_operacion;

            // Cálculo del costo total
            $costo_total = $costo_material_total + $costo_luz_total + $costo_operador;

            // Cálculo del precio de venta
            $precio_venta = $costo_total * (1 + $porcentaje_ganancia / 100);

            echo "<p>El precio de venta es: $precio_venta</p>";
        ?>
    </div>
</body>
</html>