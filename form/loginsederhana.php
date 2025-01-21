<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="post">
        <label for="username">Nama Pengguna:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Kata Sandi:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="checkbox" name="" onclick="showPassword()" id="">

        <input type="submit" value="Login">
    </form>

    <?php
    // Username dan password yang benar
    $correct_username = "user123";
    $correct_password = "password123";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validasi login
        if ($username == $correct_username && $password == $correct_password) {
            echo "<p style='color:green;'>Login berhasil</p>";
        } elseif ($username != $correct_username && $password == $correct_password) {
            echo "<p style='color:red;'>Username Salah</p>";
        } elseif ($username == $correct_username && $password != $correct_password) {
            echo "<p style='color:red;'>Password Salah</p>";
        } else {
            echo "<p style='color:red;'>Username dan Password salah</p>";
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
