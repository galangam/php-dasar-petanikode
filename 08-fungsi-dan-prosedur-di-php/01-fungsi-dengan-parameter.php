<?php
// mmbuat fungsi
function perkenalan($nama, $salam){
  echo $salam." ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("galang", "Hi selamat pagi");

  echo "<hr>";

  $saya = "Indry";
  $ucapanSalam = "Selamat pagi";
  // memanggilnya lagi
  perkenalan($saya, $ucapanSalam);
?>