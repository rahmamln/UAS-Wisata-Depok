<?php
class Tempatwisata_model extends CI_Model{
    
    public function getAll(){
        // menampilkan seluruh data yang ada ditable wisata menggunakan query builder
        $query = $this->db->get('tempat_wisata');
        return $query->result();
    }
    public function getById($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('tempat_wisata', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO tempat_wisata (nama,alamat,latlong,jenis_id,skor_rating,harga_tiket,kecamatan_id,foto1,website,fasilitas) VALUES (?,?,?,?,?,?,?,?,?,?) ";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);    
    }
    public function update($data){
        $sql = "UPDATE tempat_wisata SET nama=?,alamat=?,latlong=?,jenis_id=?,skor_rating=?,harga_tiket=?,kecamatan_id=?,foto1=?,website=?,fasilitas=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function upload_foto($array){
        $sql = "UPDATE tempat_wisata SET foto1=? WHERE id=?";
        $this->db->query($sql,$array);
    }
    public function delete($data){
        // hapus table tempat_wisata
        $sql = "DELETE FROM tempat_wisata WHERE id=?";
        $this->db->query($sql,$data);
    }
}
?>