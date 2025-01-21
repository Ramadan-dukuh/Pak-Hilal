<?php
//memulai sesi
session_start();
//set variable sesi
$_SESSION["user"] = "Kiki";
$_SESSION["nama"] = "Muhamad Rizki Ramadan";
echo"Variable sesi telah diciptakan";
?>