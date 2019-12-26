<?php
class Cart_model extends CI_Model{
    function get_all_produk(){
        $hasil = $this->db->get('barang');
        return $hasil->result();
    }

    public function tambahDataTransaksi()
    {
        // var_dump($this->cart->contents());
        // die;
        foreach($this->cart->contents() as $items){
            $data = [
                "nama_barang" => $items['name'],
                "harga_barang" => $items['price'],
                "quantity" => $items['qty'],
                "sub_total" => $items['subtotal']
                
            ];
            $this->db->insert('transaksi', $data);
            
        }
        $this->cart->destroy();

        
    }
}

?>