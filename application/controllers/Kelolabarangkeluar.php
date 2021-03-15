<?php

class Kelolabarangkeluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // helper
        is_logged_in();

        $this->load->model('Barangkeluar_model');
        $this->load->model('Kelolabarang_model');
        $this->load->model('Keloladistributor_model');

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Kelola Barang Keluar';
        $data['barang_keluar'] = $this->Barangkeluar_model->getBarangKeluar();

        $this->load->view('templates/left', $data);
        $this->load->view('templates/right');
        $this->load->view('kelolabarangkeluar/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Barang Keluar';
        $data['barang_keluar'] = $this->Barangkeluar_model->getBarangKeluar();
        $data['barang'] = $this->Kelolabarang_model->getBarang();
        $data['distributor'] = $this->Keloladistributor_model->getDistributor();
        // $data['unit_usaha'] = $this->Kelolaunitusaha_model->getUnitUsaha();

        $this->form_validation->set_rules('id_barang_keluar', 'Id', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim');
        $this->form_validation->set_rules('id_barang', 'Id Barang', 'required|trim');
        // $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required|trim');
        $this->form_validation->set_rules('id_distributor', 'Id Distributor', 'required|trim');
        // $this->form_validation->set_rules('nama_distri', 'Distributor', 'required|trim');
        // $this->form_validation->set_rules('id_unit', 'Id Unit Usaha', 'required|trim');
        $this->form_validation->set_rules('jumlah_keluar', 'Jumlah Keluar', 'required|trim');
        $this->form_validation->set_rules('harga_modal', 'Harga Modal', 'required|trim');
        $this->form_validation->set_rules('total_biaya_keluar', 'Total Biaya Keluar', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/left', $data);
            $this->load->view('templates/right');
            $this->load->view('kelolabarangkeluar/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Barangkeluar_model->tambahBarangKeluar();
            $this->session->set_flashdata('flash', 'ditambah!');
            redirect('kelolabarangkeluar');
        }
    }

    public function edit($id_barang_keluar)
    {
        $data['judul'] = 'Form Edit Barang';
        $data['barang_keluar'] = $this->Barangkeluar_model->getBarangKeluarById($id_barang_keluar);
        $data['barang'] = $this->Kelolabarang_model->getBarang();
        $data['distributor'] = $this->Keloladistributor_model->getDistributor();

        // $data['distributor'] = $this->Keloladistributor_model->getDistributor($id_distributor);

        $this->form_validation->set_rules('id_barang_keluar', 'Id', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim');
        $this->form_validation->set_rules('id_barang', 'Id Barang', 'required|trim');
        $this->form_validation->set_rules('id_distributor', 'Id Distributor', 'required|trim');
        $this->form_validation->set_rules('jumlah_keluar', 'Jumlah Keluar', 'required|trim');
        $this->form_validation->set_rules('harga_modal', 'Harga Modal', 'required|trim');
        $this->form_validation->set_rules('total_biaya_keluar', 'Total Biaya Keluar', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/left', $data);
            $this->load->view('templates/right');
            $this->load->view('kelolabarangkeluar/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Barangkeluar_model->editBarangKeluar();
            $this->session->set_flashdata('flash', 'diubah!');
            redirect('kelolabarangkeluar');
        }
    }

    public function hapus($id_barang_keluar)
    {
        $this->Barangkeluar_model->hapusBarangKeluar($id_barang_keluar);
        $this->session->set_flashdata('flash', 'dihapus!');
        redirect('kelolabarangkeluar');
    }
}
