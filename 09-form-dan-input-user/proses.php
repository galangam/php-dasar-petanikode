<?php
// ambil data dari form
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$gender = $_POST['gender'];

// tampilkan hasil
echo "<h2>Data yang kamu kirim:</h2>";
echo "Nama: " . $nama . "<br>";
echo "Umur: " . $umur . "<br>";
echo "Jenis Kelamin: " . $gender . "<br>";
?>
