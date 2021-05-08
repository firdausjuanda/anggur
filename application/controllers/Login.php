<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }
    public function index()
    {
    if(!$this->session->userdata('user_username'))
    {
        $this->form_validation->set_rules('user_username', 'Username', 'required|trim');
        if($this->form_validation->run() == false)
        {
            $data['title'] = 'Login';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('templates/footer', $data);
        }
        else
        {
           $username = $this->input->post('user_username');
           $user_check = $this->User_model->getUser($username); 
           if(!$user_check)
           {
                $this->session->set_flashdata('msg', 'Username not found');
                redirect('login/');
           }
           else
           {
                if($user_check['user_password'] != md5($this->input->post('user_password')))
                {
                    $this->session->set_flashdata('msg', 'Incorrect Password');
                    redirect('login/');
                }
                else
                {

                    $user_data = [
                        'user_username' => $user_check['user_username'],
                    ];
                    $this->session->set_userdata($user_data);
                    redirect('home/');
                }
           }
        }
    }
    else
    {
        redirect('home/');
    }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login/');
    }
}