<?php
// Loop untuk mengontrol jumlah baris
for ($i = 10; $i >= 1; $i--) {
    // Loop untuk mencetak angka di setiap baris
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    // Pindah ke baris berikutnya
    echo "<br>";
}
?>
