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
    <form action="proseslogica.php" method="post">
       <table style="border: 1px solid">
        <tr>
            <td>Operator kiri</td>
            <td>Operator</td>
            <td>Operator Kanan</td>
            <td> </td>
        </tr>
        <tr>
            <td><select name="var1" id="">
                <option value="True">True</option>
                <option value="False">False</option>
            </select></td>
            <td><select name="var2">
                <!-- //operator aritmatika
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
                <option value=">=">>=</option>                 -->
                //operator logika
                <option value="&&">&&</option>
                <option value="||">||</option>
                <option value="^">^</option>
                <option value="!">!</option>
            </select></td>
            <td><select name="var3" id="">
                <option value="True">True</option>
                <option value="False"> False</option>
            </select></td>
            <td><input type="submit"></td>
        </tr>        
       </table>
    </form>
</body>
</html>