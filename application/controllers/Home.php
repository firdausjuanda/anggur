<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Job_model');
		$this->load->model('Img_model');
	}
	public function index()
	{
		$username = $this->session->userdata('user_username');
		$data['title'] = 'Home';
		$data['this_user'] = $this->User_model->getUser($username);
		$data['job_data'] = $this->Job_model->getAllJob();
		$data['img_job'] = $this->Img_model->getJobImg();
		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer', $data);
	}
}
