<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        tr,td{
            border: 1px solid;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
       <table style="border: 1px solid">
        <tr>
            <td>Operator Kiri</td>
            <td>Operator</td>
            <td>Operator Kanan</td>
            <td>Hasil</td>
        </tr>
        <tr>
            <td><input type="number" name="var1" required placeholder="Operator Kiri"></td>
            <td>
                <select name="var2">
                    <!-- operator aritmatika -->
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                    <option value="%">%</option>             
                </select>
            </td>
            <td><input type="number" name="var3" required placeholder="Operator Kanan"></td>
            <td><input type="submit" value="Hitung"></td>
        </tr>        
       </table>
    </form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil input dari form
    $var1 = $_POST['var1'];
    $var2 = $_POST['var2'];
    $var3 = $_POST['var3'];

    // Menangani operasi aritmatika
    switch ($var2) {
        case "+":
            $var4 = $var1 + $var3;
            break;
        case "-":
            $var4 = $var1 - $var3;
            break;
        case "*":
            $var4 = $var1 * $var3;
            break;
        case "/":
            // Cek untuk pembagian dengan nol
            if ($var3 != 0) {
                $var4 = $var1 / $var3;
            } else {
                $var4 = "Error: Pembagian dengan nol!";
            }
            break;
        case "%":
            // Cek untuk modulus dengan nol
            if ($var3 != 0) {
                $var4 = $var1 % $var3;
            } else {
                $var4 = "Error: Modulus dengan nol!";
            }
            break;
        default:
            $var4 = "Operator tidak valid!";
    }

    // Menampilkan hasil
    echo "Hasil dari $var1 $var2 $var3 = $var4";
}
?>

