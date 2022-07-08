<?php
class Jeniswisata_model extends CI_Model{
    // Buat property atau variable
    public $id, $nama ;
    
    public function getAll(){
        // menampilkan seluruh data yang ada ditable wisata menggunakan query builder
        $query = $this->db->get('jeniswisata');
        return $query->result();
    }
    public function getById($id){
        // menampilkan data berdasarkan id

        $query = $this->db->get_where('jeniswisata', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO Jeniswisata (nama) VALUES (?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);    
    }
    public function update($data){
        $sql = "UPDATE Jeniswisata SET nama=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus table Jenis_wisata
        $sql = "DELETE FROM Jeniswisata WHERE id=?";
        $this->db->query($sql,$data);
    }
}
?>