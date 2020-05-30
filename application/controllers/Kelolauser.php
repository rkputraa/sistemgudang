<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelolauser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Kelola user';
        $data['user'] = $this->User_model->get_data();

        $this->load->view('templates/left', $data);
        $this->load->view('templates/right');
        $this->load->view('kelolauser/index', $data);
        $this->load->view('templates/footer');
    }
}
