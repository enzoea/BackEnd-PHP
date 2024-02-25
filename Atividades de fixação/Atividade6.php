<?php
    $notas = array(7, 8, 9, 6, 7);
    $total = count($notas);
    $sum = array_sum($notas);
    $media = $sum / $total;
    echo "A média é: " . $media;
?>