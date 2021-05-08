<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Img_model extends CI_Model
{
    public function getJobImg()
    {
        $this->db->select('*');
        $this->db->from('tb_img');
        $this->db->where('img_is_job', 1, 'left');
        return $this->db->get()->result_array();
    }

}