<?php
    $title = 'View Pemesanan'; 

    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 

    // Get all attendees
    $stmt = $crud->getPesanan();
    
?>

<div class="container">
    <p>
        <a class="btn btn-success" href="pesan.php">Buat Pesanan Baru</a>
    </p>

    <table class="table" style="background-color: #00BFE5;">
        <tr>
            <th>Username</th>
            <th>Name</th>
            <th>Tanggal Pesan</th>
            <th>Jasa</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Actions</th>
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
                <td> NULL </td>
                <td> NULL </td>
           </tr> 
        <?php }?>
        </tbody> 
    </table>
</div>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>