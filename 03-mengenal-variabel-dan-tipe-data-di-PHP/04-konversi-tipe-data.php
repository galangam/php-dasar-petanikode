<?php
echo "<h2>Konversi (Type Casting) Tipe Data di PHP</h2>";

//  String → Integer
$nilai_string = "100";
$nilai_integer = (int)$nilai_string;
echo "String ke Integer:<br>";
echo "Sebelum: "; var_dump($nilai_string);
echo "<br>Sesudah: "; var_dump($nilai_integer);
echo "<br><br>";

// Integer → Float
$angka_int = 25;
$angka_float = (float)$angka_int;
echo "Integer ke Float:<br>";
echo "Sebelum: "; var_dump($angka_int);
echo "<br>Sesudah: "; var_dump($angka_float);
echo "<br><br>";

// Float → Integer
$angka_desimal = 99.99;
$angka_bulat = (int)$angka_desimal;
echo "Float ke Integer:<br>";
echo "Sebelum: "; var_dump($angka_desimal);
echo "<br>Sesudah: "; var_dump($angka_bulat);
echo "<br><br>";

//  String → Boolean
$text = "PHP itu keren";
$boolean = (bool)$text;
echo "String ke Boolean:<br>";
echo "Sebelum: "; var_dump($text);
echo "<br>Sesudah: "; var_dump($boolean);
echo "<br><br>";

//  Integer → String
$angka = 1234;
$teks = (string)$angka;
echo "Integer ke String:<br>";
echo "Sebelum: "; var_dump($angka);
echo "<br>Sesudah: "; var_dump($teks);
echo "<br><br>";

//  Boolean → Integer
$benar = true;
$angka_boolean = (int)$benar;
echo "Boolean ke Integer:<br>";
echo "Sebelum: "; var_dump($benar);
echo "<br>Sesudah: "; var_dump($angka_boolean);
echo "<br><br>";

//  NULL → String
$kosong = null;
$hasil = (string)$kosong;
echo "NULL ke String:<br>";
echo "Sebelum: "; var_dump($kosong);
echo "<br>Sesudah: "; var_dump($hasil);
echo "<br><br>";
?> 