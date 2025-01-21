<?php
// session_start();
// bypass
// if(!isset($_SESSION['username'])){
//     header('location: login.php');
// }
if(!isset($_COOKIE["username"])){
    header("Location:login.php");
} else {
   if(isset($_COOKIE["poin"])){
    $poinsaatini = (int)$_COOKIE['poin'];
    if ($poinsaatini >= 200) {
        echo "Hello " . $_COOKIE['username'] . "<br>";
        echo "Selamat, kamu telah mencapai $poinsaatini poin dan mendapatkan voucher diskon 20%!<br>";
    } elseif ($poinsaatini >= 100) {
        echo "Hello " . $_COOKIE['username'] . "<br>";
        echo "Selamat, kamu telah mencapai $poinsaatini poin dan mendapatkan voucher diskon 10%!<br>";
    } else {
        echo "Hello " . $_COOKIE['username'] . "<br>";
        echo "Selamat, kamu mendapatkan $poinsaatini poin.<br>";
    }
}else{
    echo "Hello " . $_COOKIE['username'] . "<br>";
    echo "Selamat, kamu belum mendapatkan poin.<br>";
}
}
echo"<a href='login.php'>logout</a>";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       .theme-button {
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            border: none;
            color: white;
        }
        .light { background-color: white; color: black; }
        .dark { background-color: black; color: white; }
        .blue { background-color: blue; color: white; }

    </style>
    <title>Document</title>
</head>
<body>
    <p>waktu tersisa <span id="countdown"></span></p>

    <p>Pilih tema:</p>
    <button class="theme-button light" onclick="setTheme('light')">Terang</button>
    <button class="theme-button dark" onclick="setTheme('dark')">Gelap</button>
    <button class="theme-button blue" onclick="setTheme('blue')">Biru</button>

    <!-- <p>waktu ganti tema <span id="waktu"></span></p> -->
</body>
</html>
<script>
    var timeleft = getTimeFromCookie() || 30;
    var countdownElemen = document.getElementById('countdown');

    // Jalankan timer
    var downloadTimer = setInterval(function() {
        if (timeleft <= 0) {
            clearInterval(downloadTimer);
            countdownElemen.innerHTML = "Waktu habis";
            window.location.href = "sesi4.php"; // Logout otomatis
        } else {
            countdownElemen.innerHTML = timeleft + " detik lagi";
        }
        timeleft -= 1;
        // Simpan waktu tersisa ke cookie setiap detik
        document.cookie = "timeleft=" + timeleft + "; max-age=30; path=/";
    }, 1000);

    // Fungsi untuk mengambil sisa waktu dari cookie
    function getTimeFromCookie() {
        const cookie = document.cookie.split('; ').find(row => row.startsWith('timeleft='));
        return cookie ? parseInt(cookie.split('=')[1]) : null;
    }

    function setTheme(theme) {
            document.body.className = theme;
            document.cookie = "theme=" + theme + "; max-age=15"; // Cookie berlaku selama 15 detik
        //     if(sisawaktu <= 0){
           
        //     document.getElementById('countdown').innerHTML = "waktu habis";
    
        // } else {
        //     waktuElemen.innerHTML = sisawaktu + " detik lagi";
        // }
        // sisawaktu -= 1;
        }

        // Fungsi untuk mengambil tema dari cookie
        function getThemeFromCookie() {
            const cookie = document.cookie.split('; ').find(row => row.startsWith('theme='));
            return cookie ? cookie.split('=')[1] : null;
        }

        // Mengatur tema sesuai cookie saat halaman dimuat
        window.onload = function() {
            const savedTheme = getThemeFromCookie();
            if (savedTheme) {
                document.body.className = savedTheme;
            }

            // Mengubah background otomatis setiap 3 detik setelah 15 detik
            setTimeout(() => {
                const themes = ['light', 'dark', 'blue'];
                let index = 0;
                setInterval(() => {
                    document.body.className = themes[index];
                    index = (index + 1) % themes.length;
                }, 3000);
            }, 15000);
        }
</script>