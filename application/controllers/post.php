<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
		$this->load->helper('url');
	}

	function index()
	{
		$data['query'] = $this->post_model->get_all_posts();
		$this->load->view('post/index', $data);
	}

	function view($id) {
		$data['query'] = $this->post_model->get_post($id);
		$data['post_id'] = $id;
		// $this->load->helper('form');
		// $this->load->library(array('form_validation', 'session'));

		//Set validation rules

		if($this->post_model->get_post($id))
		{
			foreach($this->post_model->get_post($id) as row)
			{
				$data['post_title'] = $row->post_title;
			}

			// if($this->form_validation->run() == FALSE)
			// {
			// 	$this->load->view('post/view', $data);
			// }
			// else
			// {
			// 	$post_id = $this->input->post('post_id');
			// }
		}
		else
		{
			show_error_404();
		}
		
	}

	function add() {
		$this->load->helper('form');
		$this->load->library(array('form_validation', 'session'));

		//Set validation rules
		$this->form_validation->set_rules('post_title', 'Post title', 'required|xss_clean|min_length[5]|max_length[200]');
		$this->form_validation->set_rules('post_content', 'Post content', 'required|xss_clean|min_length[5]');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('post/add');
		}
		else
		{
			$title = $this->input->post('post_title');
			$content = $this->input->post('post_content');
			$this->post_model->add($title, $content);
			$this->session->set_flashdata('message', '1 new post added!');
			redirect('post/add');
		}
	}
}

/* End of file post.php */
/* Location: ./application/controllers/post.php */