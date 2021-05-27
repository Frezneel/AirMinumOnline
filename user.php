<?php
session_start(); // Start session nya
include "db/conn.php"; // Load file koneksi.php
$username = $_POST['username']; // Ambil value username yang dikirim dari form
$password = $_POST['password']; // Ambil value password yang dikirim dari form
$password = md5($password); // Kita enkripsi (encrypt) password tadi dengan md5
// Buat query untuk mengecek apakah ada data user dengan username dan password yang dikirim dari form
$sql = $pdo->prepare("SELECT * FROM daftarakun WHERE username=:a AND password=:b");
$sql->bindParam(':a', $username);
$sql->bindParam(':b', $password);
$sql->execute(); // Eksekusi querynya
$data = $sql->fetch(); // Ambil datanya dari hasil query tadi
echo '<h1 class="text-center text-success" > Anda Sukses Terdaftar </h1>';
// Cek apakah variabel $data ada datanya atau tidak
if( !empty($data)){ // Jika tidak sama dengan empty (kosong)
  $_SESSION['username'] = $data['username']; // Set session untuk username (simpan username di session)
  $_SESSION['nama'] = $data['nama']; // Set session untuk nama (simpan nama di session)
  $_SESSION['id_posisi'] = $data['id_posisi']; // set session untuk posisi (simpan posisi di session)
  
  setcookie("message","delete",time()-1); // Kita delete cookie message
  if($data['id_posisi'] == "2"){
    header("location: index.php"); // Kita redirect ke halaman index.php
  }
  else{
    header("location: admin.php"); // Kita redirect ke halaman admin.php
  }
 
}else{ // Jika $data nya kosong
  // Buat sebuah cookie untuk menampung data pesan kesalahan
  echo '<h1 class="text-center text-success" > Gagal Login</h1>';
  setcookie("message", "Maaf, Username atau Password salah", time()+60);
  
  header("location: login.php"); // Redirect kembali ke halaman login.php
}
?>