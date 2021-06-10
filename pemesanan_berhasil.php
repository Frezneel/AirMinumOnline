<?php 
    $title = 'Pemesanan_Berhasil';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST['pesan'])){
        //extract values from the $_POST array
        $namadepan_p = $_POST['namadepan'];
        $namabelakang_p = $_POST['namabelakang'];
        $tgps = $_POST['tgps'];
        $tagihan = $_POST['tagihan'];
        $nohp_p = $_POST['nohp'];
        $alamat_p = $_POST['alamat'];
        $jumlah = $_POST['jumlah'];
        $total_tagihan = $_POST['total_tagihan'];
        //call function to insert and track if success or not
        $isPemesananBerhasil = $crud->insertPesanan($namadepan_p,$namabelakang_p,$tgps,$tagihan,$nohp_p,$alamat_p,$jumlah,$total_tagihan);
        $NamaTagihan = $crud->getNamaTagihan($tagihan);
        if($isPemesananBerhasil){
            echo '<h2 class="text-center text-success" > Anda Sukses Membuat Pesanan </h2>';
            echo '<h2 class="text-center text-success" > Terimakasih sudah Order</h2>';
        }
        else{
            echo '<h1 class="text-center text-danger" > Terdapat error ketika proses pemesanan </h1>';
        }
    }
?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_SESSION['username'] ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $_POST['namadepan'].' '. $_POST['namabelakang']?> 
            </h6>
            <p class="card-text">
            Tanggal Pesan : <?php echo $_POST['tgps']?>
            </p>
            <p class="card-text">
            <?php echo $NamaTagihan['nama_tagihan'];?>
            </p>
            <p class="card-text">
            No HP : <?php echo $_POST['nohp'] ?>
            </p>
            <p class="card-text">
            <?php echo $_POST['alamat'] ?>
            </p>
            <p class="card-text" >
            Total Tagihan : <?php echo $_POST['jumlah'] * $NamaTagihan['harga_tagihan'] ?>
            </p>
        </div>
    </div>
    <br>
    <p>
        <a class="btn btn-success" href="listpemesanan.php">Cek Status Pemesananmu</a>
    </p>

<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>