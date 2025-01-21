<?php
session_start();
if ($_SESSION['user'] == "") {
    header("location:index.php");
    exit();
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            text-align: center;
        }

        h3 {
            margin-top: 50px;
        }
        a{
            margin: 10px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h3>
        Selamat Datang <b><?= $_SESSION['user']; ?></b><br> Anda login sebagai <b><?= $_SESSION['level']; ?></b>
    </h3>

    <?php if ($_SESSION['level'] == "admin") { ?>
        <b><br><a class="btn btn-primary" role="button" href="../show.php">Tabel Mahasiswa</a> 
        <a class="btn btn-primary" role="button" href="../mapel.php">Tabel Mapel</a> 
    <?php } else if ($_SESSION['level'] == "operator") { ?>
        <b><br><a class="btn btn-primary" role="button" href="http://localhost/Pak%20Hilal/database/show.php">Tabel Mahasiswa</a> 
        <a class="btn btn-primary" role="button" href="http://localhost/Pak%20Hilal/database/mapel.php">Tabel Mapel</a>     
    <?php } else if ($_SESSION['level'] == "user") { ?>
        <b><br><a class="btn btn-primary" role="button" href="http://localhost/Pak%20Hilal/database/show.php">Tabel Mahasiswa</a> 
        <a class="btn btn-primary" role="button" href="http://localhost/Pak%20Hilal/database/mapel.php">Tabel Mapel</a> 
    <?php } ?>
    <?php
    
    ?>

    <br><a class="btn btn-danger" role="button" href="logout.php">Logout</a>
</body>
</html>
