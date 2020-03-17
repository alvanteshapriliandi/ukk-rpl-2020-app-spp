<?php require '../../layouts/header.php'; ?>
    <div class="container">
       <div class="card">
           <h1>Daftar kelas</h1>
           <div class="text-right m-5 mr-0">
                <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/kelas/tambah.php"; ?>" class="btn-tambah">Tambah kelas</a>
           </div>
           <table>
                <tr>
                    <th>Nama</th>
                    <th>Keahlian</th>
                    <th></th>
                </tr>
                <?php 
                    include '../../config.php';
                    $STH = $DBH->query('SELECT * from kelas');
                    $STH->execute();
                    $result = $STH->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($result as $row):
                ?>
                    <tr>
                        <td><?php echo $row['nama_kelas'] ?></td>
                        <td><?php echo $row['kompetensi_keahlian'] ?></td>
                        <td class="text-center">
                            <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/kelas/edit.php?id_kelas=".$row['id_kelas']; ?>" class="text-success">Edit</a>
                            <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/kelas/delete.php?id_kelas=".$row['id_kelas']; ?>" class="text-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                    <!-- foreach ($result as $res) {
                        echo '<pre>' . var_export($res, true) . "</pre>";
                    }
                    $stmt = $DBH->prepare("select * from petugas where id_kelas = ?");
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