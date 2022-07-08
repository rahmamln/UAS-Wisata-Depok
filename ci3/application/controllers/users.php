<?php
class Users extends CI_Controller{
    // membuat method index 
    public function index(){
        // akses model users
        $this->load->model('users_model');
        $users = $this->users_model->getAll();
        $data['users'] = $users;
        // render data dan kirim data ke view
        $this->load->view('layouts/header');
        $this->load->view('users/index', $data);
        $this->load->view('layouts/footer');
    }
    public function form(){
        // render view
        $this->load->view('layouts/header');
        $this->load->view('users/form');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses ke model users
        $this->load->model('users_model', 'users'); //1
        $_usersname = $this->input->post('usersname');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_created_at = $this->input->post('created_at');
        $_last_login = $this->input->post('last_login');
        $_status = $this->input->post('status');
        $_role = $this->input->post('role');

        $data_users['usersname'] = $_usersname;//2
        $data_users['password'] = $_password;
        $data_users['email'] = $_email;
        $data_users['created_at'] = $_created_at;
        $data_users['last_login'] = $_last_login;
        $data_users['status'] = $_status;
        $data_users['role'] = $_role;
        
        if((!empty($_idedit))){ //update
            $data_users['id'] = $_idedit;
            $this->users->update($data_users);
        }else{
            // data baru
            $this->users->simpan($data_users);
        }
        redirect('users', 'refresh');
    }
    public function delete($id){
        $this->load->model('users_model', 'users');
        // cek data users berdasarkan id
        $data_users['id'] = $id;
        $this->users->delete($data_users);
        redirect('users', 'refresh');
    }
}
?>