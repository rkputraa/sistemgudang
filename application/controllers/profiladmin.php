<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profiladmin extends CI_Controller
{
	public function homeprofil()
	{
		$this->load->model('m_profiladmin');
		$data['user'] = $this->m_profiladmin->get_data();

		$this->load->view('left');
		$this->load->view('right');
		$this->load->view('homeprofiladmin.php', $data);
		$this->load->view('footer');
	}
}
