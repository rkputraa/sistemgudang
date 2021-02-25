<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelolauser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelolauser_model');

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Kelola User';
        $data['user'] = $this->Kelolauser_model->getUser();

        if ($this->input->post('keyword')) {
            $data['user'] = $this->Kelolauser_model->cariDataUser();
        }

        $this->load->view('templates/left', $data);
        $this->load->view('templates/right');
        $this->load->view('kelolauser/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data = array(
            'judul' => 'Form Tambah User',
            'user' => $this->Kelolauser_model->getUser(),
            // 'distributor' => $this->Keloladistributor_model->getDistributor()
        );

        $this->form_validation->set_rules('id_user', 'Id', 'required|numeric');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nama_user', 'Nama Karyawan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/left', $data);
            $this->load->view('templates/right');
            $this->load->view('kelolauser/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Kelolauser_model->tambahDataUser();
            $this->session->set_flashdata('flash', 'ditambah!');
            redirect('kelolauser');
        }
    }

    public function edit($id_user)
    {
        $data['judul'] = 'Form Edit Karyawan';
        $data['user'] = $this->Kelolauser_model->getUserById($id_user);
        // $data['distributor'] = $this->Keloladistributor_model->getDistributor();

        // $data['distributor'] = $this->Keloladistributor_model->getDistributor($id_distributor);

        $this->form_validation->set_rules('id_user', 'Id', 'required|numeric');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nama_user', 'Nama Karyawan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/left', $data);
            $this->load->view('templates/right');
            $this->load->view('kelolauser/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kelolauser_model->editDataUser();
            $this->session->set_flashdata('flash', 'diubah!');
            redirect('kelolauser');
        }
    }

    public function hapus($id_user)
    {
        $this->Kelolauser_model->hapusDataUser($id_user);
        $this->session->set_flashdata('flash', 'dihapus!');
        redirect('kelolauser');
    }

    public function regis()
    {
    }
}
