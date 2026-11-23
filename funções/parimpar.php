<?php
function verificar($numero) {
    if ($numero % 2 == 0) {
        return "Par";
    } else {
        return "Ímpar";
    }
}

echo verificar(5);
?>