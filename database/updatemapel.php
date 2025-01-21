<?php
include 'koneksi.php';
$mapel = $_POST['mapel'];
$sks = $_POST['sks'];
$dosen = $_POST['dosen'];
$sql = "UPDATE `mata_pelajaran` SET `nama_mapel`='$mapel',
`jumlah_sks`='$sks',`nama_dosen`='$dosen' WHERE id_mapel = ''";
$result = mysqli_query($koneksi,$sql);
if($result){
    echo"berhasil coy";
    header("Location: mapel.php");
}else{
    echo "gagal njir";
    header("Location: addmapel.php");
}

?>