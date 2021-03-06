<?php require '../../layouts/header.php'; ?>
    <div class="container">
       <div class="card">
           <h1>Edit Siswa</h1>
           <div class="text-right m-5 mr-0">
                <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/siswa/index.php"; ?>" class="btn-tambah">Kembali</a>
           </div>
           <?php
                include '../../config.php';
                $stmt = $DBH->prepare("select * from siswa where nisn = ?");
                $stmt->execute([$_GET['nisn']]);
                $siswa = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
           <form method="POST" action="update_siswa.php">
                <input type="hidden" id="nisn" name="nisn" value="<?php echo $siswa['nisn']; ?>">
                <label for="nis">NIS</label>
                <input type="text" id="nis" name="nis" value="<?php echo $siswa['nis']; ?>">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" value="<?php echo $siswa['nama']; ?>">
                <label for="nama">Kelas</label>
                <select name="id_kelas" id="">
                    <?php
                        $STH = $DBH->query('SELECT * from kelas');
                        $STH->execute();
                        $result = $STH->fetchAll(PDO::FETCH_ASSOC);
                        var_dump($result);
                        foreach ($result as $row):
                    ?>
                        <option value="<?php echo $row['id_kelas']; ?>" <?php echo $siswa['id_kelas'] === $row['id_kelas'] ? 'selected' : '' ; ?>><?php echo $row['nama_kelas']; ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" value="<?php echo $siswa['alamat']; ?>">
                <label for="no_tlp">Telepon</label>
                <input type="text" id="no_tlp" name="no_tlp" value="<?php echo $siswa['no_tlp']; ?>">
                <label for="nama">SPP</label>
                <select name="id_spp" id="">
                    <?php
                        $STH = $DBH->query('SELECT * from spp');
                        $STH->execute();
                        $result = $STH->fetchAll(PDO::FETCH_ASSOC);
                        var_dump($result);
                        foreach ($result as $row):
                    ?>
                        <option value="<?php echo $row['id_spp']; ?>"  <?php echo $siswa['id_spp'] === $row['id_spp'] ? 'selected' : '' ; ?>><?php echo $row['tahun'] . ' - Rp. ' . $row['nominal'] . ',-'; ?></option>
                    <?php endforeach; ?>
                </select>
                <button type="submit" class="btn-tambah">Update Siswa</button>
           </form>
       </div>
    </div>
<?php require '../../layouts/footer.php'; ?>