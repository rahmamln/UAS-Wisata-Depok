<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jeniswisata extends CI_Controller{
    // membuat method index
    public function index(){
    // akses model dosen 
    $this->load->model('Jeniswisata_model');
    $Wisata = $this->Jeniswisata_model->getAll();
    $data['jeniswisata'] = $Wisata;
    // render data dan kirim data ke dalam view
    $this->load->view('layouts/header');
    $this->load->view('Jeniswisata/index', $data);
    $this->load->view('layouts/footer');
    }
    public function detail($id){
        // akses model 

        $this->load->model('Jeniswisata_model');
        $wisata = $this->Jeniswisata_model->getById($id);
        $data['jeniswisata'] = $wisata;
        $this->load->view('layouts/header');
        $this->load->view('Jeniswisata/detail', $data);
        $this->load->view('layouts/footer');
    }
    public function form(){
        // render view
        $this->load->view('layouts/header');
        $this->load->view('Jeniswisata/form');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses ke model 
        $this->load->model('Jeniswisata_model', 'Jeniswisata'); // 1
        $_nama = $this->input->post('nama');
        $_idedit =  $this->input->post('idedit');

        $data_Jeniswisata['nama'] = $_nama; // 2

        if((isset($_idedit))){ //update
            $data_Jeniswisata['id'] = $_idedit;
            $this->Jeniswisata->update($data_Jeniswisata);
        }else{
            //  data baru
            $this->Jeniswisata->simpan($data_Jeniswisata);
        }
        redirect('Jenis_wisata','refresh');
    }
    public function edit($id){
        // akses model dosen
        $this->load->model('Jeniswisata_model', 'Jeniswisata');
        $obj_Jeniswisata = $this->Jeniswisata->getById($id);
        $data['obj_Jeniswisata'] = $obj_Jeniswisata;
        $this->load->view('layouts/header');
        $this->load->view('Jeniswisata/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('Jeniswisata_model', 'Jeniswisata');
        // Mengecek data dosen berdasarkan id
        $data_Jeniswisata['id'] = $id;
        $this->Jeniswisata->delete($data_Jeniswisata);
        redirect('Jeniswisata','refresh');
    }
    // public function __construct()
    // {
    //     parent::__construct();
    //     if(!$this->session->userdata('logged_in')){
    //         redirect('/login');
    //     }
    // }

    // public function upload(){
    //     $dosen=$this->input->post('dosen');
    //     $this->load->model('dosen_model','dosen');
    //     $dosen = $this->dosen->getById($dosen);
    //     $data['dosen']=$dosen;

    //     $config['upload_path']='./uploads/photos';
    //     $config['allowed_types']='jpg|png';
    //     $config['max_size']=2894;
    //     $config['max_width']=2894;
    //     $config['max_height']=2894;
    //     $config['file_name']=$dosen->id;

    //     $this->load->library('upload',$config);

    //     if (!$this->upload->do_upload('foto')) {
    //         $data['error'] = $this->upload->display_errors();
    //     } else {
    //         $data['error'] = 'data sukses';
    //         $data['upload_data'] = $this->upload->data();
    //     }

    //     $this->load->view('layouts/header');
    //     $this->load->view('dosen/detail', $data);
    //     $this->load->view('layouts/footer');
    // } 
    
}
?>