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
        public function insertPesanan($namadepan_p,$namabelakang_p,$tgps,$tagihan,$nohp_p,$alamat_p,$jumlah,$total_tagihan){
            try {
                // define sql statement to be executed
                $sql = "INSERT INTO pesanan (username,namadepan,namabelakang,tgps,id_tagihan,nohp,alamat,jumlah,total_tagihan) VALUES (:username, :namadepan, :namabelakang, :tgps, :tagihan, :nohp, :alamat, :jumlah, :total_tagihan)";
                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':username',$_SESSION['username']);
                $stmt->bindparam(':namadepan',$namadepan_p);
                $stmt->bindparam(':namabelakang',$namabelakang_p);
                $stmt->bindparam(':tgps',$tgps);
                $stmt->bindparam(':tagihan',$tagihan);
                $stmt->bindparam(':nohp',$nohp_p);
                $stmt->bindparam(':alamat',$alamat_p);
                $stmt->bindparam(':jumlah',$jumlah);
                $stmt->bindparam(':total_tagihan',$total_tagihan);

                // execute statement
                $stmt->execute();
                return true;
        
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getPesanan(){
            try{
                $sql = "SELECT pesanan.id_pesan, pesanan.username, pesanan.namadepan, pesanan.namabelakang, pesanan.tgps, 
                pesanan.nohp, pesanan.alamat, pesanan.total_tagihan, tagihan.nama_tagihan, tagihan.harga_tagihan, status.nama_status FROM pesanan 
                JOIN tagihan ON pesanan.id_tagihan = tagihan.id_tagihan JOIN status ON pesanan.id_status = status.id_status 
                WHERE username like :username order by tgps DESC ";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':username',$_SESSION['username']);
                $stmt->execute();
                return $stmt;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
           
        }

        public function getPesananID($id){
            try{
                $sql = "SELECT pesanan.id_pesan, pesanan.username, pesanan.namadepan, pesanan.namabelakang, pesanan.tgps, 
                pesanan.nohp, pesanan.alamat, pesanan.catatan, tagihan.id_tagihan, tagihan.nama_tagihan, tagihan.harga_tagihan, status.id_status, status.nama_status FROM pesanan 
                JOIN tagihan ON pesanan.id_tagihan = tagihan.id_tagihan JOIN status ON pesanan.id_status = status.id_status 
                WHERE id_pesan like :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
           
        }

        public function getPesananPelanggan(){
            try{
                $sql = "SELECT pesanan.id_pesan, pesanan.username, pesanan.namadepan, pesanan.namabelakang, pesanan.tgps, 
                pesanan.nohp, pesanan.alamat, pesanan.total_tagihan, tagihan.nama_tagihan, tagihan.harga_tagihan, status.nama_status FROM pesanan 
                JOIN tagihan ON pesanan.id_tagihan = tagihan.id_tagihan JOIN status ON pesanan.id_status = status.id_status 
                order by tgps DESC ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
           
        }

        public function editPesanan($id,$namadepan, $namabelakang,$tgps,$id_tagihan,$nohp,$alamat,$catatan,$id_status){
            try{ 
                 $sql = "UPDATE `pesanan` SET `namadepan`=:namadepan,`namabelakang`=:namabelakang,`tgps`=:tgps,`id_tagihan`=:tagihan,`nohp`=:nohp,`alamat`=:alamat, `catatan`=:catatan, `id_status`=:id_status WHERE id_pesan = :id_pesan ";
                 $stmt = $this->db->prepare($sql);
                 // bind all placeholders to the actual values
                 $stmt->bindparam(':id_pesan',$id);
                 $stmt->bindparam(':namadepan',$namadepan);
                 $stmt->bindparam(':namabelakang',$namabelakang);
                 $stmt->bindparam(':tgps',$tgps);
                 $stmt->bindparam(':tagihan',$id_tagihan);
                 $stmt->bindparam(':nohp',$nohp);
                 $stmt->bindparam(':alamat',$alamat);
                 $stmt->bindparam(':catatan',$catatan);
                 $stmt->bindparam(':id_status',$id_status);

                 // execute statement
                 $stmt->execute();
                 return true;
            }catch (PDOException $e) {
             echo $e->getMessage();
             return false;
            }
             
         }


         public function deletePesanan($id){
            try{
                 $sql = "delete from pesanan where id_pesan = :id";
                 $stmt = $this->db->prepare($sql);
                 $stmt->bindparam(':id', $id);
                 $stmt->execute();
                 return true;
             }catch (PDOException $e) {
                 echo $e->getMessage();
                 return false;
             }
         }

        public function getTagihan(){
            try{
                $sql = "SELECT * FROM `tagihan`";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }

        public function getNamaTagihan($id_tagihan){
            try{
                $sql = "SELECT * FROM `tagihan` where id_tagihan = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id_tagihan);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }

        public function getStatus(){
            try{
                $sql = "SELECT * FROM `status`";
                $status = $this->db->query($sql);
                return $status;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }

    }
?>