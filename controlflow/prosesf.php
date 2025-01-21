<?php
$fakto = $_POST['Fakto'];
$kiki = 1;
echo"Hasil dari faktorial $fakto  ";

for($j = 1; $j <= $fakto; $j++) {
    echo"($j x $fakto)";
    
}
for ($i = $fakto; $i >= 1; $i--) {
    $kiki *= $i;
}

echo " adalah $kiki";
?>