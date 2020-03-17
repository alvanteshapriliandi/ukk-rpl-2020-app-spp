<?php require '../../layouts/header.php'; ?>
    <div class="container">
       <div class="card">
           <h1>Edit SPP</h1>
           <div class="text-right m-5 mr-0">
                <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/spp/index.php"; ?>" class="btn-tambah">Kembali</a>
           </div>
            <?php
                include '../../config.php';
                $stmt = $DBH->prepare("select * from spp where id_spp = ?");
                $stmt->execute([$_GET['id_spp']]);
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
            <form method="POST" action="update_spp.php">
                <input type="hidden" name="id_spp" value="<?php echo $row['id_spp']; ?>">
                <label for="tahun">Tahun</label>
                <input type="text" id="tahun" name="tahun" value="<?php echo $row['tahun']?>">
                <label for="nominal">Nominal</label>
                <input type="number" id="nominal" name="nominal" value="<?php echo $row['nominal']?>">
                <button type="submit" class="btn-tambah">Update SPP</button>
            </form>
       </div>
    </div>
<?php require '../../layouts/footer.php'; ?>