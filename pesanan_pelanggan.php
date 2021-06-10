<?php
    $title = 'Pesanan Pelanggan'; 

    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 

    // Mengambil Semua Pesanan
    $stmt = $crud->getPesananPelanggan();
    
?>

<div class="container">
    <table class="table" style="background-color: #00BFE5;">
        <tr>
            <th>Username</th>
            <th>Name</th>
            <th>Tanggal Pesan</th>
            <th>Jasa</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Total Tagihan</th>
            <th>Action</th>
        </tr>
        </thead">
        <tbody style="background-color: white ;">
        <?php while($r = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
           <tr>
                <td><?php echo $r['username'] ?></td>
                <td><?php echo $r['namadepan']?> <?php echo $r['namabelakang'] ?></td>
                <td><?php echo $r['tgps'] ?></td>
                <td><?php echo $r['nama_tagihan'] ?></td>
                <td><?php echo $r['nohp'] ?></td>
                <td><?php echo $r['alamat'] ?></td>
                <td><?php echo $r['nama_status'] ?></td>
                <td>Rp. <?php echo $r['total_tagihan'] ?> </td>
                <td>
                    <a href="update.php?id=<?php echo $r['id_pesan'] ?>" class="btn btn-warning">Edit</a>
                    </br>
                    <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $r['id_pesan'] ?>" class="btn btn-danger">Delete</a>
                </td>
                
           </tr> 
        <?php }?>
        </tbody> 
    </table>
</div>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>