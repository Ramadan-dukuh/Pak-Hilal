<?php
session_start();
//menghapus semua varaibel sesi
session_unset();
//menghancurkan sesi
session_destroy();
// echo"Variable sesi telah dihapus";
setcookie("timeleft", "", time() - 3600, "/");
setcookie("username", "", time() - 3600, "/"); // Menghapus cookie username jika diperlukan
header('location: login.php');
?>