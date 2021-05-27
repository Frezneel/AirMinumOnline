<?php
    $title = 'Update Record'; 

    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 

    $results = $crud->getTagihan();
    $status = $crud->getStatus();

    if(!isset($_GET['id']))
    {
        //echo 'error';
        echo 'Error';
        header("Location: pesanan_pelanggan.php");
    }
    else{
        $id = $_GET['id'];
        $pesanan = $crud->getPesananID($id);
    
    
?>

    <h1 class="text-center">Edit Record </h1>

    <div class="card-body" style="color: black; background-color: white">
    <form method="post" action="pesanan_updated.php">
       <input type="hidden" name="id" value="<?php echo $pesanan['id_pesan'] ?>"/>
        <div class="form-group">
            <label for="namadepan">Nama Depan</label>
            <input type="text" class="form-control" value="<?php echo $pesanan['namadepan'] ?>" id="namadepan" name="namadepan">
        </div>
        <br>
        <div class="form-group">
            <label for="namabelakang">Nama Belakang</label>
            <input type="text" class="form-control" value="<?php echo $pesanan['namabelakang'] ?>" id="namabelakang" name="namabelakang">
        </div>
        <br>
        <div class="form-group">
            <label for="tgps">Tanggal Pemesanan</label>
            <input type="text" class="form-control" value="<?php echo $pesanan['tgps'] ?>" id="tgps" name="tgps">
        </div>
        <br>
        <div class="form-group">
            <label for="tagihan">Pilih Jasa</label>
            <select class="form-control" id="tagihan" name="tagihan">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                   <option value="<?php echo $r['id_tagihan'] ?>"<?php if($r['id_tagihan'] == $pesanan['id_tagihan']) echo 'selected' ?>>
                        <?php echo $r['nama_tagihan']; ?>
                    </option>
                <?php }?>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="nohp">Nomor HP yang bisa dihubungi</label>
            <input type="text" class="form-control" value="<?php echo $pesanan['nohp'] ?>" id="nohp"  name="nohp">
        </div>
        <br/>
        <div class="form-group">
            <label for="alamat">Alamat Lengkap (Tujuan)</label>
            <input required type="text" value="<?php echo $pesanan['alamat'] ?>" class="form-control" id="alamat" name="alamat">
            <small id="alamat" class="form-text text-muted">*Harap masukkan alamat tujuan pengantaran selengkap-lengkapnya.</small>
        </div>
        <div class="form-group">
            <label for="catatan">Catatan tambahan</label>
            <input type="text" class="form-control" value="<?php echo $pesanan['catatan'] ?>" id="catatan" name="catatan">
            <small id="catatan" class="form-text text-muted">*Beri catatan untuk pengantar (opsional).</small>
        </div>
        <br>
        <div class="form-group">
            <label for="status">Pilih Status Pengiriman</label>
            <select class="form-control" id="status" name="status">
                <?php while($s = $status->fetch(PDO::FETCH_ASSOC)) {?>
                   <option value="<?php echo $s['id_status'] ?>"<?php if($s['id_status'] == $pesanan['id_status']) echo 'selected' ?>>
                        <?php echo $s['nama_status']; ?>
                    </option>
                <?php }?>
            </select>
        </div>
        <br>
        <button type="submit" name="update" class="btn btn-danger btn-block">Update</button>
        <a href="pesanan_pelanggan.php" class="btn btn-warning btn-block">Kembali ke List</a>
        </form>
        
    </div>
<?php } ?>


<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>