<?php
    $bilangan = 100;
    $pembagi = 3;
    $sisabagi = $bilangan%$pembagi;
    $hasilbagi = ($bilangan-$sisabagi)/$pembagi;
    
    echo $bilangan." dibagi dengan ".$pembagi." adalah " .$hasilbagi. " sisa " .$sisabagi;

?>