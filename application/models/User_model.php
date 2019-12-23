<?php

class User_model extends CI_model{
    public function insert($data){
        $this->db->insert('user', $data);
    }

    public function search($email){
        $user=$this->db->get_where('user', ['email' => $email])->row_array();
        return $user;
    }
}