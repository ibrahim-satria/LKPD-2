<?php

function wrapText($text) {
    $count = str_split($text);  // Memecah string $text menjadi array karakter

    if (count($count) > 50) {  // Mengecek apakah jumlah karakter lebih dari 50
        $text = substr($text, 0 , 50);  // Memotong string $text hingga 50 karakter
        $text .= "...";  // Menambahkan "..." di akhir string
    }

    echo $text;  // Mencetak string hasil
}

$kata = "Lorem ipsum dolor sit memet, consectetur adipiscing elit. Nulla vel auctor turpis. Donec vel erat sollicitudin, accumsan lectus eget, blandit orci. Integer ut erat ipsum. Sed porta at erat vitae ornare. Aenean auctor, lacus ac condimentum ultricies, mi enim lobortis nibh, sit amet laoreet arcu felis nec quam. Cras euismod ex magna, in scelerisque urna laoreet quis. Aliquam tincidunt lacus sed tempor dapibus. Morbi sit amet dolor hendrerit, sollicitudin purus non, blandit sem.";

echo "<b>Kalimat awal : </b> " . $kata . "</br>";  // Mencetak kalimat awal

wrapText($kata);  // Memanggil fungsi wrapText dengan parameter $kata
?>
