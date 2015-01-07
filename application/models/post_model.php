<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function get_all_posts()
	{
		$query = $this->db->get('posts');
		return $query->result();
	}

	function get_post($id)
	{
		if(!empty($id))
		{
			$this->db->where('post_id', $id);
			$query = $this->db->get('posts');
			if($query->num_rows() !== 0)
			{
				return $query->result();
			}
		}
		return FALSE;
	}

	function get_author_fullname($id)
	{
		if(!empty($id))
		{
			$this->db->where('user_id', $id);
			$query = $this->db->get('users');
		}
		return FALSE;
	}

	function add($title, $content)
	{
		$data = array(
			'post_title' => $title,
			'post_content' => $content
		);
		$this->db->insert('posts', $data);
	}

	function update()
	{
		$data = array(
			'post_title' => $this->input->post('post_title'),
			'post_content' => $this->input->post('post_content')
		);
		$this->db->where('post_id', $this->input->post('post_id'));
		$this->db->update('posts', $data);
	}
}

/* End of file post_model.php */
/* Location: ./application/models/post_model.php */