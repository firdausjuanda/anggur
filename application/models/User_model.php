<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getUser($username)
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('user_username', $username, 'left');
        return $this->db->get()->row_array();
    }
}