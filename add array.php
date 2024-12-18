<?php

$hari = ["senin","selasa"];

print_r ($hari);
echo "</br>";
$hari[] = "rabu"; //menambahkan elemen pada urutan telakhir array
print_r($hari);
echo "</br>";
$hari[3] = "kamis"; //menambahkan elemen pada index yang kita tentukan
                    //jika idex sudah terisi,maka elemen lama akan 
                    //diganti dengan eleemn baru
print_r($hari);

?>                   