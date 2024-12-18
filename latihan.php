<?php

$str = "Belajar PHP ternyata Menyenangkan";
echo strtolower($str); //Ubah huruf ke kecil semua
echo "<br>";
echo strtoupper($str); //Ubah huruf ke besar semua
echo "<br>";
echo str_replace("Menyenangkan", "mudah lho", $str); //Mengganti string
echo "<br><br>";



$a = pow(2, 10);        //Fungsi perpangkatan
$b = sqrt(100);         //Fungsi akar         
$c = ceil(4.25);        //Pembulatan keatas
$d = floor(4.25);       //Pembulatan kebawah
echo "2 pangkat 10 = $a <br>";
echo "akar 100 = $b <br>";
echo "ceil(4.25) = $c <br>";
echo "floor(4.25) = $d <br>";