<?php require '../../layouts/header.php'; ?>
    <div class="container">
       <div class="card">
           <h1>Daftar siswa</h1>
           <div class="text-right m-5 mr-0">
                <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/siswa/tambah.php"; ?>" class="btn-tambah">Tambah siswa</a>
           </div>
           <table>
                <tr>
                    <th>NISN</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>kelas</th>
                    <th>alamat</th>
                    <th>Telepon</th>
                    <th>SPP</th>
                    <th></th>
                </tr>
                <?php 
                    include '../../config.php';
                    $STH = $DBH->query('
                        SELECT nisn, nisn, nis, nama, nama_kelas, alamat, no_tlp, tahun, nominal from siswa
                        Inner Join kelas on kelas.id_kelas = siswa.id_kelas
                        Inner Join spp on spp.id_spp = siswa.id_spp;
                    ');
                    $STH->execute();
                    $result = $STH->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($result as $row):
                ?>
                    <tr>
                        <td><?php echo $row['nisn'] ?></td>
                        <td><?php echo $row['nis'] ?></td>
                        <td><?php echo $row['nama'] ?></td>
                        <td><?php echo $row['nama_kelas'] ?></td>
                        <td><?php echo $row['alamat'] ?></td>
                        <td><?php echo $row['no_tlp'] ?></td>
                        <td><?php echo $row['tahun'] . ' - Rp. ' . number_format($row['nominal']) . ',-' ?></td>
                        <td class="text-center">
                            <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/siswa/edit.php?nisn=".$row['nisn']; ?>" class="text-success">Edit</a>
                            <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/siswa/delete.php?nisn=".$row['nisn']; ?>" class="text-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                    <!-- foreach ($result as $res) {
                        echo '<pre>' . var_export($res, true) . "</pre>";
                    }
                    $stmt = $DBH->prepare("select * from petugas where id_siswa = ?");
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