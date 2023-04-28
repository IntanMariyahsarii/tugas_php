<?php

for ($v = 0; $v <= 8; $v++) { //looping kebawah sampai dengan 8
    echo "</br>"; //print memisahkan antar baris

    for ($b = 0; $b <= $v; $b++) { //looping kesamping kanan
        echo $b; //print angka kesamping setiap looping
    }
}
