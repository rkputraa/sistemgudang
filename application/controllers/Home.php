<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Home';
        // $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')]);

        $this->load->view('templates/left', $data);
        $this->load->view('templates/right');
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}
