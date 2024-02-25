<?php
    function adicao($a, $b) {
        return $a + $b;
    }

    function subtracao($a, $b) {
        return $a - $b;
    }

    function multiplicacao($a, $b) {
        return $a * $b;
    }

    function divisao($a, $b) {
        if ($b == 0) {
            return "Divisão por zero não é permitida.";
        } else {
            return $a / $b;
        }
    }

    echo "Soma: " . adicao(5, 3) . "<br>";
    echo "Subtração: " . subtracao(5, 3) . "<br>";
    echo "Multiplicação: " . multiplicacao(5, 3) . "<br>";
    echo "Divisão: " . divisao(5, 3) . "<br>";
?>