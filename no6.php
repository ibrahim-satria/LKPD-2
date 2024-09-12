<?php
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ],
];

$total_harga = 0;

foreach ($barang as $item) {
    // Menghitung total harga per item
    $harga_item = $item['harga_barang'] * $item['jumlah_beli'];
    
    // Menampilkan nama barang dan harga total per item
    echo $item['nama_barang'] . ": Rp" . number_format($harga_item) . "<br>";
    
    // Menambahkan harga item ke total keseluruhan
    $total_harga += $harga_item;
}

// Menampilkan total harga keseluruhan
echo "<br>Total harga yang harus dibayar adalah: <b>Rp" . number_format($total_harga) . "</b>";
?>
