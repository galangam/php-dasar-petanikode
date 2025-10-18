<?php

// Membuat array
$minuman = array("Kopi", "Teh", "Jus Jeruk");

// Menampilkan sebelum dihapus
echo "Sebelum dihapus:<br>";
print_r($minuman);
echo "<br><br>";

// Menghapus satu elemen (misal 'Teh')
unset($minuman[1]); // indeks 1 = Teh

// Menampilkan setelah dihapus
echo "Setelah dihapus satu elemen:<br>";
print_r($minuman);
echo "<br><br>";

// Menghapus semua isi array
unset($minuman);

// Mengecek apakah array masih ada
echo "Setelah dihapus semua:<br>";
var_dump(isset($minuman)); // false = sudah dihapus
?>
