<?php
    function calcularAreaCirculo($raio) {
        return pi() * $raio * $raio;
    }

    $raio = 5;
    echo "A área do círculo é: " . calcularAreaCirculo($raio);
?>