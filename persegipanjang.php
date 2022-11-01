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
        <label for="panjang">
            <h3>Masukkan panjang : </h3>
        </label><br>
        <input type="text" name="panjang">
        <label for="lebar"></label>
        <input type="text" name=" lebar">
        <button type="submit">HITUNG!</button>
    </form>

    <?php

    function luasPersegiPanjang($panjang, $lebar)
    {
        return $panjang * $lebar;
    }
    if (isset($_POST['panjang']) && isset($_POST['lebar'])) {
        echo luasPersegiPanjang($_POST['panjang'], $_POST['lebar']);
    }

    ?>
</body>

</html>