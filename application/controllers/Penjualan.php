<?php

class Penjualan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // helper
        is_logged_in();

        $this->load->model('Penjualan_model');
        $this->load->model('Kelolabarang_model');
        $this->load->model('Keloladistributor_model');
        // $this->load->model('Kelolaunitusaha_model');

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Penjualan';
        $data['penjualan'] = $this->Penjualan_model->getPenjualan();

        $this->load->view('templates/left', $data);
        $this->load->view('templates/right');
        $this->load->view('penjualan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Penjualan';
        $data['penjualan'] = $this->Penjualan_model->getPenjualan();
        $data['barang'] = $this->Kelolabarang_model->getBarang();
        $data['distributor'] = $this->Keloladistributor_model->getDistributor();

        $this->form_validation->set_rules('id_penjualan', 'Id', 'required|trim');
        $this->form_validation->set_rules('id_barang', 'Id Barang', 'required|trim');
        $this->form_validation->set_rules('id_distributor', 'Id Distributor', 'required|trim');
        $this->form_validation->set_rules('harga_jual', 'Harga Jual', 'required|trim');
        $this->form_validation->set_rules('jumlah_terjual', 'Jumlah terjual', 'required|trim');
        $this->form_validation->set_rules('pendapatan', 'Pendapatan', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/left', $data);
            $this->load->view('templates/right');
            $this->load->view('penjualan/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Penjualan_model->tambahPenjualan();
            $this->session->set_flashdata('flash', 'ditambah!');
            redirect('penjualan');
        }
    }

    public function edit($id_penjualan)
    {
        $data['judul'] = 'Form Edit Barang';
        $data['penjualan'] = $this->Penjualan_model->getPenjualanById($id_penjualan);
        $data['barang'] = $this->Kelolabarang_model->getBarang();
        $data['distributor'] = $this->Keloladistributor_model->getDistributor();


        $this->form_validation->set_rules('id_penjualan', 'Id', 'required|trim');
        $this->form_validation->set_rules('id_barang', 'Id Barang', 'required|trim');
        $this->form_validation->set_rules('id_distributor', 'Id Distributor', 'required|trim');
        $this->form_validation->set_rules('harga_jual', 'Harga jual', 'required|trim');
        $this->form_validation->set_rules('jumlah_terjual', 'Jumlah terjual', 'required|trim');
        $this->form_validation->set_rules('pendapatan', 'Pendapatan', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/left', $data);
            $this->load->view('templates/right');
            $this->load->view('penjualan/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Penjualan_model->editPenjualan();
            $this->session->set_flashdata('flash', 'diubah!');
            redirect('penjualan');
        }
    }

    public function hapus($id_penjualan)
    {
        $this->Penjualan_model->hapusPenjualan($id_penjualan);
        $this->session->set_flashdata('flash', 'dihapus!');
        redirect('penjualan');
    }
}
