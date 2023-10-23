<?php
//Menghitung volume kubus
$sisiKubus = 5;
$volumeKubus = $sisiKubus * $sisiKubus * $sisiKubus;  // sisiKubus * sisiKubus * sisiKubus
echo "Volume Kubus dengan sisi $sisiKubus adalah $volumeKubus satuan kubik.";
echo "<br>";

//Menghitung panjang, lebar, dan tinggi untuk balok
$panjang = 8;
$lebar = 5;
$tinggi = 2;
$volume_balok = $panjang * $lebar * $tinggi;    //Panjang * Lebar * Tinggi
echo "Volume Balok dengan panjang $panjang, lebar $lebar, dan tinggi $tinggi adalah $volume_balok satuan kubik.";
echo "<br>";

//Menampilkan volume prisma dengan luas alas prisma dan tinggi prisma
$luas_alas_prisma = 45;
$tinggi_prisma = 10;
$volume_prisma_segitiga = $luas_alas_prisma * $tinggi_prisma;   // alas * tinggi
echo "Volume Prisma dengan luas alas prisma $luas_alas_prisma, tinggi prisma $tinggi_prisma adalah $volume_prisma_segitiga satuan kubik.";