<?php
// Misalnya, kamu ingin menampilkan pesan yang berbeda berdasarkan usia pengguna:
$usia = 20;

if ($usia < 13) {
    echo "Kamu masih anak-anak.";
} elseif ($usia >= 13 && $usia <= 19) {
    echo "Kamu anak muda.";
} elseif ($usia > 19 && $usia <= 30) {
    echo "Kamu sudah tumbuh menjadi dewasa.";
} else {
    echo "Kamu adalah dewasa.";
}
echo "<p><strong>by : fika laura";