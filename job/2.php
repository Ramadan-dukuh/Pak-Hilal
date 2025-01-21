<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <br> <hr>
        <label>Kalimat</label>
        <textarea name="text" id=""></textarea>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST['text'];
    $itung = strlen($text);
    echo "Jumlah Karakter <br> $itung";
    echo "<br>";
    $text = strtoupper($text);
    echo "Hasil Uppercase <br> $text";
    echo "<br>";
    $text = strtolower($text);
    echo "Hasil Lowercase <br> $text";
    echo "<br>";
}
?>