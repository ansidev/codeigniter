<?php 

class User_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function get_all_users()
	{
		$query = $this->db->get('users');
		return $query->result();
	}

	function user_exists($id) {
		$this->db->select('user_id');
		$this->db->from('users');
		$this->db->where('user_id', $id);
		$result = $this->db->count_all_results();
		return $result;
	}

	function create_user($fullname, $username, $email, $password) {
		$data = array(
			'user_fullname' => $fullname,
			'user_username' => $username,
			'user_email' => $email,
			'user_password' => $password
			);
		$this->db->insert('users', $data);
	}

	function check_login($username, $password) {
		$this->db->select('user_id');
		$this->db->from('users');
		$this->db->where('user_username', $username);
		$this->db->where('user_password', $password);
		$result = $this->db->count_all_results();
		if(!empty($result)) {
			return TRUE;
		}
		return FALSE;
	}
}

/* End of file users_model.php */
/* Location: ./application/models/users_model.php */