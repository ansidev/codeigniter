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
		// if(!empty($data['query']))
		// {
		// 	foreach ($data['query'] as $post) {

		// 		$post['post_author'] = $this->post_model->get_author_fullname($post['post_author_id']);
		// 	}
		// }

		$this->load->view('post/index', $data);
	}

	function view($id) {
		$data['query'] = $this->post_model->get_post($id);
		$data['post_id'] = $id;
		// Console::log($data);
		$this->load->helper('form');
		$this->load->library(array('form_validation', 'session'));

		//Set validation rules
		// $this->form_validation->set_rules('commentor', 'Name', 'required');
		// $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		// $this->form_validation->set_rules('commentor', 'Comment', 'required');

		if($data['query'])
		{
			// if($this->form_validation->run() == FALSE)
			// {
				$this->load->view('post/view', $data);
			// }
			// else
			// {
			// 	$post_id = $this->input->post('post_id');
			// }
		}		
	}

	function edit($id) {
		$this->load->helper('form');
		$this->load->library(array('form_validation', 'session'));

		//Set validation rules
		$this->form_validation->set_rules('post_title', 'Post title', 'required|xss_clean|min_length[1]|max_length[200]');
		$this->form_validation->set_rules('post_content', 'Post content', 'required|xss_clean|min_length[1]');

		if($id == null)
		{
			throw new NullException("Post ID cannot null");
			
			// redirect('post/index');
		}
		else
		{
			$data['query'] = $this->post_model->get_post($id);
			Console::log($data);

			if($this->post_model->get_post($id))
			{
				foreach($this->post_model->get_post($id) as $post)
				{
					$data['post'] = $post;
				}

				if($this->form_validation->run() == FALSE)
				{
					$this->load->view('post/edit', $data);
				}
				else
				{
					$title = $this->input->post('post_title');
					$content = $this->input->post('post_content');					
					$this->post_model->update($id, $title, $content);
					$this->session->set_flashdata('message', 'Post has been updated!');
					// redirect('post/edit/' . $id);
					redirect('post/index');
				}
			}		
		}
	}

	function add() {
		$this->load->helper('form');
		$this->load->library(array('form_validation', 'session'));

		//Set validation rules
		$this->form_validation->set_rules('post_title', 'Post title', 'required|xss_clean|min_length[1]|max_length[200]');
		$this->form_validation->set_rules('post_content', 'Post content', 'required|xss_clean|min_length[1]');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('post/add');
		}
		else
		{
			$title = $this->input->post('post_title');
			$content = $this->input->post('post_content');
			$this->post_model->add($title, $content);
			$this->session->set_flashdata('message', 'New post has been added!');
			// $this->load->view('post/index');
			redirect('post/index');
		}
	}

	function delete($id) {
		$this->post_model->delete($id);
		$this->session->set_flashdata('message', 'Post has been deleted!');
		redirect('post/index');			
		// $this->load->view('post/index');
	}
}

/* End of file post.php */
/* Location: ./application/controllers/post.php */