<?php

class Kelolabarangmasuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barangmasuk_model');
        $this->load->library('form_validation');
    }

    public function Index()
    {
        $data['judul'] = 'Halaman Kelola Barang Masuk';
        $data['barang_masuk'] = $this->Barangmasuk_model->get_data();

        $this->load->view('templates/left', $data);
        $this->load->view('templates/right');
        $this->load->view('kelolabarangmasuk/index', $data);
        $this->load->view('templates/footer');
    }
    public function Detail()
    {
        $data['judul'] = 'Halaman Detail Barang Masuk';
        $data['barang_masuk'] = $this->Barangmasuk_model->get_data();

        $this->load->view('templates/left', $data);
        $this->load->view('templates/right');
        $this->load->view('kelolabarangmasuk/detail', $data);
        $this->load->view('templates/footer');
    }
    public function Tambah()
    {
        $data['judul'] = 'Form Tambah Data Barang Masuk';

        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal', 'required');
        $this->form_validation->set_rules('nama_distri', 'Distributor', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('id_barang', 'Id Barang', 'required');
        $this->form_validation->set_rules('jumlah_kuantitas', 'Banyak Kuantitas', 'required');
        $this->form_validation->set_rules('kuantitas', 'Jenis Kuantitas', 'required');
        $this->form_validation->set_rules('jumlah_item', 'Jumlah Item', 'required');
        $this->form_validation->set_rules('total_jumlah_item', 'Total Jumlah Item', 'required');
        $this->form_validation->set_rules('harga_barang_satuan', 'Harga Barang Satuan', 'required');
        $this->form_validation->set_rules('harga_barang_keseluruhan', 'Harga Barang Keseluruhan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/left', $data);
            $this->load->view('templates/right');
            $this->load->view('kelolabarangmasuk/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Barangmasuk_model->tambahBarangMasuk();
            redirect('kelolabarangmasuk');
        }
    }
}
