<?php
include 'koneksi.php';
$mapel = $_POST['mapel'];
$sks = $_POST['sks'];
$dosen = $_POST['dosen'];
$insert = "INSERT INTO mata_pelajaran VALUES ('','$mapel','$sks','$dosen');";
$insert_query = mysqli_query($koneksi,$insert);
if($insert_query){
    echo "Berhasi di input coy";
    header("Location: mapel.php");
}else {
    echo "Gagal di insert njir";
}
?>