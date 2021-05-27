<?php
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    if(!isset($_GET['id'])){
        header("Location: pesanan_pelanggan.php");
    }else{
        // Get ID values
        $id = $_GET['id'];

        //Call Delete function
        $result = $crud->deletePesanan($id);
        //Redirect to list
        if($result)
        {
            header("Location: pesanan_pelanggan.php");
        }
        else{
            
        }
    }

?>