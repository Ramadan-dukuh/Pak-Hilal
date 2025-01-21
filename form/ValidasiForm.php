<!DOCTYPE html>
<html>
<head>
    <title>Validasi Email</title>
</head>
<body>
    <form method="POST" action="">
        <h2>Validasi FORM</h2>
        <br><hr>
        <label for="email">Masukkan Alamat Email:</label>
        <input type="text" id="email" name="email" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $isValid = true;
        $errorMessage = "";

        // Pastikan mengandung '@' dan '.'
        if (strpos($email, '@') === false || strpos($email, '.') === false) {
            $isValid = false;
            $errorMessage = "Email harus mengandung '@' dan '.' (titik).";
        } else {
            // Pisahkan bagian lokal dan domain
            list($local, $domain) = explode('@', $email);

            // Pastikan ada setidaknya satu karakter sebelum dan setelah '@'
            if (strlen($local) < 1 || strlen($domain) < 1) {
                $isValid = false;
                $errorMessage = "Email harus memiliki setidaknya satu karakter sebelum dan setelah '@'.";
            } else {
                // Pastikan domain mengandung titik, dan setidaknya satu karakter sebelum dan setelah titik
                $domainParts = explode('.', $domain);
                if (count($domainParts) < 2 || strlen($domainParts[0]) < 1 || strlen($domainParts[1]) < 1) {
                    $isValid = false;
                    $errorMessage = "Email harus mengandung karakter sebelum dan sesudah '.' pada domain.";
                }
            }
        }

        // Tampilkan hasil validasi
        if ($isValid) {
            echo "Email <strong>$email</strong> valid.";
        } else {
            echo "<p style='color:red;'>$errorMessage</p>";
        }
    }
    ?>
</body>
</html>
