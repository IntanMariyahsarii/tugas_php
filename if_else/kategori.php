<?php

$nama = "Intan Mariyahsari";
$tb = 159;
$bb = 55;

$tb = $tb / 100;

$bmi = $bb / ($tb * $tb);

$resultBmi = "";

if ($bmi < 18.5) {
    $resultBmi  = "Kurus";
} elseif ($bmi >= 18.5 && $bmi < 24.9) {
    $resultBmi  = "Sedang";
} elseif ($bmi >= 24.9 && $bmi < 29.9) {
    $resultBmi  = "Gemuk";
} else {
    $resultBmi  = "Obesitas";
}

echo "Halo $nama. Nilai BMI anda adalah $bmi, anda termasuk ($resultBmi)";
