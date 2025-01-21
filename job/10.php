<?php
// Deklarasi dua bilangan pertama dalam deret Fibonacci
$fib1 = 0;
$fib2 = 1;

// Menampilkan dua bilangan pertama
echo $fib1 . ", " . $fib2;

// Loop untuk menghitung dan menampilkan bilangan Fibonacci berikutnya
for ($i = 2; $i < 9; $i++) {
    $fib_next = $fib1 + $fib2;
    echo ", " . $fib_next;

    // Update nilai fib1 dan fib2 untuk iterasi berikutnya
    $fib1 = $fib2;
    $fib2 = $fib_next;
}
?>
