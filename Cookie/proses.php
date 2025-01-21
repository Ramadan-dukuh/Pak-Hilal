<?php
// session_start();
// $_SESSION['username'] = $_POST['user'];
// $_SESSION['password'] = $_POST['pass'];
$user = $_POST['user'];
$cookie_name= "ramadan";
setcookie("username", $user, time() + (30), "/");
$namacookie = "poin";
$pointambah = 50;
if(isset($_COOKIE["poin"])){
    $poinsaatini=(int)$_COOKIE['poin'];
    $poinsaatini+=$pointambah;
}else{
   $poinsaatini=$pointambah; 
}
setcookie($namacookie, $poinsaatini, time() + (30), "/");
header('location: menu.php');
?>