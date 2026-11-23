
<?php

function somar($a, $b) {
    return $a + $b;
}

function subtrair($a, $b) {
    return $a - $b;
}

function multiplicar($a, $b) {
    return $a * $b;
}

function dividir($a, $b) {
    if ($b == 0) {
        return "Não é possível dividir por zero!";
    }
    return $a / $b;
}

$resultado = "";

if (isset($_POST['calcular'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['operacao'];

    switch ($operacao) {

        case "somar":
            $resultado = somar($num1, $num2);
            break;

        case "subtrair":
            $resultado = subtrair($num1, $num2);
            break;

        case "multiplicar":
            $resultado = multiplicar($num1, $num2);
            break;

        case "dividir":
            $resultado = dividir($num1, $num2);
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>

    <h1>Calculadora PHP</h1>

    <form method="POST">

        <label>Primeiro número:</label>
        <input type="number" step="any" name="num1" required>

        <br><br>

        <label>Segundo número:</label>
        <input type="number" step="any" name="num2" required>

        <br><br>

        <label>Escolha a operação:</label>

        <select name="operacao">
            <option value="somar">Adição (+)</option>
            <option value="subtrair">Subtração (-)</option>
            <option value="multiplicar">Multiplicação (*)</option>
            <option value="dividir">Divisão (/)</option>
        </select>

        <br><br>

        <button type="submit" name="calcular">
            Calcular
        </button>

    </form>

    <h2>Resultado: <?php echo $resultado; ?></h2>

</body>
</html>
