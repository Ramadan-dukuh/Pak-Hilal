<?php
$kata=$_POST['kata'];
echo "kata $kata di balik menjadi ";
for($i=strlen($kata)-1;$i>=0;$i--){
    echo $kata[$i];
}
?>
