<?php
session_start();
    
// Jika user belum login, redirect ke login.php
if (!isset($_SESSION['user'])) {
    header("Location: http://localhost/Pak%20Hilal/database/Session/index.php");
    exit;
}

// Tampilkan nama dan level user
echo "Nama: " . htmlspecialchars($_SESSION['user']) . " | Level: " . htmlspecialchars($_SESSION['level']) . "<br><br>";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Pelajaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 10px;
        }
        .card {
            width: calc(100% / 3 - 20px);
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card h3 {
            margin: 0 0 10px;
            font-size: 18px;
            color: #333;
        }
        .card p {
            margin: 8px 0;
            font-size: 14px;
            color: #555;
        }
        .card .actions a {
            margin-right: 10px;
            text-decoration: none;
            color: #007bff;
        }
        .card .actions a:hover {
            text-decoration: underline;
        }
        .btn-add, .btn-back {
            display: inline-block;
            margin-top: 20px;
            padding: 8px 12px;
            color: #fff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-back:hover, .btn-add:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<?php
// Tampilkan link "Tambah data" hanya untuk admin dan operator
if ($_SESSION['level'] == 'admin' || $_SESSION['level'] == 'operator') {
    echo '<a class="btn-add" href="addmapel.php">Tambah data</a>';
}

include 'koneksi.php';
$sql = "SELECT * FROM mata_pelajaran";
$result = mysqli_query($koneksi, $sql);

// Mulai card container
echo "<div class='card-container'>";

// Loop untuk menampilkan setiap mata pelajaran dalam bentuk card
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='card'>
            <h3>ID Mapel: " . htmlspecialchars($row['id_mapel']) . "</h3>
            <p><strong>Nama Mapel:</strong> " . htmlspecialchars($row['nama_mapel']) . "</p>
            <p><strong>Jumlah SKS:</strong> " . htmlspecialchars($row['jumlah_sks']) . "</p>
            <p><strong>Nama Dosen:</strong> " . htmlspecialchars($row['nama_dosen']) . "</p>
            <div class='actions'>";
    
    // Tampilkan link Edit dan Delete hanya untuk admin
    if ($_SESSION['level'] == 'admin') {
        echo "<a href='editmapel.php?id_mapel=" . urlencode($row['id_mapel']) . "'>Edit</a> | 
              <a href='hapusmapel.php?id_mapel=" . urlencode($row['id_mapel']) . "' onclick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a>";
    } elseif ($_SESSION['level'] == 'operator') {
        echo "<a href='updateM.php?id_mapel=" . urlencode($row['id_mapel']) . "'>Edit</a>";
    } else {
        echo "Aksi tidak tersedia";
    }

    echo "</div>
        </div>";
}

// Tutup card container
echo "</div>";
?>

<!-- Tombol Kembali -->
<a class="btn-back" href="http://localhost/Pak%20Hilal/database/Session/menu.php">Kembali</a>

</body>
</html>
