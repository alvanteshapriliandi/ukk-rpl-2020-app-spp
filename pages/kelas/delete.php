<?php 
    include '../../config.php';
    try {
        $sql = "DELETE FROM kelas WHERE id_kelas =  :id_kelas";
        $stmt = $DBH->prepare($sql);
        $stmt->bindParam(':id_kelas', $_GET['id_kelas'], PDO::PARAM_INT);	
        $stmt->execute();
        header("location:index.php");
    } catch (PDOException $e) {
        echo 'Terjadi kesalahan, silahkan input data kembali. ';
        echo $e;
    }
?>