<?php
$nama = "Maieka";
$berat = 48;
$tinggi = 1.52;
$bmi = $berat / ($tinggi * $tinggi);

if ($bmi <= 18.5) {
    $output = "Kurus";
} elseif ($bmi > 18.5 and $bmi <= 24.9) {
    $output = "Ideal";
} elseif ($bmi > 24.9 and $bmi <= 29.9) {
    $output = "Gemuk";
} elseif ($bmi > 30.0) {
    $output = "Obesitas";
};

echo "Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk $output.";