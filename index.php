<?php 
    $title = 'Pesan';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    require_once 'includes/auth_check.php';
?>


<h1 class="text-center" style="text-shadow:1px 2px 0 #fff">Selamat datang pelanggan  </h1>
<h1 class="text-center" style="text-shadow:1px 2px 0 #fff">APLIKASI AIR MINUM ISI ULANG </h1>
<br>
<div class="card-deck">
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="pesan_gambar.png" alt="Gambar Pesan">
        <div class="card-body">
            <a href="pesan.php" class="btn btn-primary btn-block">Menu Form Pemesanan</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="pesan_gambar.png" alt="Gambar List Pemesanan">
        <div class="card-body">
            <a href="listpemesanan.php" class=" btn btn-primary btn-block">Menu List Pemesanan</a>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>