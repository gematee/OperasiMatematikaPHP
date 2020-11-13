<?php
    $pokok = 1000000;
    $tunjangan = 500000;
    $pajak = ($pokok+$tunjangan)*(15/100);
    $bersih = $pokok+$tunjangan-$pajak;

    echo "Gaji Pokok = " .$pokok. "<br>";
    echo "Tunjangan = " .$tunjangan. "<br>";
    echo "Gaji bersih = " .$bersih. "<br>";
?>