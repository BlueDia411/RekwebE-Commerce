<?php
class Login extends CI_Controller
{
    public function index($nama = '')
    {
        $data['judul'] = 'Login';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/footer');
    }
}
?>