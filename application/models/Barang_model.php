<?php

class Barang_model extends CI_model
{
    public function getAllBarang()
    {
        return $this->db->get('barang')->result_array();
    }

    public function getBarang($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama_barang', $keyword);
            $this->db->or_like('stok_barang', $keyword);
            $this->db->or_like('harga_barang', $keyword);
        }
        return $this->db->get('barang', $limit, $start)->result_array();
    }

    public function countAllBarang()
    {
        return $this->db->get('barang')->num_rows();
    }

    public function tambahDataBarang($foto)
    {
        $data = [
            "nama_barang" => $this->input->post('nama_barang'),
            "gambar"  => $foto['file_name'],
            "stok_barang" => $this->input->post('stok_barang'),
            "harga_barang" => $this->input->post('harga_barang'),
            "deskripsi" => $this->input->post('deskripsi'),
            "spesifikasi" => $this->input->post('spesifikasi')
        ];

        return $this->db->insert('barang', $data);
    }

    public function hapusDataBarang($id_barang)
    {
        return $this->db->delete('barang', array('id_barang' => $id_barang));
    }

    public function getBarangById($id_barang)
    {
        return $this->db->get_where('barang', ['id_barang' => $id_barang])->row_array();
    }

    public function ubahDataBarang($foto)
    {
        $data = [
            "id_barang" => $this->input->post('id_barang', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "gambar"  => $foto['file_name'],
            "stok_barang" => $this->input->post('stok_barang', true),
            "harga_barang" => $this->input->post('harga_barang', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "spesifikasi" => $this->input->post('spesifikasi', true)
        ];
        $this->db->set($data);
        $this->db->where('id_barang', $this->input->post('id_barang'));
        $this->db->update('barang');
    }

    public function cariDataBarang()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_barang', $keyword);
        $this->db->or_like('stok_barang', $keyword);
        $this->db->or_like('harga_barang', $keyword);
        $this->db->or_like('spesifikasi', $keyword);
        return $this->db->get('barang')->result_array();
    }
}
