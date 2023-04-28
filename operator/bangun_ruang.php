<?php
//volume pada kubus 
$sisi = 10;
$volumeKubus = $sisi ** 3;
echo " <b>Rumus Menghitung Volume Kubus</b><br>";
echo " Rumus Volume : V = sisi x sisi x sisi<br>";
echo " Sisi : $sisi cm<br>";
echo " V = $sisi x $sisi x $sisi<br>";
echo " Hasil volume pada Kubus adalah : " . $volumeKubus . "<br>" . "<br>";

// volume balok
$panjang = 10;
$lebar = 8;
$tinggi = 6;
$volumeBalok = $panjang * $lebar * $tinggi;
echo " <b>Rumus Menghitung Volume Balok</b><br>";
echo " Rumus Volume : V = panjang x lebar x tinggi<br>";
echo " panjang : $panjang cm<br>";
echo " lebar : $lebar cm<br>";
echo " tinggi : $tinggi cm<br>";
echo " V = $panjang x $lebar x $tinggi<br>";
echo " Hasil volume pada Kubus adalah : " . $volumeBalok . "<br>" . "<br>";

//volume limas
$p = 1 / 3;
$la = 32;
$t = 16;
$volumeLimas = $p * $la * $t;
echo " <b>Rumus Menghitung Volume Limas</b><br>";
echo " Rumus Volume : V = 1/3 x Luas Alas x Tinggi<br>";
echo " Luas Alas : $la cm<br>";
echo " Tinggi : $t cm<br>";
echo " V = 1/3 x $la x $t  <br>";
echo " Hasil volume pada Limas adalah : " . $volumeLimas;
