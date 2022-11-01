<?php
function SegitigaPascal($jml_baris)
{ //definisikan banyaknya baris
    $segitiga = "";
    $value = [];
    for ($i = 1; $i <= $jml_baris; $i++) { // looping baris segitiga
        for ($j = 1; $j <= $i; $j++) { // looping untuk isi segitiga per-barisnya
            if ($j == 1 || $j == $i) {
                $value[$i][$j] = 1; // jika baris pertama definisikan 1
            } else {
                $value[$i][$j] = $value[$i - 1][$j] + $value[$i - 1][$j - 1]; // rumus penjumlahan baris ke-2 dst
            }
            $segitiga .= $value[$i][$j] . " ";
        }
        $segitiga .= "<br>";
    }
    echo "<center>" . $segitiga . "</center>";
}

//SegitigaPascal(10);
?>

<!-- Iterasi 1 
i = 1 
jml baris = 4
i + 1
Iterasi bersarang
j = 1
j <= i
j + 1 
if j = 1 / j = i
value baris ke (i dan j) - 1 = 1/
sekarang j = 2
2 <= 1 salah
Iterasi 2

segitiga = value baris ke (i dan j)-1 + /n
munculkan <center>segitiga</center>

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="persegi.php">Persegi</a><br>
    <a href="persegipanjang.php">Persegi Panjang</a><br>
    <a href="segitiga.php">Segitiga</a>

</body>

</html>