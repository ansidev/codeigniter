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
		$this->db->select('posts.post_id, posts.post_title, posts.post_content, posts.post_date, posts.post_date, users.user_fullname');
		$this->db->join('users', 'posts.post_author_id = users.user_id');
		$query = $this->db->get('posts');
		return $query->result();
	}

	function get_post($id)
	{
		if(!empty($id))
		{
			$this->db->select('posts.post_id, posts.post_title, posts.post_content, posts.post_date, posts.post_date, users.user_fullname');
			$this->db->join('users', 'posts.post_author_id = users.user_id');
			$this->db->where('post_id', $id);
			$this->db->limit(1);
			$query = $this->db->get('posts');
			// $query = $this->db->query('SELECT * FROM `posts` JOIN users WHERE posts.post_author_id = users.user_id');
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
			return $query->result();
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

	function update($id, $title, $content)
	{
		$data = array(
			'post_title' => $title,
			'post_content' => $content
		);
		$this->db->where('post_id', $id);
		$this->db->update('posts', $data);
	}
}

/* End of file post_model.php */
/* Location: ./application/models/post_model.php */