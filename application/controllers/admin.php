<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// helper
		is_logged_in();
	}

	public function index()
	{
		$data['judul'] = 'Halaman Home';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('templates/left', $data);
		$this->load->view('templates/right');
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}
}
