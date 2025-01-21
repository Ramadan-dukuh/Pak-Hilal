<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>
<body>
    <h2>Form Registrasi</h2>
    <form action="" method="post">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Alamat Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Kata Sandi:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="checkbox" name="" onclick="showPassword()" id=""><br><br>

        <input type="submit" value="Daftar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = $_POST['password'];

        // Variabel untuk menyimpan pesan kesalahan
        $errors = [];

        // Validasi kata sandi
        if (strlen($password) < 8) {
            $errors[] = "Kata sandi harus memiliki minimal 8 karakter.";
        }
        if (!preg_match('/[A-Z]/', $password)) {
            $errors[] = "Kata sandi harus mengandung setidaknya satu huruf besar.";
        }
        if (!preg_match('/[a-z]/', $password)) {
            $errors[] = "Kata sandi harus mengandung setidaknya satu huruf kecil.";
        }
        if (!preg_match('/[0-9]/', $password)) {
            $errors[] = "Kata sandi harus mengandung setidaknya satu angka.";
        }

        // Menampilkan pesan kesalahan atau sukses
        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo "<p style='color:red;'>$error</p>";
            }
        } else {
            echo "<p style='color:green;'>Registrasi berhasil!</p>";
        }
    }
    ?>
</body>
<script>
        function showPassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</html>
