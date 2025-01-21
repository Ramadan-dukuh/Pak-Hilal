<?php
$bil1=$_POST['bil1'];
$bil2=$_POST['bil2'];
$bil3=$_POST['bil3'];
$angka = array($bil1,$bil2,$bil3);
rsort($angka);
echo "Diurutkan dari yang terbesar yaitu: " . implode(", ", $angka);
echo "<br>";
sort($angka);
echo "Diurutkan dari yang terkecil yaitu: " . implode(", ", $angka);
?>