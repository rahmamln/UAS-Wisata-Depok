<?php
class Kecamatan extends CI_Controller{
    // membuat method index 
    public function index(){
        // akses model kecamatan
        $this->load->model('kecamatan_model');
        $kecamatan = $this->kecamatan_model->getAll();
        $data['kecamatan'] = $kecamatan;
        // render data dan kirim data ke view
        $this->load->view('layouts/header');
        $this->load->view('kecamatan/index', $data);
        $this->load->view('layouts/footer');
    }
    public function form(){
        // render view
        $this->load->view('layouts/header');
        $this->load->view('kecamatan/form');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses ke model kecamatan
        $this->load->model('kecamatan_model', 'kecamatan'); //1
        $_nama = $this->input->post('nama');

        $data_kecamatan['nama'] = $_nama;//2
        
        if((!empty($_idedit))){ //update
            $data_kecamatan['id'] = $_idedit;
            $this->kecamatan->update($data_kecamatan);
        }else{
            // data baru
            $this->kecamatan->simpan($data_kecamatan);
        }
        redirect('kecamatan', 'refresh');
    }
    public function delete($id){
        $this->load->model('kecamatan_model', 'kecamatan');
        // cek data kecamatan berdasarkan id
        $data_kecamatan['id'] = $id;
        $this->kecamatan->delete($data_kecamatan);
        redirect('kecamatan', 'refresh');
    }
}
?>