<?php

class User_model extends CI_model{
    public function insert($data){
        $this->db->insert('user', $data);
    }
}