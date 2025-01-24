<?php
session_start();
include "koneksi.php";

if (isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Prepared statement untuk keamanan SQL Injection
    $query_admin = "SELECT * FROM user WHERE email = ?";
    $stmt = mysqli_prepare($koneksi, $query_admin);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result_admin = mysqli_stmt_get_result($stmt);
    $user_admin = mysqli_fetch_assoc($result_admin);

    if ($user_admin && password_verify($password, $user_admin['password'])) {
        $_SESSION['email'] = $user_admin['email'];
        $_SESSION['level'] = $user_admin['level'];
        $_SESSION['user_id'] = $user_admin['id'];
        header("Location: index.php");
        exit();
    } else {
        $error_message = "Email atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        .login-container {
            background: #fff;
            padding: 40px;
            border: 10px solid #0277bd;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            border-radius: 20px;
            background-image: url('https://www.transparenttextures.com/patterns/old-paper.png');
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #01579b;
            font-size: 2.5em;
            border-bottom: 2px dashed #0277bd;
            padding-bottom: 10px;
        }
        .login-container label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            text-align: left;
            color: #01579b;
        }
        .login-container input[type="email"],
        .login-container input[type="password"],
        .login-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #0277bd;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.8);
        }
        .login-container input[type="submit"] {
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
        .login-container input[type="submit"]:hover {
            background: #0277bd;
        }
        .show-password {
            display: flex;
            align-items: center;
            color: #01579b;
        }
        .show-password input {
            margin-right: 5px;
        }
        .error-message {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($error_message)) { echo "<p class='error-message'>$error_message</p>"; } ?>
        <form action="" method="post">                        
            <label for="email">Email</label>
            <input type="email" name="email" required>
            <label for="password">Kata Sandi</label>
            <input type="password" id="password" name="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$"
            title="Password harus minimal 8 karakter, mengandung huruf besar, huruf kecil, dan angka" required>
            <div class="show-password">
                <input type="checkbox" onclick="showPassword()"> Tampilkan Kata Sandi
            </div><br>  
            <p>Doesn't have an account? <a href="formRegis.php">Register</a></p>
            <input type="submit" value="Login">
        </form>
    </div>

    <script>
        function showPassword() {
            var x = document.getElementById("password");
            x.type = x.type === "password" ? "text" : "password";
        }
    </script>
</body>
</html>
