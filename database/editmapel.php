<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM mata_pelajaran where id_mapel='$id' ";
$result = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($result);
echo $data['id_mapel'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="updatemapel.php" method="post" class="m-3">
        <label for="" class="col-sm-2 col-form-label"> Mapel:</label>
        <input type="text" name="mapel" value="<?php echo $data['nama_mapel']; ?>" required> <br>
        <label for="" class="col-sm-2 col-form-label">Jumlah SKS:</label> 
        <input type="text" name="sks" value="<?php echo $data['jumlah_sks']; ?>" required><br>
        <label for="" class="col-sm-2 col-form-label">Nama Dosen:</label>
        <input type="text" name="dosen" id="" value="<?php echo $data['nama_dosen'] ?>" required><br>
        <input class="btn btn-success" type="submit">
    </form>
</body>
</html>