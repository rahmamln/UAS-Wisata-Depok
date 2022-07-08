<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tempat_wisata extends CI_Controller{
    // membuat method index
    public function index(){
    // akses model dosen 
    $this->load->model('Tempatwisata_model');
    $Wisata = $this->Tempatwisata_model->getAll();
    $data['tempat_wisata'] = $Wisata;
    // render data dan kirim data ke dalam view
    $this->load->view('layouts/header');
    $this->load->view('Tempat_wisata/index', $data);
    $this->load->view('layouts/footer');
    }
    public function logintempat(){
        $data = [];

        $this->load->view('tempat_wisata/logintempat',$data);

    }
    public function detail($id){
        // akses model 

        $this->load->model('Tempatwisata_model');
        $tempat_wisata = $this->Tempatwisata_model->getById($id);
        $data['tempat_wisata'] = $tempat_wisata;
        $this->load->view('layouts/header');
        $this->load->view('Tempat_wisata/detail', $data);
        $this->load->view('layouts/footer');
    }
    public function form(){
        // render view
        $this->load->view('layouts/header');
        $this->load->view('Tempat_wisata/form');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses ke model 
        $this->load->model('Tempatwisata_model', 'tempat_wisata'); // 1
        $_nama = $this->input->post('nama');
        $_alamat = $this->input->post('alamat');
        $_latlong = $this->input->post('latlong');
        $_jenis_id = $this->input->post('jenis_id');
        $_skor_rating = $this->input->post('skor_rating');
        $_harga_tiket = $this->input->post('harga_tiket');
        $_kecamatan_id = $this->input->post('kecamatan_id');
        $_foto1 = $this->input->post('foto1');
        $_website = $this->input->post('website');
        $_fasilitas = $this->input->post('fasilitas');
        $_idedit =  $this->input->post('idedit');


        $data_wisata['nama'] = $_nama;
        $data_wisata['alamat'] = $_alamat;
        $data_wisata['latlong'] = $_latlong; 
        $data_wisata['jenis_id'] = $_jenis_id;
        $data_wisata['skor_rating'] = $_skor_rating;
        $data_wisata['harga_tiket'] = $_harga_tiket;
        $data_wisata['kecamatan_id'] = $_kecamatan_id;
        $data_wisata['foto1'] = $_foto1;
        $data_wisata['website'] = $_website;
        $data_wisata['fasilitas'] = $_fasilitas;



        if((isset($_idedit))){ //update
            $data_wisata['id'] = $_idedit;
            $this->tempat_wisata->update($data_wisata);
        }else{
            //  data baru
            $this->tempat_wisata->simpan($data_wisata);
        }
        redirect('Tempat_wisata','refresh');
    }
    public function edit($id){
        // akses model 
        $this->load->model('Tempatwisata_model', 'tempat_wisata');
        $obj_Tempat_wisata = $this->tempat_wisata->getById($id);
        $data['obj_Tempat_wisata'] = $obj_Tempat_wisata;
        $this->load->view('layouts/header');
        $this->load->view('Tempat_wisata/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('Tempatwisata_model', 'tempat_wisata');
        // Mengecek data  berdasarkan id
        $data_wisata['id'] = $id;
        $this->tempat_wisata->delete($data_wisata);
        redirect('Tempat_wisata','refresh');
    }
    // public function __construct()
    // {
    //     parent::__construct();
    //     if(!$this->session->userdata('logged_in')){
    //         redirect('/login');
    //     }
    // }
    public function upload(){
        $_idtmp = $this->input->post("idtmp");
        $this->load->model('Tempatwisata_model','tempat_wisata');
        $tempat_wisata = $this->tempat_wisata->getById($_idtmp);
        $data['tempat_wisata'] = $tempat_wisata;
    
        $config [ 'upload_path' ]='./uploads/photos' ; 
        $config [ 'allowed_types' ]='jpeg|jpg|png' ; 
        $config [ 'max_size' ]=2894; 
        $config [ 'max_width' ]=2894; 
        $config [ 'max_height' ]=2894;
        $config [ 'file_name' ]=$tempat_wisata->id;
    
        // menginisialisasi file upload
        $this->load->library('upload',$config);
    
        if (!$this->upload->do_upload('foto')) 
        { 
                $data['error'] = $this->upload->display_errors();
                //$this -> load -> view ('upload_form' ,  $error ); 
        } 
        else 
        {
            $data['upload_data'] = $this->upload->data();
            $data['error']='data sukses';
                //$this -> load -> view ( 'upload_success' ,  $data ); 
        }
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('Tempat_wisata/detail', $data);
            $this->load->view('layouts/footer');
    }

    

    
}
?>