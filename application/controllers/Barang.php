<?php

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('upload');
        $this->load->library('form_validation');
        $this->load->library('pagination');
    }
    public function index()
    {
        $data['judul'] = 'Daftar Barang';

        $data['barang'] = $this->Barang_model->getAllBarang();

        // if ($this->input->post('keyword')) {
        // }

        if ($this->input->post('submit')) {
            // $data['barang'] = $this->Barang_model->cariDataBarang();
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // config
        $this->db->like('nama_barang', $data['keyword']);
        $this->db->or_like('stok_barang', $data['keyword']);
        $this->db->or_like('harga_barang', $data['keyword']);
        $this->db->from('barang');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_pages'] = 10;

        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['barang'] = $this->Barang_model->getBarang($config['per_pages'], $data['start'], $data['keyword']);

        $this->load->view('templates/header_admin', $data);
        $this->load->view('barang/index', $data);
        $this->load->view('templates/footer_admin');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Barang';

        $this->form_validation->set_rules('nama_barang', 'Nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('spesifikasi', 'Spesifikasi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('barang/tambah');
            $this->load->view('templates/footer_admin');
        } else {
            $config['upload_path'] = './assets/images/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['max_size'] = '3048';  //3MB max
            $config['max_width'] = '4480'; // pixel
            $config['max_height'] = '4480'; // pixel
            $config['file_name'] = $_FILES['gambar']['name'];
            $this->upload->initialize($config);
            if (!empty($_FILES['gambar']['name'])) {

                if ($this->upload->do_upload('gambar')) {
                    $foto = $this->upload->data();
                    $this->Barang_model->tambahDataBarang($foto);
                }
            }
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('barang');
        }
    }

    public function hapus($id_barang)
    {
        $this->Barang_model->hapusDataBarang($id_barang);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('barang');
    }

    public function detail($id_barang)
    {
        $data['judul'] = 'Detail Data barang';
        $data['barang'] = $this->Barang_model->getBarangById($id_barang);
        $this->load->view('templates/header_admin', $data);
        $this->load->view('barang/detail');
        $this->load->view('templates/footer_admin');
    }

    public function ubah($id_barang)
    {
        $data['judul'] = 'Form Ubah Data Barang';
        $data['barang'] = $this->Barang_model->getBarangById($id_barang);

        $this->form_validation->set_rules('nama_barang', 'Nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('spesifikasi', 'Spesifikasi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('barang/ubah', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $config['upload_path'] = './assets/images/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['max_size'] = '3048';  //3MB max
            $config['max_width'] = '4480'; // pixel
            $config['max_height'] = '4480'; // pixel

            $config['file_name'] = $_FILES['gambar']['name'];
            $this->upload->initialize($config);
            if (!empty($_FILES['gambar']['name'])) {

                if ($this->upload->do_upload('gambar')) {
                    $foto = $this->upload->data();
                    $data = array(
                        'gambar'        => $foto['file_name'],
                    );
                    unlink(FCPATH . "assets/images/" . $data->gambar);
                } else {
                    echo $this->upload->display_errors();
                }
                $this->Barang_model->ubahDataBarang($foto);
            }
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('barang');
        }
    }
}
