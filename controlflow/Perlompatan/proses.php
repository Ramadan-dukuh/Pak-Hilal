<?php
$action = $_POST['action'];
$bil = $_POST['bil'];

if ($action == 'continue') {
    for ($i = 0; $i < 10; $i++) {
        if ($i == $bil) {
            continue;
        }
        echo("nilai i: $i <br>");
    }
    echo("Loop Selesai");
} elseif ($action == 'break') {
    for ($i = 0; $i < 10; $i++) {
        if ($i == $bil) {
            break;
        }
        echo("nilai i: $i <br>");
    }
    echo("Loop Selesai <br>");
    echo("FUNCTION SELESAI");
} elseif ($action == 'return') {
    for ($i = 0; $i < 10; $i++) {
        if ($i == $bil) {
            return;
        }
        echo("nilai i: $i <br>");
    }
    echo("Loop Selesai <br>");
    echo("FUNCTION SELESAI");
} elseif ($action == 'exit') {
    for ($i = 0; $i < 10; $i++) {
        if ($i == $bil) {
            exit;
        }
        echo("nilai i: $i <br>");
    }
    echo("Loop Selesai <br>");
    echo("FUNCTION SELESAI");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="latihan.php">

        <button>Kembali</button>
    </form>
</body>
</html>
