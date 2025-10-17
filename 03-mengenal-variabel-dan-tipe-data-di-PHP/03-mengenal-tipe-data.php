   <?php
echo "<h2>Data Diri Menggunakan Berbagai Tipe Data PHP</h2>";

// 1️⃣ Tipe Data Char (Karakter)
$inisial = 'G';
echo "Tipe Data Char (Karakter): $inisial <br><br>";

// 2️⃣ Tipe Data String (Teks)
$nama = "Galang";
echo "Tipe Data String (Teks): $nama <br><br>";

// 3️⃣ Tipe Data Integer (Angka Bulat)
$umur = 16;
echo "Tipe Data Integer (Angka): $umur <br><br>";

// 4️⃣ Tipe Data Float (Angka Pecahan)
$tinggi = 170.5;
echo "Tipe Data Float (Pecahan): $tinggi cm<br><br>";

// 5️⃣ Tipe Data Boolean (Benar/Salah)
$isStudent = true;
echo "Tipe Data Boolean: ";
echo $isStudent ? "Benar (True)" : "Salah (False)";
echo "<br><br>";

// 6️⃣ Tipe Data Object
class Siswa {
    public $nama;
    public $kelas;

    function __construct($nama, $kelas) {
        $this->nama = $nama;
        $this->kelas = $kelas;
    }

    function tampilkan() {
        echo "Tipe Data Object: Nama = $this->nama, Kelas = $this->kelas<br><br>";
    }
}

$siswa1 = new Siswa("Galang", "XI RPL");
$siswa1->tampilkan();


// 7️⃣ Tipe Data Array
$hobi = array("Ngoding", "Main Game", "Olahraga");
echo "Tipe Data Array:<br>";
echo "- $hobi[0]<br>";
echo "- $hobi[1]<br>";
echo "- $hobi[2]<br><br>";

// 8️⃣ Tipe Data NULL
$nilai = null;
echo "Tipe Data NULL: ";
var_dump($nilai);
?>
