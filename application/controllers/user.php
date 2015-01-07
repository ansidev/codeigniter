<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
  
    function __construct()
    {
    	parent::__construct();
    	$this->load->model('user_model');
        $this->load->helper('url');
    }

    function index() {
    	// $this->load->view('layouts/master');
    	$data['query'] = $this->user_model->get_all_users();
        $this->load->view('user/index', $data);
    }

    function login() {
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('user_model');

        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[50]|trim|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[50]|trim|xss_clean');

        if($this->form_validation->run() === FALSE) {
            $this->load->view('user/login');
        }
        else {
            if($this->user_model->check_login($this->input->post('username'), $this->input->post('password')) === TRUE) {
                $this->load->view('user/register_success');
            }
            else {
                $this->load->view('user/register');
            }
        }
    }

    public function register() {
    	$this->load->library('form_validation');
    	$this->load->helper(array('form', 'url'));
        $this->load->model('user_model');
        $this->form_validation->set_rules('fullname', 'Full Name', 'required|min_length[5]|max_length[50]|trim|xss_clean');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[50]|trim|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[50]|trim|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'required|min_length[5]|max_length[50]|valid_email');
        if($this->form_validation->run() === FALSE) {
            $this->load->view('user/register');
        }
    	else {
            $this->user_model->create_user(
                $this->input->post('fullname'),
                $this->input->post('username'),
                $this->input->post('email'),
                $this->input->post('password')
                );
            $this->load->view('user/register_success');
        }


    }

}