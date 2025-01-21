    <?php
    include 'koneksi.php';
    session_start();
    if (isset($_SESSION['user']) ) {
        header("location:show.php");
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
    $nim = $_GET['id_mhs'];
    $sql = "SELECT * FROM tbl_mhsiswa where id_mhs='$nim' ";
    $result = mysqli_query($koneksi,$sql);
    $data = mysqli_fetch_array($result);
    ?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <form action="edit.php" method="post" class="m-3">
            <label for="" class="col-sm-2 col-form-label">Id:</label>
            <?php echo $data['id_mhs']; ?>
            <input type="text" name="id" value="<?php echo $data['id_mhs']; ?>" hidden> <br>
            <label for="" class="col-sm-2 col-form-label">Name:</label> 
            <input type="text" name="name" value="<?php echo $data['nama_mhs'];?>" ><br>
            <label for="" class="col-sm-2 col-form-label">Jenis Kelamin :</label>
            <input type="radio" name="jenkel" id="" 
            <?php
            if($data['jenis_kelamin']=="pria"){
                echo "checked = true";
            }
            ?>
            value="pria">Pria
            <input type="radio" name="jenkel" id=""
            <?php
            if($data['jenis_kelamin']=="wanita"){
              echo"checked = true";
            }
            ?>
            value="wanita">Wanita <br>
            <label for="" class="col-sm-2 col-form-label">Tanggal Lahir :</label>
            <input type="text" name="tanggal" id="" placeholder="yyyy-mm-dd" required value="<?php echo $data['tgl_lahir'];?>"><br>
            <label for="" class="col-sm-2 col-form-label">alamat</label>
            <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" required>
            <input  class="btn btn-success" type="submit" value="simpan">
        </form>
    </body>
    </html>