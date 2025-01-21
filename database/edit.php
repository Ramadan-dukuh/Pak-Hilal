<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['name'];
$jenkel = $_POST['jenkel'];
$tgl = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$sql = "UPDATE `tbl_mhsiswa` SET `id_mhs`='$id',`nama_mhs`='$nama',`jenis_kelamin`='$jenkel',
`tgl_lahir`='$tgl',`alamat`='$alamat' WHERE id_mhs = $id";
$result = mysqli_query($koneksi,$sql);
if($result){
    echo"berhasil coy";
    header("Location: show.php");
}else{
    echo "gagal njir";
    header("Location: formTambah.php");
}

?>