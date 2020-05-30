<?php

class Kelolabarangmasuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barangmasuk_model');
    }

    public function Index()
    {
        $data['judul'] = 'Halaman Kelola Barang Masuk';
        $data['barang'] = $this->Barangmasuk_model->get_data();

        $this->load->view('templates/left', $data);
        $this->load->view('templates/right');
        $this->load->view('kelolabarangmasuk/index', $data);
        $this->load->view('templates/footer');
    }
    public function Detail()
    {
        $data['judul'] = 'Halaman Detail Barang Masuk';
        $data['barang'] = $this->Barangmasuk_model->get_data();

        $this->load->view('templates/left', $data);
        $this->load->view('templates/right');
        $this->load->view('kelolabarangmasuk/detail', $data);
        $this->load->view('templates/footer');
    }
}
