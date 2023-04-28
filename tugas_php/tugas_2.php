<?php

$bintang = 9; //menginisialisasi jumlah bintang

for ($v = 1; $v <= $bintang; $v++) { // looping bintang pertama - looping ke bawah
    for ($b = $bintang; $b >= $v; $b -= 1) { //looping bintang kedua - looping samping
        echo "*"; //print bintang
    }
    echo "<br>"; //print memisahkan setiap  baris bintang
}
