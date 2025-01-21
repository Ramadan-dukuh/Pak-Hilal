<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Materi Array dalam PHP</h1>

    <?php
    // Soal 1
    echo "<h1>Soal 1</h1>";   
    $buah1 = array("Apel", "Jeruk", "Pisang", "Mangga", "Anggur");
    print_r($buah1);
    echo "<br>";
    echo $buah1[1];


    // Soal 2
    echo "<h1>Soal 2</h1>";   
    $angkaAcak = array(2, 5, 8, 12, 16, 23, 42);
    print_r($angkaAcak);
    echo "<br>";
    echo "Jumlah elemen dalam array: " . count($angkaAcak);


    // Soal 3
    echo "<h1>Soal 3</h1>";   
    $angkaTambah = array();
    array_push($angkaTambah, 5, 10, 15, 20);
    echo "<br>";
    print_r($angkaTambah);


    // Soal 4
    echo "<h1>Soal 4</h1>";
    $kataAcak = array("bunga", "buku", "mobil", "motor", "meja");
    foreach ($kataAcak as $k) {
        echo $k . "<br>";
    }


    // Soal 5
    echo "<h1>Soal 5</h1>";
    $namaGuru = array("Ali", "Budi", "Charlie", "Diana", "Eva");
    print_r($namaGuru);
    if (in_array("Charlie", $namaGuru)) {
        echo "<br>";
        echo "Ditemukan";
    } else {
        echo "Tidak ditemukan";
    }


    // Soal 6
    echo "<h1>Soal 6</h1>";
    $mahasiswa = array(
        "nama" => "Kiki",
        "usia" => 17,
        "jurusan" => "RPL"
    );

    echo "Nama: " . $mahasiswa["nama"] . "<br>";
    echo "Usia: " . $mahasiswa["usia"] . "<br>";
    echo "Jurusan: " . $mahasiswa["jurusan"] . "<br>";


    // Soal 7
    echo "<h1>Soal 7</h1>";
    $buahA = array("Apel", "Jeruk");
    $buahB = array("Mangga", "Pisang");
    $buahC = array_merge($buahA, $buahB);
    print_r($buahC);

    
    // Soal 8
    echo "<h1>Soal 8</h1>";
    $bilangan = array(34, 12, 5, 78, 1);
    sort($bilangan);
    print_r($bilangan);


    // Soal 9
    echo "<h1>Soal 9</h1>";
    $buah2 = array("apel", "jeruk", "mangga", "pisang", "semangka");

    // Menghapus elemen tengah (indeks 2)
    unset($buah2[2]);

    // Menampilkan array setelah penghapusan elemen
    print_r($buah2);


    // Soal 10
    echo "<h1>Soal 10</h1>";
    $kota = array("Jakarta", "Bandung", "Surabaya", "Medan");

    // Mengganti nama "Surabaya" dengan "Yogyakarta"
    $kota[2] = "Yogyakarta";

    // Menampilkan array setelah perubahan
    print_r($kota);
?>
</body>

</html>