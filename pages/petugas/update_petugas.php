<?php 
    // koneksi database
    include '../../config.php';
    $stmt = $DBH->prepare("select * from petugas where id_petugas = ?");
    $stmt->execute([$_POST['id_petugas']]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $id_petugas = $_POST['id_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'] === '' ? $row['password'] : md5($_POST['password']);
    $nama_petugas = $_POST['nama_petugas'];
    $level = $_POST['level'];
    try {
        $STH = $DBH->prepare("update petugas set username=?, password=?, nama_petugas=?, level=? where id_petugas=?");
        $STH->execute([$username, $password, $nama_petugas, $level, $id_petugas]);
        header("location:index.php");
    } catch (PDOException $e) {
        echo 'Terjadi kesalahan, silahkan input data kembali. ';
        echo $e;
    }
?>