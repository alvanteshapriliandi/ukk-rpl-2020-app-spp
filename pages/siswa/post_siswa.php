<?php 
    // koneksi database
    include '../../config.php';
    
    // menangkap data yang di kirim dari form
    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $id_spp = $_POST['id_spp'];
    try {
        $STH = $DBH->prepare("INSERT INTO siswa ( nisn, nis, nama, id_kelas, alamat, no_tlp, id_spp ) values ( ?, ?, ?, ?, ?, ?, ? )");
        $STH->execute([$nisn, $nis, $nama, $id_kelas, $alamat, $no_tlp, $id_spp]);
        header("location:index.php");
    } catch (PDOException $e) {
        echo 'Terjadi kesalahan, silahkan input data kembali. ';
        echo $e;
    }
    // mengalihkan halaman kembali ke index.php
    
 
?>