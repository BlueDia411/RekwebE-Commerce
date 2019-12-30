<?php
class Cart_model extends CI_Model
{
    function get_all_produk()
    {
        $hasil = $this->db->get('barang');
        return $hasil->result();
    }

    // public function getTransaksiByKode($kode)
    // {
    //     return $this->db->get_where('transaksi', ['kode' => $kode])->row_array();
    // }



    public function tambahDataTransaksi()
    {
        // var_dump($this->cart->contents());
        // die;
        // $x = 0;
        foreach ($this->cart->contents() as $items) {
            $data = [
                "nama_barang" => $items['name'],
                "harga_barang" => $items['price'],
                "quantity" => $items['qty'],
                "sub_total" => $items['subtotal']
                // "kode" => $transaksi['kode']++

                //    $x = $items['subtotal'] + $x ;

            ];

            // $sub_total = $x;
            $this->db->insert('transaksi', $data);
        }
        $this->cart->destroy();

        $this->load->view('checkout/index');
    }
}
