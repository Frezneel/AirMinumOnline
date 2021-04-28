<?php 
    $title = 'Daftar';
    require_once 'includes/header.php'; ?>
<h1 class="w3-text-dark text-center" style="text-shadow:2px 2px 0 #FFF">
    <b>APLIKASI AIR MINUM ISI ULANG</b></h1>
<h1 class="w3-text-dark text-center" style="text-shadow:2px 2px 0 #FFF">
    <b>FORM PENDAFTARAN AKUN</b></h1>    
<br>
    <form method="post" action="daftar_berhasil.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="username">Username</label>
            <input required type="text" class="form-control" id="username" name="username">
        </div>
        <br>
        <div class="form-group">
            <label for="password">Password</label>
            <input required type="password" class="form-control" id="password" name="password">
        </div>
        <br>
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
            <label for="tglh">Tanggal Lahir</label>
            <input type="text" class="form-control" id="tglh" name="tglh">
        </div>
        <br>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <br>
        <div class="form-groupform-group">
            <label for="nohp">Nomor HP</label>
            <input type="text" class="form-control" id="nohp"  name="nohp">
        </div>
        <br/>
        <div class="form-group">
            <label for="alamat">Alamat Lengkap</label>
            <input required type="text" class="form-control" id="alamat" name="alamat">
            <small id="alamat" class="form-text text-muted">Harap masukkan alamat tujuan pengantaran selengkap-lengkapnya.</small>
        </div>
        
        <button type="submit" name="daftar" class="btn btn-primary btn-block">Daftar</button>
    </form>
    <br>
    <h3 class="w3-text-white text-center" style="text-shadow:2px 2px 0 #444">
    <b>Sudah punya akun?</b></h3>
    <br>
    <a href="Index.php" class="Index">
        <button type="button" name="Index" class="btn button btn-primary btn-block"> Login</button>  
    </a> 
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>