<?php
function generateDenseRanking($daftarSkorPemain, $daftarSkorGITS, $testcase){
    print("Output untuk testcase $testcase" . "<br>");
    // Mengurutkan nilai dalam array dan menghilangkan skor duplikat
    $daftarSkorBersih = array_values(array_unique($daftarSkorPemain));

    // Looping berdasarkan banyaknya angka dalam array permainan GITS
    foreach ($daftarSkorGITS as $skorGITS) {
        // Inisiasi dari awal lagi
        $rank = 1;

        // Looping berdasarkan banyak angka dalam array skor pemain lain
        foreach ($daftarSkorBersih as $skorBersih) {
            // Apabila skor lebih besar, maka hentikan looping dan lanjut print urutan ranking gits tersebut
            if ($skorGITS >= $skorBersih) {
                break;
            }
            // Apabila skor lebih kecil, maka tetap lanjutkan looping dan lakukan iterasi ranking 
            $rank++;
        }
        
        // Print hasil akhir urutan dari si gits
        print("$rank ");
    }
    print("<br><br>");
}

// Inisiasi test case 1 untuk jumlah, skor pemain dan gits
$jumlahPemain1 = 7;
$daftarSkorPemain1 = [100, 100, 50, 40, 40, 20, 10];

$jumlahMainGits1 = 4;
$daftarSkorGITS1 = [5, 25, 50, 120];

// Inisiasi test case 2 untuk jumlah, skor pemain dan gits
$jumlahPemain2 = 3;
$daftarSkorPemain2 = [100, 75, 50];

$jumlahMainGits2 = 4;
$daftarSkorGITS2 = [40, 55, 85, 100];

// Inisiasi test case 3 untuk jumlah, skor pemain dan gits
$jumlahPemain3 = 10;
$daftarSkorPemain3 = [100, 100, 90, 80, 40, 20, 20, 20, 10, 5];

$jumlahMainGits3 = 4;
$daftarSkorGITS3 = [13, 85, 95, 120];

// Lakukan pemanggilan fungsi berdasarkan inputan 1, 2, dan 3
generateDenseRanking($daftarSkorPemain1, $daftarSkorGITS1, 1);
generateDenseRanking($daftarSkorPemain2, $daftarSkorGITS2, 2);
generateDenseRanking($daftarSkorPemain3, $daftarSkorGITS3, 3);

?>