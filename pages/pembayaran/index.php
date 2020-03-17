<?php require '../../layouts/header.php'; ?>
    <div class="container">
       <div class="card">
           <h1>Daftar pembayaran</h1>
           <div class="text-right m-5 mr-0">
                <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/pembayaran/tambah.php"; ?>" class="btn-tambah">Tambah pembayaran</a>
           </div>
           <table>
                <tr>
                    <th>Tgl. Bayar</th>
                    <th>NISN</th>
                    <th>Siswa</th>
                    <th>Kelas</th>
                    <th>SPP</th>
                    <th>Jumlah</th>
                    <th>Dibuat Oleh</th>
                    <th></th>
                </tr>
                <?php 
                    include '../../config.php';
                    $STH = $DBH->query('
                        SELECT *, nama_petugas from pembayaran
                        left join petugas on petugas.id_petugas = pembayaran.id_petugas;
                    ');
                    $STH->execute();
                    $result = $STH->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($result as $row):
                ?>
                    <tr>
                        <td><?php echo $row['tgl_bayar'] . '-' . $row['bulan_dibayar'] . '-' . $row['tahun_dibayar'] ?></td>
                        <td><?php echo $row['nama_petugas'] ?></td>
                        <td><?php echo $row['nama'] ?></td>
                        <td><?php echo $row['nama_kelas'] ?></td>
                        <td><?php echo $row['alamat'] ?></td>
                        <td><?php echo $row['no_tlp'] ?></td>
                        <td><?php echo $row['tahun'] . ' - Rp. ' . number_format($row['nominal']) . ',-' ?></td>
                        <td class="text-center">
                            <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/pembayaran/edit.php?nisn=".$row['nisn']; ?>" class="text-success">Edit</a>
                            <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/pembayaran/delete.php?nisn=".$row['nisn']; ?>" class="text-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                    <!-- foreach ($result as $res) {
                        echo '<pre>' . var_export($res, true) . "</pre>";
                    }
                    $stmt = $DBH->prepare("select * from petugas where id_pembayaran = ?");
                    $stmt->execute([1]);
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    echo '<pre>' . var_export($row, true) . '</pre>';
                    $STH->setFetchMode(PDO::FETCH_ASSOC);
                    while($row = $STH->fetch()){
                    ?> -->
            </table>
       </div>
    </div>
<?php require '../../layouts/footer.php'; ?>