<?php 
    $title = 'Daftar_Berhasil';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST['daftar'])){
        //extract values from the $_POST array
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $namadepan = $_POST['namadepan'];
        $namabelakang = $_POST['namabelakang'];
        $tglh = $_POST['tglh'];
        $email = $_POST['email'];
        $nohp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        //call function to insert and track if success or not
        $isDaftarBerhasil = $crud->insertdaftarakun($username,$pass,$namadepan,$namabelakang,$tglh,$email,$nohp,$alamat);

        if($isDaftarBerhasil){
            echo '<h1 class="text-center text-success" > Anda Sukses Terdaftar </h1>';
        }
        else{
            echo '<h1 class="text-center text-danger" > Terdapat error ketika proses pendaftaran </h1>';
        }
    }
?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['username']?> 
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $_POST['namadepan'].' '. $_POST['namabelakang']?> 
            </h6>
            <p class="card-text">
            <?php echo $_POST['tglh']?>
            </p>
            <p class="card-text">
            <?php echo $_POST['email']?>
            </p>
            <p class="card-text">
            <?php echo $_POST['nohp'] ?>
            </p>
            <p class="card-text">
            <?php echo $_POST['alamat'] ?>
            </p>
        </div>
    </div>


<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>