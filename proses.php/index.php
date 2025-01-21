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
    <form action="proses.php" method="post">
       <table style="border: 1px solid">
        <tr>
            <td>Operator kiri</td>
            <td>Operator</td>
            <td>Operator Kanan</td>
            <td> </td>
        </tr>
        <tr>
            <td><input type="number" name="var1" required placeholder="Operator Kiri"></td>
            <td><select name="var2">
                //operator aritmatika
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="/">/</option>
                <option value="%">/</option>
                //operator perbandingan
                <option value="==">==</option>
                <option value="!=">!=</option>
                <option value="<"><</option>
                <option value=">">></option>
                <option value="<="><=</option>
                <option value=">=">>=</option>                
                //operator logika
                <!-- <option value="&&">&&</option>
                <option value="||">||</option>
                <option value="^">^</option>
                <option value="!">!</option> -->
            </select></td>
            <td><input type="number" name="var3" required placeholder="Operator Kanan"></td>
            <td><input type="submit"></td>
        </tr>        
       </table>
    </form>
</body>
</html>