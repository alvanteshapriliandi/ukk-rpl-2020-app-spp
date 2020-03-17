<?php require '../../layouts/header.php'; ?>
    <div class="container">
       <div class="card">
           <h1>Edit Kelas</h1>
           <div class="text-right m-5 mr-0">
                <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/kelas/index.php"; ?>" class="btn-tambah">Kembali</a>
           </div>
            <?php
                include '../../config.php';
                $stmt = $DBH->prepare("select * from kelas where id_kelas = ?");
                $stmt->execute([$_GET['id_kelas']]);
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
            <form method="POST" action="update_kelas.php">
                <input type="hidden" name="id_kelas" value="<?php echo $row['id_kelas']; ?>">
                <label for="nama_kelas">Nama</label>
                <input type="text" id="nama_kelas" name="nama_kelas" value="<?php echo $row['nama_kelas']?>">
                <label for="kompetensi_keahlian">Kompetensi</label>
                <input type="text" id="kompetensi_keahlian" name="kompetensi_keahlian" value="<?php echo $row['kompetensi_keahlian']?>">
                <button type="submit" class="btn-tambah">Update Kelas</button>
            </form>
       </div>
    </div>
<?php require '../../layouts/footer.php'; ?>