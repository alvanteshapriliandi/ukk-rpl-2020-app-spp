<?php require '../../layouts/header.php'; ?>
    <div class="container">
       <div class="card">
           <h1>Tambah Siswa</h1>
           <div class="text-right m-5 mr-0">
                <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/siswa/index.php"; ?>" class="btn-tambah">Kembali</a>
           </div>
           <?php include '../../config.php'; ?>
           <form method="POST" action="post_siswa.php">
                <label for="nisn">NISN</label>
                <input type="text" id="nisn" name="nisn">
                <label for="nis">NIS</label>
                <input type="text" id="nis" name="nis">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama">
                <label for="nama">Kelas</label>
                <select name="id_kelas" id="">
                    <?php
                        $STH = $DBH->query('SELECT * from kelas');
                        $STH->execute();
                        $result = $STH->fetchAll(PDO::FETCH_ASSOC);
                        var_dump($result);
                        foreach ($result as $row):
                    ?>
                        <option value="<?php echo $row['id_kelas']; ?>"><?php echo $row['nama_kelas']; ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat">
                <label for="no_tlp">Telepon</label>
                <input type="text" id="no_tlp" name="no_tlp">
                <label for="nama">SPP</label>
                <select name="id_spp" id="">
                    <?php
                        $STH = $DBH->query('SELECT * from spp');
                        $STH->execute();
                        $result = $STH->fetchAll(PDO::FETCH_ASSOC);
                        var_dump($result);
                        foreach ($result as $row):
                    ?>
                        <option value="<?php echo $row['id_spp']; ?>"><?php echo $row['tahun'] . ' - Rp. ' . $row['nominal'] . ',-'; ?></option>
                    <?php endforeach; ?>
                </select>
                <button type="submit" class="btn-tambah">Tambah Siswa</button>
           </form>
       </div>
    </div>
<?php require '../../layouts/footer.php'; ?>