<?php
class Users_model extends CI_Model{
    // property atau variabel users
    public $nama;

    public function getAll(){
        // menampilkan seluruh data yang ada di table users menggunakan query builder
        $query = $this->db->get('users');
        return $query->result();
    }
    public function getById($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('users', ['id'=>$id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO users(username, password, email, created_at, last_login, status, role) VALUE(?, ?, ?, ?, ?, ?, ?)";

        $this->db->query($sql, $data);

        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function delete($data){
        // hapus data mahasiswa
        $sql = "DELETE FROM users WHERE id=?";
        $this->db->query($sql, $data);
    }
}
?>