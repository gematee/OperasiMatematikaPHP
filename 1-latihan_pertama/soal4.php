<?php
    $beli = 1000;
    $jual = 2000;
    $pajak = 90/100;
    $jumlah = 5;
    $total_beli = $beli*$jumlah;
    $total_jual = $jual*$jumlah;
    $untung_kotor = ($jual-$beli)*$jumlah;
    $untung_bersih = $untung_kotor*$pajak;

    echo "harga_beli = 1000<br> harga_jual = 2000<br> pajak = 10%<br> jumlah_barang =5<br>";
    echo "Tentukan :<br>";
    echo "total harga beli?".$total_beli."<br>";
    echo "total harga jual?".$total_jual."<br>";
    echo "keuntungan kotor?".$untung_kotor."<br>";
    echo "keuntungan bersih?".$untung_bersih."<br>";
?>