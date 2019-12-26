<?php
class Transaksi_model extends CI_Model{
    public function getAllTransaksi()
    {
        return $this->db->get('transaksi')->result_array();
    }
}

?>