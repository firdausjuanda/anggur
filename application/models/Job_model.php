<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_model extends CI_Model
{
    public function getAllJob()
    {
        $this->db->select('*');
        $this->db->from('tb_job');
        // $this->db->join('tb_img','tb_img.img_job_id=tb_job.job_img_id','false');
        // $this->db->where('img_is_job', 1, 'left');
        return $this->db->get()->result_array();
    }

}