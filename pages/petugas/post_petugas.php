<?php 
    // koneksi database
    include '../../config.php';
    
    // menangkap data yang di kirim dari form
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama_petugas = $_POST['nama_petugas'];
    $level = $_POST['level'];
    try {
        $STH = $DBH->prepare("INSERT INTO petugas ( username, password, nama_petugas, level ) values ( ?, ?, ?, ? )");
        $STH->execute([$username, $password, $nama_petugas, $level]);
        header("location:index.php");
    } catch (PDOException $e) {
        echo 'Terjadi kesalahan, silahkan input data kembali. ';
        echo $e;
    }
    // mengalihkan halaman kembali ke index.php
    
 
?>