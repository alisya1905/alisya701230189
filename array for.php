<?php

$nama = ["ahmad","budi","chika","loli","irfan"];

?>

<!DOCTYPE html>
<html lang="en">
</head>   
<body>
    <?php

         for ($i = 0; $i < count($nama); $i++) {//menambahkan untuk menentukan jumlah elemen ada array.
                                                   
                                                //sehingga lopping akan berhenti ketika isi array sudah tampil semua.
            echo "<li>$nama[$i]</li>";
        }
        ?>
 </body>
 </html>       