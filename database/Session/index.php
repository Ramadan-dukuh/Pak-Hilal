<?php
session_start();
if (isset($_SESSION['user']) ) {
    header("location:menu.php");
    exit();
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container p-5">
        <h3 class="mb-3">LOG IN TO MENU</h3>
        <form action="login.php" method="post">
            <div class="mb-3">
                <input type="text" class="form-control" name="Username" placeholder="Username">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="Password" placeholder="Password">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" name="Submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>
