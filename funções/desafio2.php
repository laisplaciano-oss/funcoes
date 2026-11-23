
<?php

if (isset($_POST['enviar'])) {

    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];

    if ($sexo == "feminino" && $idade < 25) {
        echo "Nome: " . $nome . "<br>";
        echo "Mensagem: ACEITA";
    } else {
        echo "Nome: " . $nome . "<br>";
        echo "Mensagem: NÃO ACEITA";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio PHP</title>
</head>
<body>

    <h1>Cadastro</h1>

    <form method="POST">

        Nome:
        <input type="text" name="nome" required>
        <br><br>

        Sexo:
        <select name="sexo" required>
            <option value="feminino">Feminino</option>
            <option value="masculino">Masculino</option>
        </select>
        <br><br>

        Idade:
        <input type="number" name="idade" required>
        <br><br>

        <button type="submit" name="enviar">
            Enviar
        </button>

    </form>

</body>
</html>
