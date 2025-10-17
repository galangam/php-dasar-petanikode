<?php
$menu = 2; // variabel pilihan menu

// percabangan switch digunakan untuk memilih berdasarkan nilai variabel
switch ($menu) {

    case 1: // jika $menu bernilai 1
        echo "Anda memilih Nasi Goreng";
        break; // menghentikan proses setelah case ini dijalankan

    case 2: // jika $menu bernilai 2
        echo "Anda memilih Mie Ayam";
        break;

    case 3: // jika $menu bernilai 3
        echo "Anda memilih Sate Ayam";
        break;

    default: // jika tidak ada nilai yang cocok di atas
        echo "Pilihan tidak tersedia.";
}
?>
