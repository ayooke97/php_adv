<!DOCTYPE html>
<html lang="en">

<?php
// var_dump($_POST['nama']);

if (isset($_POST['nama']) && isset($_POST['email'])) {

    $email = $_POST['email'];
    echo "Selamat Datang {$_POST['nama']}, <br> Alamat email anda adalah : $email";
}


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <label for="namaInput">Nama</label>
        <input type="text" name="nama">
        <label for="emailInput">Email</label>
        <input type="email" name="email">
        <button type="submit">SUBMIT</button>
    </form>
</body>

</html>