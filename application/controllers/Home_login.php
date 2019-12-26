<?php
class Home_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->model('Shop_model');
    }
    public function index($nama = '')
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'BECAUSEØMAT';
        $data['nama'] = $nama;
        $data['barang'] = $this->Home_model->getAllBarang();
        $this->load->view('templates/header_login', $data);
        $this->load->view('home/index_login', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Barang';
        $data['barang'] = $this->Home_model->getBarangById($id);
        $this->load->view('templates/header_login', $data);
        $this->load->view('home/detail_login', $data);
        $this->load->view('templates/footer');
    }

    public function shop()
    {
        $data['barang'] = $this->Shop_model->getAllBarang();
        $this->load->view('templates/header_login', $data);
        $this->load->view('shop/index_login', $data);
        $this->load->view('templates/footer');
    }
}
