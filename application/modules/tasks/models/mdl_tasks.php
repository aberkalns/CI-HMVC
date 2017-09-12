<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_tasks extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	function get($order_by) 
	{
		$this->db->order_by($order_by);
		$query = $this->db->get('tasks');
		return $query;
	}

}

/* End of file mdl_tasks.php */
/* Location: ./application/modules/tasks/models/mdl_tasks.php */