<?php 
    $title = 'index';
    require_once 'includes/header.php';
    // Kita cek apakah user sudah login atau belum
    // Cek nya dengan cara cek apakah terdapat session username atau tidak
    if(isset($_SESSION['username'])){ // Jika session username ada berarti dia sudah login
    header("location: index.php"); // Kita Redirect ke halaman index.php
    }
    

?>
<style>
.button {
  background-color: #41bb00; /* Hijau */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}

</style>

<div class="container">
    <h1 class="h2 text-center">Selamat datang pelanggan </h1>
    <h1 class="h2 text-center">APLIKASI AIR MINUM ISI ULANG </h1>
    
    <div class="w3-round-large text-black">
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
                                        <h1 class="h4 text-gray-900 mb-4">LOGIN</h1>
                                        <div style="color: red;margin-bottom: 15px;">
                                        <?php
                                        // Cek apakah terdapat cookie dengan nama message
                                        if(isset($_COOKIE["message"])){ // Jika ada
                                            echo $_COOKIE["message"]; // Tampilkan pesannya
                                        }
                                        ?>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <form method="post" action="user.php">
                                            <tr>
                                                <td><label for="username">Username: * </label></td>
                                                <td><input type="text" name="username" class="form-control" placeholder="username">
                                                </td>
                                            </tr>
                                                <tr>
                                                <td><label for="password">Password: * </label></td>
                                                <td><input type="password" name="password" class="form-control" placeholder="password">
                                                </td>
                                            </tr> 
                                            <br>
                                            <input type="submit" value="Login" class="btn btn-primary btn-block"><br/>
                                        </form>
                                        <br>
                                        <small id="Daftar" class="form-text text-muted text-center">Belum punya akun?</small>
                                        <br>
                                        <a href="daftar.php" class="Daftar">
                                            <button type="Daftar" name="Daftar" class="btn button btn-block"> Daftar</button>  
                                        </a>    
                                    </div>
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
