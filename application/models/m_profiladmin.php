<?php 

class M_profiladmin extends CI_Model
{
	public function get_data()
	{
		return $this->db->get('user')->result_array();
	}
}
