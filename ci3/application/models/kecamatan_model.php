<?php
class Kecamatan_model extends CI_Model{
    // property atau variabel kecamatan
    public $nama;

    public function getAll(){
        // menampilkan seluruh data yang ada di table kecamatan menggunakan query builder
        $query = $this->db->get('kecamatan');
        return $query->result();
    }
    public function getById($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('kecamatan', ['id'=>$id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO kecamatan(nama) VALUE(?)";

        $this->db->query($sql, $data);

        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function delete($data){
        // hapus data mahasiswa
        $sql = "DELETE FROM kecamatan WHERE id=?";
        $this->db->query($sql, $data);
    }
}
?>