<?php
class User extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman User';
        $this->load->view('templates/left', $data);
        $this->load->view('templates/right');
        $this->load->view('user/index');
        $this->load->view('templates/footer');
    }
}
