<?php
// ============================
// PHP Tips & Tricks: Variables
// ============================

// 1. Deklarasi Variabel di PHP
// Variabel di PHP dimulai dengan tanda "$" diikuti nama variabel.
$nama = "ArtisansPrince";
$umur = 21;

// Menampilkan variabel
echo "Nama: $nama, Umur: $umur\n";

// 2. Perubahan Nilai Variabel
// PHP adalah dynamically typed, sehingga kita bisa mengganti tipe data variabel tanpa deklarasi ulang.
$nilai = 100;   // Nilai awal integer
echo "Nilai awal: $nilai\n";

$nilai = "seratus"; // Mengganti nilai menjadi string
echo "Nilai setelah diubah: $nilai\n";

// 3. Variable Variables
// Membuat variabel yang namanya diambil dari nilai variabel lain
$hewan = "kucing";
$$hewan = "meong"; // Sama dengan membuat variabel $kucing

// Mengakses variable variable
echo "Isi variabel kucing: $kucing\n"; // Output: meong

// 4. Scope Variabel (Global dan Lokal)
// Variabel global tidak dapat diakses langsung di dalam fungsi tanpa kata kunci 'global'.
$x = 5; // Variabel global

function tampilkanX() {
    global $x; // Mengakses variabel global di dalam fungsi
    echo "Nilai x dalam fungsi: $x\n";
}

tampilkanX(); // Output: 5

// 5. Konstanta di PHP
// Gunakan konstanta untuk nilai yang tidak ingin diubah
define("VERSION", "1.0.0"); // Konstanta dengan define()
echo "Versi aplikasi: " . VERSION . "\n";

// Konstanta bersifat global dan dapat diakses di manapun
