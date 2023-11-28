<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Calculadora de Precio de Impresión 3D</title>
</head>
<body>
    <div class="container">
        <h2>Calculadora de Precio de Impresión 3D</h2>
        <form action="calcular_precio.php" method="post">
            <label for="costo_material">Costo de Material por gramo:</label>
            <input type="number" name="costo_material" required step="0.01">
            
            <label for="costo_luz">Costo de Luz por hora:</label>
            <input type="number" name="costo_luz" required step="0.01">
            
            <label for="porcentaje_ganancia">Porcentaje de Ganancia:</label>
            <input type="number" name="porcentaje_ganancia" required step="0.01">
            
            <label for="porcentaje_desgaste">Porcentaje de Desgaste de la Máquina:</label>
            <input type="number" name="porcentaje_desgaste" required step="0.01">
            
            <label for="horas_operacion">Horas de Operación:</label>
            <input type="number" name="horas_operacion" required step="0.01">
            
            <label for="valor_hora_operador">Valor por Hora del Operador:</label>
            <input type="number" name="valor_hora_operador" required step="0.01">
            
            <button type="submit">Calcular Precio</button>
        </form>
    </div>
</body>
</html>