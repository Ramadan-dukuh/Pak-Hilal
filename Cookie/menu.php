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
    // Tentukan durasi countdown (dalam detik)
    var duration = 30;
    var countdownElemen = document.getElementById('countdown');

    // Fungsi untuk mendapatkan nilai cookie berdasarkan namanya
    function getCookie(name) {
        const cookie = document.cookie.split('; ').find(row => row.startsWith(name + '='));
        return cookie ? cookie.split('=')[1] : null;
    }

    // Fungsi untuk mengatur cookie dengan nama, nilai, dan durasi waktu (dalam detik)
    function setCookie(name, value, seconds) {
        let date = new Date();
        date.setTime(date.getTime() + (seconds * 1000));
        document.cookie = `${name}=${value}; expires=${date.toUTCString()}; path=/`;
    }

    // Cek apakah cookie "endtime" sudah ada
    var endTime = getCookie('endtime');

    if (!endTime) {
        // Jika cookie tidak ada, atur waktu akhir baru
        var newEndTime = new Date().getTime() + (duration * 1000);
        setCookie('endtime', newEndTime, duration);
        endTime = newEndTime;
    } else {
        endTime = parseInt(endTime);
    }

    function updateTimer() {
        var now = new Date().getTime();
        var timeleft = Math.max(0, Math.floor((endTime - now) / 1000));

        if (timeleft <= 0) {
            countdownElemen.innerHTML = "Waktu habis";
            clearInterval(timerInterval);
            window.location.href = "sesi4.php"; // Redirect saat waktu habis
        } else {
            countdownElemen.innerHTML = timeleft + " detik lagi";
        }
    }

    // Update countdown setiap detik
    var timerInterval = setInterval(updateTimer, 1000);

    // Jalankan timer saat halaman dimuat
    updateTimer();

    function setTheme(theme) {
        document.body.className = theme;
        setCookie("theme", theme, 15); // Simpan tema selama 15 detik
    }

    function getThemeFromCookie() {
        return getCookie('theme');
    }

    window.onload = function() {
        const savedTheme = getThemeFromCookie();
        if (savedTheme) {
            document.body.className = savedTheme;
        }

        // Ubah tema otomatis setelah 15 detik
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
