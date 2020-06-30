<?php

class Kelolabarangkeluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barangkeluar_model');
    }

    public function Index()
    {
        $data['judul'] = 'Halaman Kelola Barang Keluar';
        $data['barangklr'] = $this->Barangkeluar_model->get_data();

        $this->load->view('templates/left', $data);
        $this->load->view('templates/right');
        $this->load->view('kelolabarangkeluar/index', $data);
        $this->load->view('templates/footer');
    }
}
