<?php
class deskripsi extends CI_Controller{
    // membuat method index 
    public function wiladatika(){
        // akses model kecamatan
        // render data dan kirim data ke view
        $this->load->view('deskripsi/wiladatika');
    }
    public function mekarsari(){
        $this->load->view('deskripsi/mekarsari');
    }
    public function dkandang(){
        $this->load->view('deskripsi/dkandang');
    }
    public function godog(){
        $this->load->view('deskripsi/godog');
    }
    public function kolam(){
        $this->load->view('deskripsi/kolam');
    }
    public function studio(){
        $this->load->view('deskripsi/studio');
    }
}
?>