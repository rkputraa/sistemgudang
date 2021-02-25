<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keloladistributor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Keloladistributor_model');

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Kelola Distributor';
        $data['distributor'] = $this->Keloladistributor_model->getDistributor();

        if ($this->input->post('keyword')) {
            $data['distributor'] = $this->Keloladistributor_model->cariDataDistributor();
        }

        $this->load->view('templates/left', $data);
        $this->load->view('templates/right');
        $this->load->view('keloladistributor/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data = array(
            'judul' => 'Form Tambah Distributor',
            'distributor' => $this->Keloladistributor_model->getDistributor(),
        );

        $this->form_validation->set_rules('id_distributor', 'Id', 'required|numeric');
        $this->form_validation->set_rules('nama_distributor', 'Nama', 'required');
        $this->form_validation->set_rules('alamat_distributor', 'Alamat Distributor', 'required');
        $this->form_validation->set_rules('kontak_distributor', 'Kontak Distributor', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/left', $data);
            $this->load->view('templates/right');
            $this->load->view('keloladistributor/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Keloladistributor_model->tambahDataDistributor();
            $this->session->set_flashdata('flash', 'ditambah!');
            redirect('keloladistributor');
        }
    }

    public function edit($id_distributor)
    {
        $data['judul'] = 'Form Edit Distributor';
        $data['distributor'] = $this->Keloladistributor_model->getDistributorById($id_distributor);

        $this->form_validation->set_rules('id_distributor', 'Id', 'required|numeric');
        $this->form_validation->set_rules('nama_distributor', 'Nama', 'required');
        $this->form_validation->set_rules('alamat_distributor', 'Alamat Distributor', 'required');
        $this->form_validation->set_rules('kontak_distributor', 'Kontak Distributor', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/left', $data);
            $this->load->view('templates/right');
            $this->load->view('keloladistributor/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Keloladistributor_model->editDataDistributor();
            $this->session->set_flashdata('flash', 'diubah!');
            redirect('keloladistributor');
        }
    }

    public function hapus($id_distributor)
    {
        $this->Keloladistributor_model->hapusDataDistributor($id_distributor);
        $this->session->set_flashdata('flash', 'dihapus!');
        redirect('keloladistributor');
    }
}
