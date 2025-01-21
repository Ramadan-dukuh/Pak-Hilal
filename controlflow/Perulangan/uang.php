<?php
$i = 1;
$uang = 100000;
$bunga = $uang * 0.02;
$total = $uang+$bunga;
for($i=1; $i<= 10; $i++){
    echo "$total <br>";
    $uang = $total;
    $bunga = $uang * 0.02;
    $total = $uang+$bunga;
}
?>