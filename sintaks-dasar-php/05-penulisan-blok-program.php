<?php

// Membuka blok program PHP
echo "Contoh Penulisan Blok Program PHP<br>";

// Deklarasi variabel
$nama = "Galang";
$umur = 16;

// Blok program menggunakan struktur kontrol
if ($umur >= 17) {
    echo "$nama sudah cukup umur untuk memiliki KTP.<br>";
} else {
    echo "$nama belum cukup umur untuk memiliki KTP.<br>";
}

// Blok perulangan
for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-$i<br>";
}

// Fungsi dengan blok program
function sapa($orang) {
    echo "Halo, $orang! Selamat belajar PHP.<br>";
}

sapa($nama);

?>
