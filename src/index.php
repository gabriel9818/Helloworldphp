<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Simple</title>
</head>
<body>
    <h2>Calculadora Simple</h2>
    
    <form method="post">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required>

        <label for="operation">Operación:</label>
        <select name="operation" id="operation" required>
            <option value="add">Sumar</option>
            <option value="subtract">Restar</option>
            <option value="multiply">Multiplicar</option>
            <option value="divide">Dividir</option>
        </select>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $result = null;

        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Error: División por cero";
                }
                break;
            default:
                $result = "Operación no válida";
        }

        echo "<h3>Resultado: $result</h3>";
    }
    ?>
</body>
</html>
