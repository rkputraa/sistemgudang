<?php 

/**
 * 
 */
class M_contoh extends CI_Model
{
	public function get_data()
	{
		return $this->db->get('tb_contoh')->result_array();
	}
}
