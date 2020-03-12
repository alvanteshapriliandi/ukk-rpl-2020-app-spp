<?php require '../../layouts/header.php'; ?>
    <div class="container">
       <div class="card">
           <h1>Edit Petugas</h1>
           <div class="text-right m-5 mr-0">
                <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/petugas/index.php"; ?>" class="btn-tambah">Kembali</a>
           </div>
            <?php
                include '../../config.php';
                $stmt = $DBH->prepare("select * from petugas where id_petugas = ?");
                $stmt->execute([$_GET['id_petugas']]);
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
            <form method="POST" action="update_petugas.php">
                <input type="hidden" name="id_petugas" value="<?php echo $row['id_petugas']; ?>">
                <label for="username">username</label>
                <input type="text" id="username" name="username" value="<?php echo $row['username']; ?>">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                <label for="nama_petugas">Nama Petugas</label>
                <input type="text" id="nama_petugas" name="nama_petugas" value="<?php echo $row['nama_petugas']; ?>">
                <label for="nama_petugas">Level</label>
                <select name="level" id="">
                    <option value="admin" <?php echo $row['level'] === 'admin' ? 'Selected' : ''; ?> >Admin</option>
                    <option value="petugas" <?php echo $row['level'] === 'petugas' ? 'Selected' : ''; ?>>Petugas</option>
                </select>
                <button type="submit" class="btn-tambah">Update Petugas</button>
            </form>
       </div>
    </div>
<?php require '../../layouts/footer.php'; ?>