<?php
include 'koneksi.php';
session_start();
if (isset($_SESSION['user']) ) {
    header("location:menu.php");
    exit();
}
$user = $_POST['Username'];
$pass = $_POST['Password'];
$sql = "SELECT * FROM user WHERE username = '$user'";
$result = mysqli_query($koneksi,$sql);
$row = mysqli_fetch_assoc($result);
$dblevel = $row['hak_akses'];
$dbuser = $row['username'];
$dbpass = $row['password'];
$aktif = $row['aktif'];
if ($user == $dbuser && $pass == $dbpass && $aktif == "1") {
    session_start();
    $_SESSION['user'] = $dbuser;
    $_SESSION['level']= $dblevel;
    header("Location: menu.php");
}
?>