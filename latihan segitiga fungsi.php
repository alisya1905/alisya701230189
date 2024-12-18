<?php
// membuat fungsi
function perkalian($panjang, $lebar)
 {
    $hasil =$panjang * $lebar;
    return $hasil;
}

// memanggil fungsi
$hasil = perkalian (6,3);
echo $hasil; //hasil 11
echo "<br>";

// Memanggil fungsi
$panjang = 4;
$lebar = 5;
echo 'hasil perkalian ' . $panjang. 'x' . $lebar .'adalah: ' . perkalian($panjang ,$lebar);
?>