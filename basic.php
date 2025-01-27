<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B a s i c</title>
    <style>
        * {
            background-color: black;
            padding: 12px 0px 0px 18px;
            color: white;
            font: 20px/1.5 Arial, sans-serif;
            /* Gaya, ketebalan, ukuran/font-size, tinggi garis, dan jenis font */
            letter-spacing: 2px;
            /* Jarak antar huruf */
            word-spacing: 4px;
            /* Jarak antar kata */
        }
    </style>
</head>

<body>
</body>

</html>


<!-- 1) Bilangan Prima -->

<?php
for ($angka = 2; $angka <= 33; $angka++) { // Perulangan dari 2 sampai 33
    $prima = true; // Asumsi awal angka adalah prima

    // Periksa apakah angka memiliki pembagi selain 1 dan dirinya sendiri
    for ($i = 2; $i < $angka; $i++) {
        if ($angka % $i == 0) { // Jika habis dibagi angka lain
            $prima = false; // Bukan bilangan prima
            break; // Hentikan pengecekan
        }
    }

    // Hasil
    if ($prima) {
        echo "$angka bilangan prima.<br>";
    } else {
        echo "$angka bukan bilangan prima.<br>";
    }
}
?>

<!-- 2) Menentukan Angka Terbesar  -->

<?php
$a = 10;
$b = 20;
$c = 30;

if ($a > $b && $a > $c) {

    $terbesar = $a;
} else if ($b > $a && $b > $c) {

    $terbesar = $b;
} else if ($c > $a && $c > $b) {

    $terbesar = $c;
}

echo "angka terbesar adalah $terbesar";
?>

<!-- 3) Fungsi Akar Kuadrat -->
<?php
$angka = 20;

if ($angka < 0) {
    echo "input tidak valid";
} else {
    $angka = sqrt($angka);
}

echo $angka;

// pilihan ke 2

$angka = 100;

if ($angka < 0) {
    echo "input tidak valid";
} else if ((sqrt($angka) * sqrt($angka) - $angka > 0)) {
    echo "kuadrat kurang sempurna";
} else {
    echo sqrt($angka);
}
?>


<!-- 4) Deret Fibonacci -->

<?php

$a = 0;
$b = 1;
$n = 10;

for ($i = 1; $i <= $n; $i++) {
    echo "($a)  ";

    $c = $a + $b;
    $a = $b;
    $b = $c;
}

?>

<!-- 5) Faktorial -->

<?php

$a = 1;
$n = 5;

for ($i = $n; $i >= 1; $i--) {

    $a *= $i;

    if ($i > 1) {
        echo "$i x ";
    } else if ($i = 1) {
        echo "$i = ";
    }
}
echo $a;

?>