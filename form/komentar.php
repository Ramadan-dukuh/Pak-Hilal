<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Komentar</label><br>
        <textarea name="Komentar" id=""></textarea>
        <input type="submit" value="Kirim">
        <br>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$komentar = $_POST['Komentar'];
echo "isi komentar $komentar";
}
?>