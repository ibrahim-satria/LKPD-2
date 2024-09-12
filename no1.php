<?php
    // Mendefinisikan kalimat yang akan diperiksa
    $teks = "Selamat ulang tahun yang ke-17!";

    // Mencari semua simbol (karakter yang bukan huruf atau spasi)
    preg_match_all('/[^a-zA-Z\s]/', $teks, $matches);

    // Memeriksa apakah ada simbol yang ditemukan
    if (count($matches[0]) > 0) {
        // Menghapus elemen duplikat dari sebuah array
        $uniqueSymbol = array_unique($matches[0]); //

        // Menampilkan simbol yang ditemukan  // menggabungkan dua array menjadi satu string
        echo "Karakter yang terdapat pada kalimat: " . implode(',', $uniqueSymbol);
    } else {
        // Menampilkan pesan jika tidak ada simbol
        echo "Tidak terdapat simbol pada kalimat.";
    }
?>
