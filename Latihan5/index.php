<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan lagi</title>
</head>
<body>
    <?php
    $nim = "123456789";
    $nama = 'Rizki';
    $umur = 16;
    $nilai = 82.25;
    $status = TRUE;
    echo "NIM : $nim <br>";
    echo "Nama : $nama <br>";
    print "Umur : $umur <br>";
    printf("Nilai : %.3f <br>", $nilai);
    if($status){
    echo "Status : Aktif <br>";
    }else{
    echo"status : Tidak aktif <br>";
    }

    $a=5;
    $b=2;
    $hasil=$a + $b;
    $hasil2=$a.$b;
    echo "$a + $b = $hasil";
    print "<br>$a + $b = $hasil2";
    ?>
</body>
</html>