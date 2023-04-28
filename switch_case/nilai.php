<?php

$nilai = 0;

switch ($nilai) {
    case $nilai >= 90:
        echo "Kategori nilai Anda termasuk kategori A";
        break;
    case $nilai >= 80:
        echo "Kategori nilai Anda termasuk kategori B";
        break;
    case $nilai >= 70:
        echo "Kategori nilai Anda termasuk kategori C";
        break;
    case $nilai >= 60:
        echo "Kategori nilai Anda termasuk kategori D";
        break;
    default:
        echo "Kategori nilai Anda termasuk kategori E";
}
