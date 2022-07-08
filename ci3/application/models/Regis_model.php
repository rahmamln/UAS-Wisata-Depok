<?php
class Regis_model extends CI_Model{
    // Buat property atau variable
    // public $id, $nama ;
    
    public function getAll(){
        // menampilkan seluruh data yang ada ditable wisata menggunakan query builder
        $query = $this->db->get('users');
        return $query->result();
    }
    public function findById($id){
      // menampilkan data berdasarkan id
      $query = $this->db->get_where('users', ['id' => $id]);
      return $query;
  }
    public function getById($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('users', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO users (username,password,email,role) VALUES (?,?,?,?)";
        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);    
    }
    public function update($data){
        $sql = "UPDATE users SET username=?,password=?,email=?,role=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus table Jenis_wisata
        $sql = "DELETE FROM users WHERE id=?";
        $this->db->query($sql,$data);
    }
}
?>