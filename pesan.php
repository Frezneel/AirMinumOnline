<?php 
    $title = 'Pesan';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    require_once 'includes/auth_check.php';

    $results = $crud->getTagihan();
?>
<div class="card-header" style="background-color: #00BFE5">
    <h3 class="text-center">
    Form Pemesanan <b><?php echo $_SESSION['username'] ?></b>
    </h3>
</div>
<div class="card-body" style="color: black; background-color: white">
    <form method="post" action="pemesanan_berhasil.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="namadepan">Nama Depan</label>
            <input required type="text" class="form-control" id="namadepan" name="namadepan">
        </div>
        <br>
        <div class="form-group">
            <label for="namabelakang">Nama Belakang</label>
            <input required type="text" class="form-control" id="namabelakang" name="namabelakang">
        </div>
        <br>
        <div class="form-group">
            <label for="tgps">Tanggal Pemesanan</label>
            <input type="text" class="form-control" id="tgps" name="tgps">
        </div>
        <br>
        <div class="form-group">
            <label for="tagihan">Pilih Jasa</label>
            <select class="form-control" id="tagihan" name="tagihan">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                   <option value="<?php echo $r['id_tagihan'] ?>"><?php echo $r['nama_tagihan']; ?></option>
                <?php }?>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="nohp">Nomor HP yang bisa dihubungi</label>
            <input type="text" class="form-control" id="nohp"  name="nohp">
        </div>
        <br/>
        <div class="form-group">
            <label for="alamat">Alamat Lengkap (Tujuan)</label>
            <input required type="text" class="form-control" id="alamat" name="alamat">
            <small id="alamat" class="form-text text-muted">*Harap masukkan alamat tujuan pengantaran selengkap-lengkapnya.</small>
        </div>
        <div class="form-group">
            <label for="catatan">Catatan tambahan</label>
            <input type="text" class="form-control" id="catatan" name="catatan">
            <small id="catatan" class="form-text text-muted">*Beri catatan untuk pengantar (opsional).</small>
        </div>
        <button type="submit" name="pesan" class="btn btn-primary btn-block">Pesan</button>
    </form>
</div>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
