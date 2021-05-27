<?php 
    require_once 'db/conn.php';
    //Get values from post operation
    if(isset($_POST['update'])){
        //extract values from the $_POST array
        $id = $_POST['id'];
        $namadepan = $_POST['namadepan'];
        $namabelakang = $_POST['namabelakang'];
        $tgps = $_POST['tgps'];
        $id_tagihan = $_POST['tagihan'];
        $nohp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        $catatan = $_POST['catatan'];
        $id_status = $_POST['status'];

        //Call Crud function
        $result = $crud->editPesanan($id,$namadepan, $namabelakang,$tgps,$id_tagihan,$nohp,$alamat,$catatan,$id_status);
        // Redirect to index.php
        if($result){
            header("Location: pesanan_pelanggan.php");
        }
        else{
            include 'includes/errormessage.php';
        }
    }
    else{
        include 'includes/errormessage.php';
    }

    

?>