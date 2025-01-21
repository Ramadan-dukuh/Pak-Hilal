<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .highlight {
            color: orange; 
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Highlight Text Example</title>
</head>
<body>
    <?php 
        $kiki1 = "Hidup terlalu singkat jika hanya menyesal. Hidup hanya sekali, namun jika digunakan dengan baik, sekali saja cukup!";
        $kiki2 = ($_POST["kiki"]) ? $_POST["kiki"] : "";
        $start = isset($_POST["start"]) ? $_POST["start"] : 0;

        if (!empty($kiki2)) {
            $kiki3 = strpos($kiki1, $kiki2, $start);//mencari kata

            if ($kiki3 !== false) {
                $kiki4 = strlen($kiki2); //menghitung char
                $kiki5 = substr($kiki1, $kiki3, $kiki4); //memilah kata
                $kiki1 = substr_replace($kiki1, "<span class='highlight'>$kiki5</span>", $kiki3, $kiki4); //membuat highlight
                $start = $kiki3 + $kiki4;//untuk mencari kata selanjutnya
            } else {
                // Jika kata yang dicari tidak ditemukan lagi, reset posisi pencarian ke 0
                $start = 0; 
            }
        } else {
            // Tampilkan pesan jika input kata kosong
            echo "<strong>Kata tidak ada</strong>";
        }
    ?>

    <p><?php echo $kiki1; ?></p>

    <form method="post" action="">
        <input type="hidden" name="kiki" value="<?php echo $kiki2; ?>">
        <input type="hidden" name="start" value="<?php echo $start; ?>">
        <button type="submit">Next</button><br>
    </form>
    <button onclick="location.href='latihan2.php'">Kembali</button>
</body>
</html>
