<?php
class Transaksi extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Transaksi_model');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Barang';
        $data['transaksi'] = $this->Transaksi_model->getAllTransaksi();
        $this->load->view('templates/header', $data);
        $this->load->view('transaksi/index', $data);
        $this->load->view('templates/footer');
    }

}




?>