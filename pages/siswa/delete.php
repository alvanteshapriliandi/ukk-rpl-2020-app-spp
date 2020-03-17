<?php 
    include '../../config.php';
    try {
        $sql = "DELETE FROM siswa WHERE nisn =  :nisn";
        $stmt = $DBH->prepare($sql);
        $stmt->bindParam(':nisn', $_GET['nisn'], PDO::PARAM_INT);	
        $stmt->execute();
        header("location:index.php");
    } catch (PDOException $e) {
        echo 'Terjadi kesalahan, silahkan input data kembali. ';
        echo $e;
    }
?>