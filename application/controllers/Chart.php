<?php
class Chart extends CI_Controller
{
    public function index($nama = '')
    {
        $data['data'] = $this->cart_model->get_all_produk();
        $data['judul'] = 'Detail Barang';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('chart/chart', $data);
    }
}
