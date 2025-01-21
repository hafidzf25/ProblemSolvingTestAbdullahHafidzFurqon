<?php
function checkBalancedBracket($stringBracket){
    print("Input $stringBracket" . "<br>");
    // Membuat array baru untuk menampung isi bracket untuk dicheck
    $kumpulanbracketBaru = [];

    // Membuat array asosiatif yang dimana mencocokkan berdasarkan pasangan brakcetnya
    $pasanganBracket = [')' => '(', '}' => '{', ']' => '['];

    // Loop berdasarkan isi dari stringBracket (kumpulan bracket dalam 1 string)
    foreach (str_split($stringBracket) as $perbracket) {
        if ($perbracket == '(' || $perbracket == '{' || $perbracket == '[') { // Apabila yang dicek bracketnya adalah pembuka, maka di push
            array_push($kumpulanbracketBaru, $perbracket); // Push ke dalam array baru
        } elseif ($perbracket == ')' || $perbracket == '}' || $perbracket == ']') { // Apabila yang dicek adalah penutup
            if (empty($kumpulanbracketBaru)) { // maka dicek lagi, apakah isi dalam array baru kosong atau tidak
                return "NO"; // Kalau iya, maka return NO
            } elseif (array_pop($kumpulanbracketBaru) !== $pasanganBracket[$perbracket]) { // maka di cek lagi, apakah kalau di pop, bracketnya berpasangan tidak?
                return "NO"; // Kalau tidak, NO
            }
        }
    }

    // Mengembalikan hasil akhir, kalau isi array baru kosong, maka semua bracket suda terpasang dengan baik
    return empty($kumpulanbracketBaru) ? "YES" : "NO";
}

// Kumpulan inputan 1 2 3 berdasarkan yang di google form
$stringBracket1 = "{[()]}";
$stringBracket2 = "{[(])}";
$stringBracket3 = "{ ( ( [ ] ) [ ] ) [ ] } "; // tambahkan whitespace untuk syarat

// Pemanggilan fungsi berdasarkan 3 inputan diatas
echo "Output: " . checkBalancedBracket($stringBracket1);
print("<br><br>");
echo "Output: " . checkBalancedBracket($stringBracket2);
print("<br><br>");
echo "Output: " . checkBalancedBracket($stringBracket3);

?>