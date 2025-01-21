<?php
session_start();

// Redirect jika user belum login
if (!isset($_SESSION['user'])) {
    header("Location: http://localhost/Pak%20Hilal/database/Session/index.php");
    exit();
}

// Menampilkan nama dan level user
echo "Nama: " . htmlspecialchars($_SESSION['user']) . " | Level: " . htmlspecialchars($_SESSION['level']) . "<br><br>";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .actions a {
            margin-right: 10px;
            text-decoration: none;
            color: #007bff;
        }
        .actions a:hover {
            text-decoration: underline;
        }
        .btn-back {
            display: inline-block;
            margin-top: 20px;
            padding: 8px 12px;
            color: #fff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<?php
// Tampilkan link "Tambah data" hanya untuk admin dan operator
if ($_SESSION['level'] == 'admin' || $_SESSION['level'] == 'operator') {
    echo '<a href="formTambah.php">Tambah data</a> | ';
}

include 'koneksi.php';
$sql = "SELECT * FROM tbl_mhsiswa";
$result = mysqli_query($koneksi, $sql);

echo "<table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>";

// Loop untuk menampilkan data dari database
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>" . htmlspecialchars($row['id_mhs']) . "</td>
            <td>" . htmlspecialchars($row['nama_mhs']) . "</td>
            <td>" . htmlspecialchars($row['jenis_kelamin']) . "</td>
            <td>" . htmlspecialchars($row['tgl_lahir']) . "</td>
            <td>" . htmlspecialchars($row['alamat']) . "</td>
            <td class='actions'>";
    
    // Aksi hanya tersedia untuk level admin dan operator
    if ($_SESSION['level'] == 'admin') {
        echo "<a href='formEdit.php?id_mhs=" . urlencode($row['id_mhs']) . "'>Edit</a> | 
              <a href='formDelete.php?id_mhs=" . urlencode($row['id_mhs']) . "' onclick=\"return confirm('Anda yakin ingin menghapus data ini?')\">Delete</a>";
    } elseif ($_SESSION['level'] == 'operator') {
        echo "<a href='updateM.php?id_mhs=" . urlencode($row['id_mhs']) . "'>Edit</a>";
    } else {
        echo "Aksi tidak tersedia";
    }

    echo "</td>
        </tr>";
}

echo "</table>";
?>

<!-- Tombol Kembali -->
<a class="btn-back" href="http://localhost/Pak%20Hilal/database/Session/menu.php">Kembali</a>

</body>
</html>
