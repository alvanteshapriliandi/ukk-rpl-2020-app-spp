<?php 
    include '../../config.php';
    try {
        $sql = "DELETE FROM spp WHERE id_spp =  :id_spp";
        $stmt = $DBH->prepare($sql);
        $stmt->bindParam(':id_spp', $_GET['id_spp'], PDO::PARAM_INT);	
        $stmt->execute();
        header("location:index.php");
    } catch (PDOException $e) {
        echo 'Terjadi kesalahan, silahkan input data kembali. ';
        echo $e;
    }
?>