<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            width: 300px;
            margin: 0 auto;
            text-align: center;
        
        }
    </style>
</head>
<body>

    <hr>
    <form action="" method="post">
        <br>
        <h2>Registrasi</h2><br>
        <label for="">Username  :</label>
        <input type="text" name="user" required><br><br>

        <label for="">Email  :</label>
        <input type="email" name="email" required><br><br>

        <label for="">Password  :</label>
        <input type="password" name="pw" id="pw"><br>
        <input type="checkbox" name="show" onclick="showPassword()"> Tampilkan Password<br><br>

        <input type="submit" value="Daftar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pw = $_POST['pw'];
        $user = $_POST['user'];
        $email = $_POST['email'];

        $errors = [];

        // Validasi nama
        if (empty($user)) {
            $errors[] = "Nama tidak boleh kosong.";
        }

        // Validasi email
        if (empty($email)) {
            $errors[] = "Alamat email tidak boleh kosong.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Alamat email tidak valid.";
        }

        // Validasi password
        if (empty($pw)) {
            $errors[] = "Password tidak boleh kosong.";
        } elseif (strlen($pw) < 8) {
            $errors[] = "Password harus memiliki minimal 8 karakter.";
        }

        // Menampilkan pesan kesalahan atau pesan sukses
        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo "<p style='color:red;'>$error</p>";
            }
        } else {
            echo "<p style='color:green;'>Pendaftaran berhasil!</p>";
        }
    }
    ?>

    <script>
        function showPassword() {
            var x = document.getElementById("pw");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>
