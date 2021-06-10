<?php 
    $title = 'Tampil_Pesan';
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
        $NamaTagihan = $crud->getNamaTagihan($tagihan);
        $harga = $NamaTagihan['harga_tagihan'];
        $total = $_POST['jumlah'] * $harga;
    }
?>
<div class="container">
        <div class="row justify-content-center ">
            <div class="col-xl-9 col-lg-9 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-12">
                                <div class="p-3">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Hasil Form</h1>
                                        <div style="color: red;margin-bottom: 15px;">
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <form method="post" action="pemesanan_berhasil.php">
                                            <div class="card">
                                            <div class="card-body">
                                                <p class="card-text">
                                                Username : <?php echo $_SESSION['username'] ?>
                                                <input type="hidden" name="username" value="<?php echo $_SESSION['username']?>"/>
                                                </p>
                                                <p class="card-text">
                                                Nama : <?php echo $_POST['namadepan'].' '. $_POST['namabelakang']?> 
                                                <input type="hidden" name="namadepan" value="<?php echo $namadepan_p ?>"/>
                                                <input type="hidden" name="namabelakang" value="<?php echo $namabelakang_p ?>"/>
                                               </p>
                                                <p class="card-text" id="tgps" name="tgps">
                                                Tanggal Pesan : <?php echo $_POST['tgps']?>
                                                <input type="hidden" name="tgps" value="<?php echo $tgps ?>"/>
                                                </p>
                                                <p class="card-text">
                                                Jenis Tagihan : <?php echo $NamaTagihan['nama_tagihan'];?>
                                                <input type="hidden" name="tagihan" value="<?php echo $tagihan ?>"/>
                                                </p>
                                                <p class="card-text">                                        
                                                Harga satuan Tagihan : Rp.<?php echo $NamaTagihan['harga_tagihan'];?>
                                                <input type="hidden" name="harga_tagihan" value="<?php echo $harga ?>"/>
                                                </p>
                                                <p class="card-text">
                                                Jumlah Barang : <?php echo $_POST['jumlah'];?>
                                                <input type="hidden" name="jumlah" value="<?php echo $jumlah ?>"/>
                                                </p>
                                                <p class="card-text">
                                                No HP : <?php echo $_POST['nohp'] ?>
                                                <input type="hidden" name="nohp" value="<?php echo $nohp_p ?>"/>
                                                </p>
                                                <p class="card-text">
                                                Alamat : <?php echo $_POST['alamat'] ?>
                                                <input type="hidden" name="alamat" value="<?php echo $alamat_p ?>"/>
                                                </p>
                                                <p class="card-text">
                                                Total Tagihan : Rp.<?php echo $_POST['jumlah'] * $NamaTagihan['harga_tagihan'] ?>
                                                <input type="hidden" name="total_tagihan" value="<?php echo $total ?>"/>
                                                </p>
                                            </div>
                                        </div>
                                        <br>
                                        <button type="submit" name="pesan" class="btn btn-success btn-block">Pesan</button>
                                        <br>
                                        <p>
                                            <a href="pesan.php" class="btn btn-warning btn-block">Kembali ke Pesan</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>