<?php require '../../layouts/header.php'; ?>
    <div class="container">
       <div class="card">
           <h1>Tambah kelas</h1>
           <div class="text-right m-5 mr-0">
                <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/kelas/index.php"; ?>" class="btn-tambah">Kembali</a>
           </div>
           <form method="POST" action="post_kelas.php">
                <label for="nama_kelas">Nama</label>
                <input type="text" id="nama_kelas" name="nama_kelas">
                <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
                <input type="text" id="kompetensi_keahlian" name="kompetensi_keahlian">
                <button type="submit" class="btn-tambah">Tambah kelas</button>
           </form>
       </div>
    </div>
<?php require '../../layouts/footer.php'; ?>