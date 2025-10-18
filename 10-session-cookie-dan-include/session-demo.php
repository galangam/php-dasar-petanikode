<?php
// Memulai session
session_start();

// Membuat session
$_SESSION['nama'] = "Galang";
$_SESSION['status'] = "Online";

// Menampilkan session
echo "<h2>Demo Session</h2>";
echo "Nama: " . $_SESSION['nama'] . "<br>";
echo "Status: " . $_SESSION['status'] . "<br>";

// Menghapus session (opsional, contoh aja)
session_destroy();
echo "<br>Session sudah dihapus!";
?>
