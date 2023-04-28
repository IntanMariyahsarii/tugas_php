<?php
//luas persegi
$sisi = 10;
$luasPersegi = $sisi ** 2;
echo " <b>Rumus Menghitung Luas Persegi</b><br>";
echo " Rumus Luas : L = sisi x sisi<br>";
echo " sisi : $sisi cm<br>";
echo " L = $sisi x $sisi<br>";
echo " Hasil luas pada Persegi adalah : " . $luasPersegi . "<br>" . "<br>";

//luas persegi panjang
$panjang = 10;
$lebar = 4;
$luasPersegiPanjang = $panjang * $lebar;
echo " <b>Rumus Menghitung Luas Persegi Panjang</b><br>";
echo " Rumus Luas : L = panjang x lebar<br>";
echo " panjang : $panjang cm<br>";
echo " lebar : $lebar cm<br>";
echo " L = $panjang x $lebar<br>";
echo " Hasil luas pada Persegi Panjang adalah : " . $luasPersegiPanjang . "<br>" . "<br>";

//luas trapesium
$sisiAtas = 3;
$sisiBawah = 13;
$tinggi = 7;
$luasTrapesium = (($sisiAtas + $sisiBawah) / 2) * $tinggi;
echo " <b>Rumus Menghitung Luas Trapesium</b><br>";
echo " Rumus Luas : L = 1/2 x t(sisi atas + sisi bawah)<br>";
echo " sisi atas : $sisiAtas cm<br>";
echo " sisi bawah : $sisiBawah cm<br>";
echo " tinggi : $tinggi cm<br>";
echo " L = 1/2 x $tinggi($sisiAtas x $sisiBawah)<br>";
echo " Hasil luas pada Trapesium adalah : " . $luasTrapesium . "<br>" . "<br>";

//luas lingkaran
$jariJari = 6;
$phi = 3.14159;
$luasLingkaran = $phi * ($jariJari ** 2);
echo " <b>Rumus Menghitung Luas Lingkaran</b><br>";
echo " Rumus Luas : L = phi x r x r<br>";
echo " phi : $phi<br>";
echo " sr (jari-jari) : $jariJari cm<br>";
echo " L = $phi x $jariJari x $jariJari<br>";
echo " Hasil luas pada Lingkaran adalah : " . $luasLingkaran . "<br>" . "<br>";

//luas segitiga
$alas = 7;
$tinggi = 20;
$luasSegitiga = ($alas * $tinggi) / 2;
echo " <b>Rumus Menghitung Luas Segitiga</b><br>";
echo " Rumus Luas : L = 1/2 x a x t<br>";
echo " alas : $alas cm<br>";
echo " tinggi : $tinggi cm<br>";
echo " L = 1/2 x $alas x $tinggi<br>";
echo " Hasil luas pada Segitiga adalah : " . $luasSegitiga . "<br>" . "<br>";
