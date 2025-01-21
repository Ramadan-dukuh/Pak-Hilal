<?php
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
switch($bulan){
    case 1 :
    case 3 :
    case 5 :
    case 7 :
    case 8 :
    case 10 :
    case 12 :
        $hari = 31;
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $hari = 30 ;
        break;
    case 2 :
        if (($tahun%4)==0) {
            $hari = 29;
        }else{
            $hari = 28;
        }
}
echo("<h2>Jumlah hari pada bulan $bulan tahun $tahun = $hari hari</h2>")
?>