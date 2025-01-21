<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$var1 = $_POST['var1'];
$var2 = $_POST['var2'];
$var3 = $_POST['var3'];

// operator aritmatika
// if ($var2 == "+") {
//     $var4 = $var1 + $var3;
// } elseif ($var2 == "-") {
//     $var4 = $var1 - $var3;
// } elseif ($var2 == "*") {
//     $var4 = $var1 * $var3;
// } elseif ($var2 == "/") {
//     $var4 = $var1 / $var3;
// } elseif ($var2 == "%") {
//     $var4 = $var1 % $var3;
// } elseif ($var2 == "==") {
    // operator perbandingan
//     $var4 = $var1 == $var3 ? "True" : "False";
// } elseif ($var2 == "!=") {
//     $var4 = $var1 != $var3 ? "True" : "False";
// } elseif ($var2 == "<") {
//     $var4 = $var1 < $var3 ? "True" : "False";
// } elseif ($var2 == ">") {
//     $var4 = $var1 > $var3 ? "True" : "False";
// }  elseif ($var2 == "<=") {
//     $var4 = $var1 <= $var3 ? "True" : "False";
// }  elseif ($var2 == ">=") {
//     $var4 = $var1 >= $var3 ? "True" : "False";
// } 
// operator logika
if ($var2 == "&&") {
    $var4 = ($var1 && $var3) ? "True" : "False";
    $var4 = $var1 && $var3 ? "True" : "False";
} elseif ($var2 == "||") {
    $var4 = ($var1 || $var3) ? "True" : "False";
    $var4 = $var1 || $var3 ? "True" : "False";
} elseif ($var2 == "^") {
    $var4 =($var1 xor $var3) ? "True" : "False";
    $var4 =$var1 ^  $var3 ? "True" : "False";
} elseif ($var2 == "!") {
    $var4 = ($var1 != $var3) ? "True" : "False";
    $var4 = $var1 != $var3 ? "True" : "False";
} 

echo "$var1 $var2 $var3 = $var4";
?></body>
</html>