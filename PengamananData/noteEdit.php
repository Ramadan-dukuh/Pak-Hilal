<?php
session_start();
include "koneksi.php";

// Pastikan pengguna sudah login
if (!isset($_SESSION['email'])) {
    header("location:formLogin.php");
    exit();
}

$user = $_SESSION['user_id'];

// Pastikan ada `id_judul` yang dikirim
if (isset($_GET['id'])) {
    $id_judul = $_GET['id'];

    // Ambil data berdasarkan `id_judul`
    $sql = "SELECT * FROM catatan WHERE id_judul = '$id_judul' AND user_id = '$user'";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        echo "<script>alert('Data tidak ditemukan atau bukan milik Anda!'); window.location='index.php';</script>";
        exit();
    }

    $judul = $row['judul'];
    $isi = $row['isi'];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];

        // Update catatan
        $query = "UPDATE catatan SET judul = '$judul', isi = '$isi' WHERE id_judul = '$id_judul' AND user_id = '$user'";

        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Catatan berhasil diperbarui!'); window.location='index.php';</script>";
        } else {
            echo "<script>alert('Gagal memperbarui catatan!');</script>";
        }
    }
} else {
    echo "<script>alert('ID tidak valid!'); window.location='index.php';</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Catatan</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: #e0f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 40px;
            border: 10px solid #0277bd;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            border-radius: 20px;
            background-image: url('https://www.transparenttextures.com/patterns/old-paper.png');
            width: 100%;
            max-width: 500px;
            text-align: center;
        }
        h1 {
            color: #01579b;
            font-size: 2.5em;
            border-bottom: 2px dashed #0277bd;
            padding-bottom: 10px;
        }
        input[type="text"], textarea {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #0277bd;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.8);
        }
        textarea {
            height: 200px;
        }
        .btn {
            background: #01579b;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
        }
        .btn:hover {
            background: #0277bd;
        }
        .btn-back {
            display: inline-block;
            margin-top: 20px;
            color: #01579b;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
        <h1>Add New Note</h1>
        <form method="POST">
            <div class="note">
                <input type="text" name="judul" placeholder="Title" value="<?php echo $judul; ?>" required>
                <textarea name="isi" placeholder="Write your note here..." required value><?php echo htmlspecialchars($isi); ?></textarea>
                <button type="submit" class="btn">Save</button>
            </div>
        </form>
        <a href="index.php" class="btn-back">Back</a>
    </div>
</body>
</html>
