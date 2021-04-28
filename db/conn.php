<?php
<<<<<<< HEAD
    // // Development Connection
    // $host = '127.0.0.1';
    // $db = 'airminumisiulang_db';
    // $user = 'root';
    // $pass = '';
    // $charset = 'utf8mb4';

    // Remote Connection
    $host = 'remotemysql.com';
    $db = 'JvBCMpDL3d';
    $user = 'JvBCMpDL3d';
    $pass = 'znUKAXtKrZ';
    $charset = 'utf8mb4';
=======
    // Development Connection
    //$host = '127.0.0.1';
    //$db = 'airminumisiulang_db';
    //$user = 'root';
    //$pass = '';
    //$charset = 'utf8mb4';
>>>>>>> b9e56e28f4a2ee96f2f91ea5942172454055f802

    // Remote Connection
    $host = 'remotemysql.com';
    $db = 'JvBCMpDL3d';
    $user = 'JvBCMpDL3d';
    $pass = 'znUKAXtKrZ';
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);

?>
