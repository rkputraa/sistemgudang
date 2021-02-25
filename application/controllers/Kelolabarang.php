<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelolabarang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelolabarang_model');
        $this->load->model('Keloladistributor_model');

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Kelola Barang';
        $data['barang'] = $this->Kelolabarang_model->getBarang();
        // $data['distributor'] = $this->Keloladistributor_model->getDistributor();

        if ($this->input->post('keyword')) {
            $data['barang'] = $this->Kelolabarang_model->cariDataBarang();
            // $data['distributor'] = $this->Keloladistributor_model->cariDataDistributor();
        }

        $this->load->view('templates/left', $data);
        $this->load->view('templates/right');
        $this->load->view('kelolabarang/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data = array(
            'judul' => 'Form Tambah Barang',
            'barang' => $this->Kelolabarang_model->getBarang(),
            'distributor' => $this->Keloladistributor_model->getDistributor()
        );

        $this->form_validation->set_rules('id_barang', 'Id Barang', 'required|numeric');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('id_distributor', 'Distributor', 'required');
        $this->form_validation->set_rules('harga_modal', 'Harga Modal', 'required|numeric');
        $this->form_validation->set_rules('harga_jual', 'Harga Jual', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/left', $data);
            $this->load->view('templates/right');
            $this->load->view('kelolabarang/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Kelolabarang_model->tambahDataBarang();
            $this->session->set_flashdata('flash', 'ditambah!');
            redirect('kelolabarang');
        }
    }

    public function edit($id_barang)
    {
        $data['judul'] = 'Form Edit Barang';
        $data['barang'] = $this->Kelolabarang_model->getBarangById($id_barang);
        $data['distributor'] = $this->Keloladistributor_model->getDistributor();

        // $data['distributor'] = $this->Keloladistributor_model->getDistributor($id_distributor);

        $this->form_validation->set_rules('id_barang', 'Id Barang', 'required|numeric');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('id_distributor', 'Id Distributor', 'required|numeric');
        $this->form_validation->set_rules('harga_modal', 'Harga Modal', 'required|numeric');
        $this->form_validation->set_rules('harga_jual', 'Harga Jual', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/left', $data);
            $this->load->view('templates/right');
            $this->load->view('kelolabarang/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kelolabarang_model->editDataBarang();
            $this->session->set_flashdata('flash', 'diubah!');
            redirect('kelolabarang');
        }
    }

    public function hapus($id_barang)
    {
        $this->Kelolabarang_model->hapusDataBarang($id_barang);
        $this->session->set_flashdata('flash', 'dihapus!');
        redirect('kelolabarang');
    }
}
