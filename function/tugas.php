<?php
// Fungsi untuk mengecek apakah bilangan ganjil
function is_ganjil($n) {
    return $n % 2 != 0;
}

// Inisialisasi variabel jumlah ganjil
$jumlah_ganjil = 0;

// Rentang bilangan dari 10 sampai 123456
for ($bilangan = 10; $bilangan <= 123456; $bilangan++) {
    if (is_ganjil($bilangan)) {
        $jumlah_ganjil++;
    }
}

// Menampilkan jumlah bilangan ganjil
echo "Jumlah bilangan ganjil antara 10 dan 123456 adalah: " . $jumlah_ganjil;
?>
