<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // helper
        is_logged_in();
    }

    public function index()
    {
        $data['judul'] = 'Halaman Home';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/left', $data);
        $this->load->view('templates/right');
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    // public function edit($id_user)
    // {
    //     // $data['judul'] = 'Form Edit Barang';
    //     // $data['distributor'] = $this->Keloladistributor_model->getDistributor();
    //     $data['user'] = $this->Kelolauser_model->getUserById($id_user);

    //     $this->form_validation->set_rules('id_user', 'Id User', 'required|numeric|trim');
    //     $this->form_validation->set_rules('username', 'Username', 'required|trim');
    //     $this->form_validation->set_rules('nama_user', 'Nama User', 'required|trim');
    //     $this->form_validation->set_rules('password', 'Password', 'required|trim');



    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('templates/left', $data);
    //         $this->load->view('templates/right');
    //         $this->load->view('kelolabarang/edit', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         $this->Kelolabarang_model->editDataBarang();
    //         $this->session->set_flashdata('flash', 'diubah!');
    //         redirect('kelolabarang');
    //     }
    // }
}
