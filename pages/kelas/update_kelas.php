<?php 
    // koneksi database
    include '../../config.php';
    $nama_kelas = $_POST['nama_kelas'];
    $kompetensi_keahlian = $_POST['kompetensi_keahlian'];
    $id_kelas = $_POST['id_kelas'];
    // var_dump($tahun, $nominal);
    // exit();
    try {
        $STH = $DBH->prepare("update kelas set nama_kelas=?, kompetensi_keahlian=? where id_kelas=?");
        $STH->execute([$nama_kelas, $kompetensi_keahlian, $id_kelas]);
        header("location:index.php");
    } catch (PDOException $e) {
        echo 'Terjadi kesalahan, silahkan input data kembali. ';
        echo $e;
    }
?>