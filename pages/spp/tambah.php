<?php require '../../layouts/header.php'; ?>
    <div class="container">
       <div class="card">
           <h1>Tambah SPP</h1>
           <div class="text-right m-5 mr-0">
                <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/spp/index.php"; ?>" class="btn-tambah">Kembali</a>
           </div>
           <form method="POST" action="post_spp.php">
                <label for="tahun">Tahun</label>
                <input type="text" id="tahun" name="tahun">
                <label for="nominal">Nominal</label>
                <input type="number" id="nominal" name="nominal">
                <button type="submit" class="btn-tambah">Tambah SPP</button>
           </form>
       </div>
    </div>
<?php require '../../layouts/footer.php'; ?>