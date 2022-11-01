<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="alas">
            <h3 style="display: inline">Masukkan Alas : </h3>
        </label><br>
        <input type="text" name="alas">
        <label for="tinggi">
            <h3 style="display: inline">Masukkan Tinggi : </h3>
        </label>
        <input type="text" name="tinggi">
        <button type="submit">HITUNG!</button>
    </form>

    <?php

    function luasSegitiga($alas, $tinggi)
    {
        return ($alas * $tinggi) / 2;
    }
    if (isset($_POST['alas']) && isset($_POST['tinggi'])) {
        echo luasSegitiga($_POST['alas'], $_POST['tinggi']);
    }

    ?>
</body>

</html>