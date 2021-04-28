<?php 
    $title = 'Pesan';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    require_once 'includes/auth_check.php';
?>


<h1 class="text-center">Selamat datang pelanggan </h1>
<h1 class="text-center">APLIKASI AIR MINUM ISI ULANG </h1>
<br>
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
        <div class="form-groupform-group">
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
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>