<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelolaunitusaha extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // helper
        is_logged_in();

        $this->load->model('Kelolaunitusaha_model');

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Kelola User';
        $data['unit_usaha'] = $this->Kelolaunitusaha_model->getUnitUsaha();

        if ($this->input->post('keyword')) {
            $data['unit_usaha'] = $this->Kelolaunitusaha_model->cariDataUnitUsaha();
        }

        $this->load->view('templates/left', $data);
        $this->load->view('templates/right');
        $this->load->view('kelolaunitusaha/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data = array(
            'judul' => 'Form Tambah Unit Usaha',
            'unit_usaha' => $this->Kelolaunitusaha_model->getUnitUsaha(),
        );

        $this->form_validation->set_rules('id_unit', 'Id', 'required|numeric');
        $this->form_validation->set_rules('nama_unit', 'Nama Unit', 'required');
        $this->form_validation->set_rules('alamat_unit', 'Alamat', 'required');
        $this->form_validation->set_rules('kontak_unit', 'Kontak', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/left', $data);
            $this->load->view('templates/right');
            $this->load->view('kelolaunitusaha/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Kelolaunitusaha_model->tambahDataUnitUsaha();
            $this->session->set_flashdata('flash', 'ditambah!');
            redirect('kelolaunitusaha');
        }
    }

    public function edit($id_unit)
    {
        $data['judul'] = 'Form Edit Unit Usaha';
        $data['unit_usaha'] = $this->Kelolaunitusaha_model->getUnitById($id_unit);

        $this->form_validation->set_rules('id_unit', 'Id', 'required|numeric');
        $this->form_validation->set_rules('nama_unit', 'Nama Unit', 'required');
        $this->form_validation->set_rules('alamat_unit', 'Alamat', 'required');
        $this->form_validation->set_rules('kontak_unit', 'Kontak', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/left', $data);
            $this->load->view('templates/right');
            $this->load->view('kelolaunitusaha/edit');
            $this->load->view('templates/footer');
        } else {
            $this->Kelolaunitusaha_model->editDataUnitUsaha();
            $this->session->set_flashdata('flash', 'diubah!');
            redirect('kelolaunitusaha');
        }
    }

    public function hapus($id_unit)
    {
        $this->Kelolaunitusaha_model->hapusDataUnitUsaha($id_unit);
        $this->session->set_flashdata('flash', 'dihapus!');
        redirect('kelolaunitusaha');
    }
}
