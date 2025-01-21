<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <br> <hr>
       <label>Berapa uang yang Adit punya?</label> 
       <select name="uang" id="">
        <option value="5000">5000</option>
        <option value="2000">2000</option>
        <option value="1000">1000</option>
        <option value="500">500</option>
        <option value="lainnya">Lainnya</option>
       </select>
       <br>
       <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uang = $_POST['uang'];
    if ($uang == "5000") {
        echo "Adit punya $uang ia membeli pesawat";
    } elseif ($uang == "2000") {
        echo "Adit punya $uang ia membeli mobil";
    } elseif ($uang == "1000") {
        echo "Adit punya $uang ia membeli mootor";
    } elseif ($uang == "500") {
        echo "Adit punya $uang ia memebeli motor";
    } else {
        echo "Adit tidak akan membeli apa-apa";
    }
}
?>