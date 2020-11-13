<?php
    $awal = 1000000;
    $bunga = 0.03;
    $bulan = 11;
    $akhir = $awal+($awal*$bulan*$bunga);

    echo "Saldo awal = 1jt<br>";
    echo "Bunga = 3%<br>";
    echo "Saldo akhir adalah ".$bulan." bulan adalah : Rp." .$akhir.",-";
?>