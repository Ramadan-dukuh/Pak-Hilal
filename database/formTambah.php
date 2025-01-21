<?php
session_start();
if (!isset($_SESSION['user']) ) {
    header("location:Session/menu.php");
    exit();
}

if (!isset($_SESSION['user'])) {
    header("Location: http://localhost/Pak%20Hilal/database/Session/index.php");
    exit;
}
if ($_SESSION['level'] != 'admin' && $_SESSION['level'] != 'operator') {
    header("location:show.php");
    exit();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="tambah.php" method="post" class="m-3">
        <label for="" class="col-sm-2 col-form-label">Id:</label>
        <input type="text" name="id"> <br>
        <label for="" class="col-sm-2 col-form-label">Name:</label> 
        <input type="text" name="name" required><br>
        <label for="" class="col-sm-2 col-form-label">Jenis Kelamin :</label>
        <input type="radio" name="jenkel" id="" value="pria">Pria
        <input type="radio" name="jenkel" id="" value="wanita">Wanita <br>
        <label for="" class="col-sm-2 col-form-label">Tanggal Lahir :</label>
        <input type="text" name="tanggal" id="" placeholder="yyyy-mm-dd" required><br>
        <label for="" class="col-sm-2 col-form-label">alamat</label>
        <input type="text" name="alamat" required>
        <input  class="btn btn-success" type="submit">
    </form>
</body>
</html>