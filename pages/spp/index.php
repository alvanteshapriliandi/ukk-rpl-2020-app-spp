<?php require '../../layouts/header.php'; ?>
    <div class="container">
       <div class="card">
           <h1>Daftar SPP</h1>
           <div class="text-right m-5 mr-0">
                <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/spp/tambah.php"; ?>" class="btn-tambah">Tambah SPP</a>
           </div>
           <table>
                <tr>
                    <th>Tahun</th>
                    <th class="text-right">Nominal (Rp.)</th>
                    <th></th>
                </tr>
                <?php 
                    include '../../config.php';
                    $STH = $DBH->query('SELECT * from spp order by tahun DESC');
                    $STH->execute();
                    $result = $STH->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($result as $row):
                ?>
                    <tr>
                        <td><?php echo $row['tahun'] ?></td>
                        <td class="text-right"><?php echo number_format($row['nominal']) ?></td>
                        <td class="text-center">
                            <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/spp/edit.php?id_spp=".$row['id_spp']; ?>" class="text-success">Edit</a>
                            <a href="<?php echo "http://$_SERVER[HTTP_HOST]"."/pages/spp/delete.php?id_spp=".$row['id_spp']; ?>" class="text-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                    <!-- foreach ($result as $res) {
                        echo '<pre>' . var_export($res, true) . "</pre>";
                    }
                    $stmt = $DBH->prepare("select * from petugas where id_spp = ?");
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