<?php
class Checkout extends CI_Controller
{
    public function index($nama = '')
    {
        $data['judul'] = 'Detail Barang';
        $this->load->view('templates/header', $data);
    }

    
}
?>