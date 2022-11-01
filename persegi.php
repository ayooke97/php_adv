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
        <label for="sisi">
            <h3>Masukkan sisi : </h3>
        </label><br>
        <input type="text" name="sisi">
        <button type="submit">HITUNG!</button>
    </form>

    <?php

    function luasPersegi($sisi)
    {
        return 4 * $sisi;
    }
    if (isset($_POST['sisi'])) {
        echo luasPersegi($_POST['sisi']);
    }

    ?>
</body>

</html>