<?php
class Komentar extends CI_Controller{
    // membuat method index 
    public function index(){
        // akses model kecamatan
        $this->load->model('komentar_model');
        $komentar = $this->komentar_model->getAll();
        $data['komentar'] = $komentar;
        // render data dan kirim data ke view
        $this->load->view('layouts/header');
        $this->load->view('komentar/index', $data);
        $this->load->view('layouts/footer');
    }
    public function tambahkomen(){
        $this->load->view('komentar/formtambah.php');
    }
    public function form(){
        // render view
        $this->load->view('layouts/header');
        $this->load->view('komentar/form');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses ke model kecamatan
        $this->load->model('komentar_model', 'komentar'); //1
        $_tanggal= $this->input->post('tanggal');
        $_isi = $this->input->post('isi');
        $_users_id = $this->input->post('users_id');
        $_wisata_id = $this->input->post('wisata_id');
        $_nilai_rating_id = $this->input->post('nilai_rating_id');

        $data_komentar['tanggal'] = $_tanggal;//2
        $data_komentar['isi'] = $_isi;
        $data_komentar['users_id'] = $_users_id;
        $data_komentar['wisata_id'] = $_wisata_id;
        $data_komentar['nilai_rating_id'] = $_nilai_rating_id;
       
        
        if((!empty($_idedit))){ //update
            $data_komentar['id'] = $_idedit;
            $this->komentar->update($data_komentar);
        }else{
            // data baru
            $this->komentar->simpan($data_komentar);
        }
        redirect('komentar', 'refresh');
    }
    public function delete($id){
        $this->load->model('komentar_model', 'komentar');
        // cek data kecamatan berdasarkan id
        $data_komentar['id'] = $id;
        $this->komentar->delete($data_komentar);
        redirect('komentar', 'refresh');
    }
}
?>