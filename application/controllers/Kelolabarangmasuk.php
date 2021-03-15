<?php

class Kelolabarangmasuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // helper
        is_logged_in();

        $this->load->model('Barangmasuk_model');
        $this->load->model('Kelolabarang_model');
        $this->load->model('Keloladistributor_model');
        // $this->load->model('Kelolaunitusaha_model');

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Kelola Barang Masuk';
        $data['barang_masuk'] = $this->Barangmasuk_model->getBarangMasuk();

        $this->load->view('templates/left', $data);
        $this->load->view('templates/right');
        $this->load->view('kelolabarangmasuk/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Barang Masuk';
        $data['barang_masuk'] = $this->Barangmasuk_model->getBarangMasuk();
        $data['barang'] = $this->Kelolabarang_model->getBarang();
        $data['distributor'] = $this->Keloladistributor_model->getDistributor();
        // $data['unit_usaha'] = $this->Kelolaunitusaha_model->getUnitUsaha();

        $this->form_validation->set_rules('id_barang_masuk', 'Id', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim');
        $this->form_validation->set_rules('id_barang', 'Id Barang', 'required|trim');
        // $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required|trim');
        $this->form_validation->set_rules('id_distributor', 'Id Distributor', 'required|trim');
        // $this->form_validation->set_rules('nama_distri', 'Distributor', 'required|trim');
        // $this->form_validation->set_rules('id_unit', 'Id Unit Usaha', 'required|trim');
        $this->form_validation->set_rules('jumlah_masuk', 'Jumlah Masuk', 'required|trim');
        $this->form_validation->set_rules('harga_modal', 'Harga Modal', 'required|trim');
        $this->form_validation->set_rules('total_biaya_masuk', 'Total Biaya Masuk', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/left', $data);
            $this->load->view('templates/right');
            $this->load->view('kelolabarangmasuk/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Barangmasuk_model->tambahBarangMasuk();
            $this->session->set_flashdata('flash', 'ditambah!');
            redirect('kelolabarangmasuk');
        }
    }

    public function edit($id_barang_masuk)
    {
        $data['judul'] = 'Form Edit Barang';
        $data['barang_masuk'] = $this->Barangmasuk_model->getBarangMasukById($id_barang_masuk);
        $data['barang'] = $this->Kelolabarang_model->getBarang();
        $data['distributor'] = $this->Keloladistributor_model->getDistributor();

        // $data['distributor'] = $this->Keloladistributor_model->getDistributor($id_distributor);

        $this->form_validation->set_rules('id_barang_masuk', 'Id', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim');
        $this->form_validation->set_rules('id_barang', 'Id Barang', 'required|trim');
        $this->form_validation->set_rules('id_distributor', 'Id Distributor', 'required|trim');
        $this->form_validation->set_rules('jumlah_masuk', 'Jumlah Masuk', 'required|trim');
        $this->form_validation->set_rules('harga_modal', 'Harga Modal', 'required|trim');
        $this->form_validation->set_rules('total_biaya_masuk', 'Total Biaya Masuk', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/left', $data);
            $this->load->view('templates/right');
            $this->load->view('kelolabarangmasuk/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Barangmasuk_model->editBarangMasuk();
            $this->session->set_flashdata('flash', 'diubah!');
            redirect('kelolabarangmasuk');
        }
    }

    public function hapus($id_barang_masuk)
    {
        $this->Barangmasuk_model->hapusBarangMasuk($id_barang_masuk);
        $this->session->set_flashdata('flash', 'dihapus!');
        redirect('kelolabarangmasuk');
    }
}
