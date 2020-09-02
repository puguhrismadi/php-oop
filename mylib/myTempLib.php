
public function add_data($no_ktp,$nama_lengkap,$alamat_lengkap,$no_hp)
    {
        $data = $this->db->prepare('INSERT INTO data_warga (no_ktp,nama_lengkap,alamat_lengkap,no_hp) VALUES (?, ?, ?, ?)');
        
        $data->bindParam(1, $no_ktp);
        $data->bindParam(2, $nama_lengkap);
        $data->bindParam(3, $alamat_lengkap);
        $data->bindParam(4, $no_hp);
 
        $data->execute();
        return $data->rowCount();
    }
    
 
    public function get_by_id($id_warga){
        $query = $this->db->prepare("SELECT * FROM data_warga where id_warga=?");
        $query->bindParam(1, $id_warga);
        $query->execute();
        return $query->fetch();
    }
 
    public function update($id_warga,$no_ktp,$nama_lengkap,$alamat_lengkap,$no_Hp){
        $query = $this->db->prepare('UPDATE data_warga set no_ktp=?,nama_lengkap=?,alamat_lengkap=?,no_hp=? where id=?');
        
        $query->bindParam(1, $no_ktp);
        $query->bindParam(2, $nama_lengkap);
        $query->bindParam(3, $alamat_lengkap);
        $query->bindParam(4, $no_Hp);
 
        $query->execute();
        return $query->rowCount();
    }
 
    public function delete($id_warga)
    {
        $query = $this->db->prepare("DELETE FROM data_warga where id=?");
 
        $query->bindParam(1, $id_warga);
 
        $query->execute();
        return $query->rowCount();
    }
  