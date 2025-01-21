<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>
<body>
    <h1>Hasil Input</h1>
    <hr>
    <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $kiki1 = $_POST['nama1'];
    $kiki2 = $_POST['nama2'];
    $kiki3 = $_POST['nama3'];
    $kiki4 = $_POST['nama4'];

    $jenkel1 = $_POST['gender1'];
    $jenkel2 = $_POST['gender2'];
    $jenkel3 = $_POST['gender3'];
    $jenkel4 = $_POST['gender4'];

    echo "<p style='color: red;'>$kiki1 = $jenkel1</p>";
        echo "<p style='color: green;'>$kiki2 = $jenkel2</p>";
        echo "<p style='color: green;'>$kiki3 = $jenkel3</p>";
        echo "<p style='color: blue;'>$kiki4 = $jenkel4</p>";
}
?>
</body>
</html>