<?php require '../../layouts/header.php'; ?>
    <div class="container">
       <div class="card">
           <h1>Tambah Petugas</h1>
           <div class="text-right m-5 mr-0">
                <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/petugas/index.php"; ?>" class="btn-tambah">Kembali</a>
           </div>
           <form method="POST" action="post_petugas.php">
                <label for="username">username</label>
                <input type="text" id="username" name="username">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                <label for="nama_petugas">Nama Petugas</label>
                <input type="text" id="nama_petugas" name="nama_petugas">
                <label for="nama_petugas">Level</label>
                <select name="level" id="">
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select>
                <button type="submit" class="btn-tambah">Tambah Petugas</button>
           </form>
       </div>
    </div>
<?php require '../../layouts/footer.php'; ?>