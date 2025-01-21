<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>

<body>
    <form action="proses.php" method="post">
        <h1>Demo Perpindahan</h1>
        <p>Tampilkan angka dari 0 sampai 10</p>

        <label for="continue">Lakukan</label>
        <input type="radio" name="action" id="continue" value="continue">
        <label for="continue">Continue</label>

        <input type="radio" name="action" id="break" value="break">
        <label for="break">Break</label>

        <input type="radio" name="action" id="return" value="return">
        <label for="return">Return</label>

        <input type="radio" name="action" id="exit" value="exit">
        <label for="exit">Exit</label>

        <br>

        <label for="bil">Pada bilangan ke</label>
        <select name="bil" id="bil">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>

        <br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>
