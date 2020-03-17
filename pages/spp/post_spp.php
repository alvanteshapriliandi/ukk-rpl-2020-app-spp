<?php 
    // koneksi database
    include '../../config.php';
    
    // menangkap data yang di kirim dari form
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];
    try {
        $STH = $DBH->prepare("INSERT INTO spp ( tahun, nominal ) values ( ?, ? )");
        $STH->execute([$tahun, $nominal]);
        header("location:index.php");
    } catch (PDOException $e) {
        echo 'Terjadi kesalahan, silahkan input data kembali. ';
        echo $e;
    }
    // mengalihkan halaman kembali ke index.php
    
 
?>