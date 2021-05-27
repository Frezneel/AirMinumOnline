<?php 
    $title = 'Pesan';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    require_once 'includes/auth_check.php';
?>

<h1 class="text-center" style="text-shadow:1px 2px 0 #fff">Selamat datang Admin  </h1>
<h1 class="text-center" style="text-shadow:1px 2px 0 #fff">APLIKASI AIR MINUM ISI ULANG </h1>
<br>
<div class="card-deck">
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="pesan_gambar.png" alt="Gambar List Pemesanan">
        <div class="card-body">
            <a href="pesanan_pelanggan.php" class=" btn btn-primary btn-block">List Pemesanan Pelanggan</a>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>