<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days</title>
</head>
<body>
    <?php
    $tanggal=date("D");
    if ($tanggal=="Fri") 
    echo "Liburan Yuk"; 
    elseif($tanggal=="Tue"){
        echo "Hallo <br/>
        selamat liburan <br/>
        sekian maturnuwun";
    }
    else
    echo "bersenang senang lah";
    ?>
</body>
</html>