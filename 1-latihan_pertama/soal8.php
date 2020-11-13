<?php
    $barang = "kaos olahraga";
    $beli = 30000;
    $jual = 40000;
    $pajak = 85/100;
    $jumlah = 10;
    $total_beli = $beli*$jumlah;
    $total_jual = $jual*$jumlah;
    $laba_kotor = ($jual-$beli)*$jumlah;
    $laba_untung = $laba_kotor*$pajak;

    echo "Nama Barang = ".$barang."<br>";
    echo "Total Pembelian = ".$total_beli."<br>";
    echo "Total Penjualan = ".$total_jual."<br>";
    echo "Laba Kotor = ".$laba_kotor."<br>";
    echo "Laba Bersih = ".$laba_untung."<br>";

?>