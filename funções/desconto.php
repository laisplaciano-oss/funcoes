<?php
function calcularDesconto($valor, $desconto) {
    return $valor - ($valor * $desconto / 100);
}

echo calcularDesconto(200, 10);
?>