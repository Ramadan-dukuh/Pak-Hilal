<?php
include 'koneksi.php';
if ($_SESSION['level'] == 'user') {
    header("location:show.php");
    exit();
}
$id = $_GET ['id_mhs'];
$sql = "DELETE FROM tbl_mhsiswa WHERE id_mhs = '$id' ";
$result = mysqli_query($koneksi,$sql);

if($result){
    echo "Delete data berhasil";
    header("Location: show.php");
}else {
    echo "Delete data gagal";
}
?>