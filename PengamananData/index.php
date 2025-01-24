<?php
session_start();
include "koneksi.php";

if ($_SESSION['email'] == "") {
    header("location:formLogin.php");
    exit();
}
// Ambil catatan dari database
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM catatan WHERE user_id='$user_id' ORDER BY waktu DESC";
$result = mysqli_query($koneksi, $query);
if (!$result) {
    die("Error retrieving notes: " . mysqli_error($koneksi));
}
// echo"hallo $user_id";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diary</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <style>
         body {
            font-family: 'Courier New', Courier, monospace;
            background-color: #e0f7fa;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 40px;
            border: 10px solid #0277bd;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            border-radius: 20px;
            background-image: url('https://www.transparenttextures.com/patterns/old-paper.png');
        }

        h1 {
            text-align: center;
            color: #01579b;
            font-size: 2.5em;
            text-transform: uppercase;
            border-bottom: 2px dashed #0277bd;
            padding-bottom: 10px;
        }

        .btn, .btn-logout {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 5px;
            text-decoration: none;
            font-weight: bold;
            color: #fff;
            background: #01579b;
            border-radius: 5px;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
        }

        .btn-logout {
            background: #d32f2f;
        }

        .notes {
            margin-top: 20px;
        }

        .note {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-left: 8px solid #0277bd;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 5px 5px 10px rgba(0,0,0,0.2);
            position: relative;
            font-style: italic;
            line-height: 1.8em;
        }

        .note h3 {
            margin: 0;
            color: #01579b;
            font-size: 1.8em;
            border-bottom: 1px dashed #0277bd;
            padding-bottom: 5px;
        }

        .note small {
            color: #01579b;
            font-size: 0.9em;
        }

        .note-actions {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .note-actions a {
            margin-left: 10px;
            color: #01579b;
            text-decoration: none;
            font-size: 1.5em;
        }

        .note-actions a.delete {
            color: #d32f2f;
        }

        .note-actions a:hover {
            opacity: 0.7;
        }
    </style>
</head>
<body>
<div class="container">
        <h1>Welcome to My Diary</h1>
        <h4><?php echo htmlspecialchars($_SESSION['email'])  ?></h4>    
        <a href="noteAdd.php" class="btn"><i class="uil uil-plus"></i> Tambah Catatan</a>
        <a href="logout.php" class="btn-logout">Logout</a>        
        <div class="notes">            
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="note">
                    <h3><?= htmlspecialchars($row['judul']); ?></h3>
                    <p><?= nl2br(htmlspecialchars($row['isi'])); ?></p>
                    <small><?= $row['waktu']; ?></small>
                    <div class="note-actions">
                    <a href="noteEdit.php?id=<?= $row['id_judul']; ?>" title="Edit">
                    <i class="uil uil-edit"></i>
                    </a>
                    <a href="noteDelete.php?id=<?= $row['id_judul']; ?>" class="delete" title="Delete" onclick="return confirm('Are you sure you want to delete this note?');">
                    <i class="uil uil-trash-alt"></i>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>