<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hobi</title>
</head>
<body>
    <form action="" method="post">
        <h2>Pilih Hobi Favorit Anda</h2>
        <label><input type="checkbox" name="hobbies[]" value="Olahraga"> Olahraga</label><br>
        <label><input type="checkbox" name="hobbies[]" value="Musik"> Musik</label><br>
        <label><input type="checkbox" name="hobbies[]" value="Seni"> Seni</label><br>
        <label><input type="checkbox" name="hobbies[]" value="Membaca"> Membaca</label><br>
        <label><input type="checkbox" name="hobbies[]" value="Berkebun"> Berkebun</label><br><br>
        
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['hobbies'])) {
            $hobbies = $_POST['hobbies'];
            echo "<h3>Hobi yang Anda pilih:</h3><ul>";
            foreach ($hobbies as $hobby) {
                echo "<li>" . htmlspecialchars($hobby) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p style='color:red;'>Anda belum memilih hobi apapun.</p>";
        }
    }
    ?>
</body>
</html>
