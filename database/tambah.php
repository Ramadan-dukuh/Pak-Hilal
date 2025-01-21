<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['name'];
$jenkel = $_POST['jenkel'];
$tgl = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$insert = "INSERT INTO tbl_mhsiswa values('$id','$nama','$jenkel','$tgl','$alamat');";
$insert_query = mysqli_query($koneksi,$insert);
if($insert_query){
    echo "Berhasi di input coy";
    header("Location: show.php");
}else {
    echo "Gagal di insert njir";
    header("Location: formTambah.php");
}
?>