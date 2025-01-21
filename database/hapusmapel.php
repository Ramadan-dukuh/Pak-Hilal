<?php
include 'koneksi.php';
$id = $_GET ['id'];
$sql = "DELETE FROM mata_pelajaran WHERE $id ";
$result = mysqli_query($koneksi,$sql);

if($result){
    echo "Delete data berhasil";
}else {
    echo "Delete data gagal";
}
?>