<?php 
    // koneksi database
    include '../../config.php';
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];
    $id_spp = $_POST['id_spp'];
    // var_dump($tahun, $nominal);
    // exit();
    try {
        $STH = $DBH->prepare("update spp set tahun=?, nominal=? where id_spp=?");
        $STH->execute([$tahun, $nominal, $id_spp]);
        header("location:index.php");
    } catch (PDOException $e) {
        echo 'Terjadi kesalahan, silahkan input data kembali. ';
        echo $e;
    }
?>