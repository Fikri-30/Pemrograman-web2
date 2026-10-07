<!DOCTYPE html>
<html>
<head>
    <title>Contoh Penggunaan UDF</title>
</head>
<body>


<form method="POST" action="">
    Masukkan Bilangan Pertama : <br>
    <input type="number" name="A" size="10" required> <br>
    Masukkan Bilangan Kedua : <br>
    <input type="number" name="B" size="10" required> <br><br>
    <input type="submit" name="hitung" value="Hitung">
</form>

<?php

if (isset($_POST['hitung'])) {
    $A = $_POST["A"];
    $B = $_POST["B"];

    
    function jumlah($A, $B) {
        return $A + $B;
    }

    function kurang($A, $B) {
        return $A - $B;
    }

    function kali($A, $B) {
        return $A * $B;
    }

    function bagi($A, $B) {
        if ($B == 0) {
            return "Tidak dapat dibagi dengan 0";
        }
        return $A / $B;
    }

    
    $jumlahbil = jumlah($A, $B);
    $kurangbil = kurang($A, $B);
    $kalibil   = kali($A, $B);
    $bagibil    = bagi($A, $B);

    
    echo "<hr>";
    echo "Bilangan Pertama : " . $A . "<br>";
    echo "Bilangan Kedua : " . $B . "<br><br>";

    echo "<b>Hasil Penjumlahan:</b><br>";
    printf("Penjumlahan antara : %d + %d = %d", $A, $B, $jumlahbil);
    echo "<br><br>";

    echo "<b>Hasil Pengurangan:</b><br>";
    printf("Pengurangan antara : %d - %d = %d", $A, $B, $kurangbil);
    echo "<br><br>";

    echo "<b>Hasil Perkalian:</b><br>";
    printf("Perkalian antara : %d * %d = %d", $A, $B, $kalibil);
    echo "<br><br>";

    echo "<b>Hasil Pembagian:</b><br>";
    if (is_numeric($bagibil)) {
        printf("Pembagian antara : %d / %d = %.2f", $A, $B, $bagibil);
    } else {
        echo $bagibil;
    }
    echo "<br><br>";
}
?>

</body>
</html>



