<?php
// Membuat cookie (nama, nilai, waktu kedaluwarsa)
setcookie("username", "Galang", time() + 3600); // berlaku 1 jam

echo "Cookie 'username' telah dibuat!<br>";

// Cek apakah cookie sudah ada
if (isset($_COOKIE['username'])) {
    echo "Halo, " . $_COOKIE['username'] . "!<br>";
} else {
    echo "Cookie belum tersedia.<br>";
}
?>
