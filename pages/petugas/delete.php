<?php 
    include '../../config.php';
    try {
        $sql = "DELETE FROM petugas WHERE id_petugas =  :id_petugas";
        $stmt = $DBH->prepare($sql);
        $stmt->bindParam(':id_petugas', $_GET['id_petugas'], PDO::PARAM_INT);	
        $stmt->execute();
        header("location:index.php");
    } catch (PDOException $e) {
        echo 'Terjadi kesalahan, silahkan input data kembali. ';
        echo $e;
    }
?>