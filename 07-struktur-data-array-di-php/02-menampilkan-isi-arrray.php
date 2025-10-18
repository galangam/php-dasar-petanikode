<?php

// membuat array kosong
$buah = array();
$hobi = [];

// membuat array sekaligus mengisinya
$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

// membuat array dengan mengisi indeks tertentu
$anggota[1] = "Dian";
$anggota[2] = "Muhar";
$anggota[0] = "Petani Kode";

// ============================
// Cara memanggil isi array
// ============================

// 1️ Memanggil satu elemen array
echo "Minuman favorit: " . $minuman[0] . "<br>";  // "Kopi"
echo "Makanan favorit: " . $makanan[1] . "<br>";  // "Soto"
echo "Anggota pertama: " . $anggota[0] . "<br><br>";  // "Petani Kode"

// 2️ Menampilkan semua isi array dengan perulangan foreach
echo "Daftar Minuman:<br>";
foreach ($minuman as $minum) {
    echo "- $minum<br>";
}

echo "<br>Daftar Makanan:<br>";
foreach ($makanan as $makan) {
    echo "- $makan<br>";
}

echo "<br>Daftar Anggota:<br>";
foreach ($anggota as $orang) {
    echo "- $orang<br>";
}
?>
