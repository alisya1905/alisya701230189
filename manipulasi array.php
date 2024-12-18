<?php

$hari = ["senin","selasa","rabu"];

echo "arrray awal : ";
print_r($hari);
echo "<hr>";

echo "array setelah di pop : ";
$hasil = array_pop($hari); //menghapus atau mengambil elemen telakhir dari array
print_r($hari);
echo "<br>elemen yang di pop : $hasil <hr>";

echo"array setelah di push : ";
$hasil =array_push($hari,"kamis","jumat",); //menmbahkan beberapa elemen  pada akhir array
print_r($hari);
echo "<hr>";

echo "array setelah di shift : ";
$hasil =array_shift ($hari); //menghapus atau mengambil elmen pertamadari array
print_r($hari);
echo "<br>elemen yang shift :$hasil <hr>";

echo "array setelah di unshift : ";
$hasil = array_unshift($hari,"elemen","ditambahkan"); //menambahkan beberaoa elemen pada akhir array
print_r($hari);
?>
