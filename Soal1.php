<?php
function generateRumusA000124($n) {
    echo("Berikut adalah output dari inputan $n" . "<br>");
    // Melakukan looping berdasarkan banyaknya inputan dinamis
    for ($i=0; $i < $n; $i++) { 
        $hasil = (($i * ($i + 1)) / 2) + 1; // Melakukan perumusan A000124 yang dimana adalah n(n + 1)/2 + 1
        if ($i < $n - 1) { // Apabila belum diakhir loop, maka print dengan strip
            print($hasil . "-");
        } else { // Apabila sudah di akhir, maka print dengan newline
            print($hasil . "<br><br>");
        }
    }
}

// Beberapa testcase 1, 2, 3
$input1 = 7;
$input2 = 14;
$input3 = 21;

// Pemanggilan fungsi berdasarkan testcase diatas
generateRumusA000124($input1);
generateRumusA000124($input2);
generateRumusA000124($input3);
?>
