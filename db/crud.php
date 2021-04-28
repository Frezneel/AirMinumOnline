<?php 
    class crud{
        // private database object
        private $db;
        
        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }
        
        // function to insert a new record into the daftarakun database
        public function insertDaftarAkun($username, $pass, $namadepan, $namabelakang, $tglh, $email, $nohp, $alamat){
            try {
                // define sql statement to be executed
                $sql = "INSERT INTO daftarakun (username,password,namadepan,namabelakang,tglh,email,nohp,alamat) VALUES (:username, md5(:pass), :namadepan, :namabelakang, :tglh, :email, :nohp, :alamat)";
                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':username',$username);
                $stmt->bindparam(':pass',$pass);
                $stmt->bindparam(':namadepan',$namadepan);
                $stmt->bindparam(':namabelakang',$namabelakang);
                $stmt->bindparam(':tglh',$tglh);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':nohp',$nohp);
                $stmt->bindparam(':alamat',$alamat);

                // execute statement
                $stmt->execute();
                return true;
        
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function editDaftarAkun($username, $pass, $namadepan, $namabelakang, $tglh, $email, $nohp, $alamat){
           try{ 
                $sql = "UPDATE `daftarakun` SET `username`=:username,`password`=md5(:pass),`namadepan`=:namadepan,`namabelakang`=:namabelakang,`tglh`=:tglh,`email`=:email,`nohp`=:nohp,`alamat`=:alamat WHERE akun_id = :id ";
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':username',$username);
                $stmt->bindparam(':pass',$pass);
                $stmt->bindparam(':namadepan',$namadepan);
                $stmt->bindparam(':namabelakang',$namabelakang);
                $stmt->bindparam(':tglh',$tglh);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':nohp',$nohp);
                $stmt->bindparam(':alamat',$alamat);

                // execute statement
                $stmt->execute();
                return true;
           }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
           }
            
        }

        // function to insert a new record into the pesanan database
        public function insertPesanan($namadepan_p, $namabelakang_p, $tgps, $nohp_p, $alamat_p){
            try {
                // define sql statement to be executed
                $sql = "INSERT INTO pesanan (namadepan,namabelakang,tgps,nohp,alamat) VALUES (:namadepan, :namabelakang, :tgps, :nohp, :alamat)";
                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':namadepan',$namadepan_p);
                $stmt->bindparam(':namabelakang',$namabelakang_p);
                $stmt->bindparam(':tgps',$tgps);
                $stmt->bindparam(':nohp',$nohp_p);
                $stmt->bindparam(':alamat',$alamat_p);

                // execute statement
                $stmt->execute();
                return true;
        
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

    }
?>