<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
</head>
<body>
    <h1>Calculadora en PHP</h1>
    
    <?php
    $resultado = "";
    
    if (isset($_POST['calcular'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];
        
        if ($operacion == 'suma') {
            $resultado = $num1 + $num2;
        } elseif ($operacion == 'resta') {
            $resultado = $num1 - $num2;
        } elseif ($operacion == 'multiplicacion') {
            $resultado = $num1 * $num2;
        } elseif ($operacion == 'division') {
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = "Error: No se puede dividir por cero.";
            }
        }
    }
    ?>
    
    <form method="post" action="">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" value="<?php echo isset($num1) ? $num1 : ''; ?>" required><br>
        
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" value="<?php echo isset($num2) ? $num2 : ''; ?>" required><br>
        
        <label for="operacion">Operación:</label>
        <select name="operacion" id="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select><br>
        
        <input type="submit" name="calcular" value="Calcular">
    </form>
    
    <?php
    if (isset($_POST['calcular'])) {
        echo "<p>Resultado: $resultado</p>";
    }
    ?>
    
    <form method="post" action="">
        <input type="submit" name="borrar" value="Borrar">
    </form>
</body>
</html>
