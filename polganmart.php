<?php
// Commit 1 - Setup awal
$nama_barang = ["milkku", "beng-beng", "popmie", "coca-cola","waffle"];
$harga_barang = [3000, 1000, 5000, 5000, 2000];

echo "--POLGAN MART--<br>";
echo "Daftar Pembelian<br><br>";

// Commit 2 - Logika pembelian
$beli = [5];
$jumlah = [1];
$total = [7];
$grandtotal = 0;

// pilih barang dan jumlah secara random
for ($i = 0; $i < rand(1,5
); $i++) {
    $beli[$i] = $nama_barang[$i];
    $jumlah[$i] = rand(1, 5); // jumlah random 1-5
    $total[$i] = $harga_barang[$i] * $jumlah[$i];
    $grandtotal += $total[$i];
}

// Commit 3 - Perhitungan total
foreach ($beli as $key => $value) {
    echo "Nama Barang : " . $value . "<br>";
    echo "Harga Barang : " . $harga_barang[$key] . "<br>";
    echo "Jumlah Beli : " . $jumlah[$key] . "<br>";
    echo "Total Harga : " . $total[$key] . "<br><br>";
}

// Commit 4 - Output akhir
echo "-----------------------------<br>";
echo "Total Belanja : " . $grandtotal;
?>
