<?php
$grade = $_POST['grade'];
if($grade=="A"){
    echo "Nilai = Sangan Baik";
}elseif($grade=="B")
    {
    echo "Nilai = Baik";
}elseif($grade=="C"){
    echo "Nilai = Cukup";
}elseif($grade=="D"){
    echo"Nilai = Kurang";
}elseif($grade=="E"){
    echo"Nilai = Kebangetan";
}else{
    echo"masukkan nilai A-E";
}

?>