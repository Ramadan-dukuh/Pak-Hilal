<?php
$bil1=$_POST['bil1'];
$bil2=$_POST['bil2'];
// $bil3=$_POST['bil3'];
// if($bil1>$bil2){
//     echo $bil1;
// }else{
//     echo $bil2;
// }
// if($bil1>$bil2 && $bil2>$bil3){
//     echo $bil1.$bil2.$bil3;
// }else if($bil2>$bil1 && $bil1>$bil3){
//     echo $bil2.$bil1.$bil3;
// }else if($bil3>$bil1 && $bil1>$bil2){
//     echo $bil3.$bil1.$bil2;
// }else if($bil3>$bil2 && $bil2>$bil1){
//     echo $bil3.$bil2.$bil1;
// }else if($bil2>$bil3 && $bil3>$bil1){
//     echo $bil2.$bil3.$bil1;
// }else if($bil1>$bil3 && $bil3>$bil2){
//     echo $bil1.$bil3.$bil2;
// }
$angka = array($bil1,$bil2);
rsort($angka);
echo "Diurutkan dari yang terbesar yaitu: " . implode(", ", $angka);
?>