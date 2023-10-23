<?php
//Persegi
$panjang_sisi = 15;
$luas_persegi = $panjang_sisi * $panjang_sisi;
echo "Luas Persegi :" . $luas_persegi;

echo "<br>";

//Persegi Panjang
$panjang = 20;
$lebar = 5;
$luas_persegi_panjang = $panjang * $lebar;
echo "Luas Persegi Panjang: " . $luas_persegi_panjang;

echo "<br>";

//Segitiga
$alas = 8;
$tinggi = 10;
$luas_segitiga = 0.5 * $alas * $tinggi;
echo "Luas Segitiga: " . $luas_segitiga;

echo "<br>";

//Lingkaran
$radius = 15;
$luas_lingkaran = M_PI * $radius * $radius; // menggunakan konstanta PI dari PHP
echo "Luas Lingkaran: " . $luas_lingkaran;

echo "<br>";

//Trapesium
$tinggi_trapesium = 15;
$panjang_sisi_atas = 7;
$panjang_sisi_bawah = 9;
$luas_trapesium = 0.5 * ($panjang_sisi_atas + $panjang_sisi_bawah) * $tinggi_trapesium;
echo "Luas Trapesium: " . $luas_trapesium;