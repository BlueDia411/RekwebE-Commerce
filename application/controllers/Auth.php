<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_model');
    }

    public function index($nama = '')
    {
        $data['judul'] = 'Login';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/footer');
    }

    public function registrasi(){

        $this->form_validation->set_rules('name', 'Name', 'required|trim'); // 'nama atribute form', 'nama lain' , rules
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!']); //user.email cek isi dari table user field email
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


       if ($this->form_validation->run() == false) { 
            $data['judul'] = 'Registrasi pengguna';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('templates/footer');
       }else {
           $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars('email'),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
           ];

           $this->User_model->insert($data);
           redirect('home');
       } 
    }
}