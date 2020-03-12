<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo "http://$_SERVER[HTTP_HOST]"."/style/style.css"; ?>">
    <title>Aplikasi SPP</title>
</head>
<body>

    <div class="topnav" id="myTopnav">
        <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/dashboard.php"; ?>" class="active">Dashboard</a>
        <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/petugas/index.php"; ?>">Petugas</a>
        <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/spp/index.php"; ?>">SPP</a>
        <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/kelas/index.php"; ?>">Kelas</a>
        <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/siswa/index.php"; ?>">Siswa</a>
        <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/pembayaran/index.php"; ?>">Pembayaran</a>
        <a href="" class="float-right">Log Out</a>
    </div>