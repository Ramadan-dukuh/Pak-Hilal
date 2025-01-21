<?php
$kiki = $_POST['kiki'];

for($kiki2=1;$kiki2<=$kiki;$kiki2++){
    echo"<br> ";
    for($kiki3=1;$kiki3<=$kiki;$kiki3++){
        echo$kiki3 * $kiki2 ." ";
    }
}
?>
