<?php 
    // koneksi database
    include '../../config.php';
    
    // menangkap data yang di kirim dari form
    $nama_kelas = $_POST['nama_kelas'];
    $kompetensi_keahlian = $_POST['kompetensi_keahlian'];
    try {
        $STH = $DBH->prepare("INSERT INTO kelas ( nama_kelas, kompetensi_keahlian ) values ( ?, ? )");
        $STH->execute([$nama_kelas, $kompetensi_keahlian]);
        header("location:index.php");
    } catch (PDOException $e) {
        echo 'Terjadi kesalahan, silahkan input data kembali. ';
        echo $e;
    }
    // mengalihkan halaman kembali ke index.php
    
 
?>