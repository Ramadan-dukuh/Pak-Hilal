<?php
include 'koneksi.php';
session_start();
if ($_SESSION['email'] == "") {
    header("location:formLogin.php");
    exit();
}
$id = $_GET ['id'];
$sql = "DELETE FROM `catatan` WHERE id_judul = '$id' ";
$result = mysqli_query($koneksi,$sql);

if($result){
    echo "<script>alert('Catatan berhasil dihapus!'); window.location='index.php';</script>";
}else {
    echo "<script>alert('Gagal menghapus catatan!'); window.location='index.php';</script>";
}
?>