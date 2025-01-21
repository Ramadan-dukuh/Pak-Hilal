<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $kiki1=5;
    $kiki2=4;
    echo "$kiki1 == $kiki2: ".($kiki1 == $kiki2);
    echo "<br>$kiki1 != $kiki2: ".($kiki1 != $kiki2);
    echo "<br>$kiki1 > $kiki2: ".($kiki1 > $kiki2);
    echo "<br>$kiki1 < $kiki2: ".($kiki1 < $kiki2);
    echo "<br>($kiki1 == $kiki2) && ($kiki1 > $kiki2): ".(($kiki1 == $kiki2) && ($kiki1 > $kiki2));
    echo "<br>($kiki1 == $kiki2) || ($kiki1 > $kiki2): ".(($kiki1 == $kiki2) || ($kiki1 > $kiki2));
    ?>
</body>
</html>