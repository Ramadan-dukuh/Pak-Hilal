<?php
$kiki1 = $_POST['kiki1'];
$kiki2 = $_POST['kiki2'];
$hasil = $kiki1 - ($kiki1 * $kiki2);
echo "gaji sebelum pajak =Rp $kiki1 <br>";
echo "pajak =Rp $kiki2 <br>";
echo "gaji setelah pajak =Rp $hasil <br>";
?>
