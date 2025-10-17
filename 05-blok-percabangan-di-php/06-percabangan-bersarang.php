<?php
$umur = 18;
$punya_ktp = true;

// pengecekan pertama
if ($umur >= 17) {
    // pengecekan kedua (bersarang di dalam if pertama)
    if ($punya_ktp) {
        echo "Kamu sudah cukup umur dan punya KTP.";
    } else {
        echo "Kamu sudah cukup umur, tapi belum punya KTP.";
    }
} else {
    echo "Kamu belum cukup umur untuk membuat KTP.";
}
?>
