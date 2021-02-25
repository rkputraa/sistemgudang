<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelolamenu_model');

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Manajemen Menu';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/left', $data);
        $this->load->view('templates/right');
        $this->load->view('menu/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Manajemen Menu';

        $this->form_validation->set_rules('menu', 'Menu', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/left', $data);
            $this->load->view('templates/right');
            $this->load->view('menu/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert"><span class="badge badge-pill badge-success">Selesai</span> Data sukses ditambahkan!! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div> ');
            redirect('menu');
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Menu';
        $data['menu'] = $this->Kelolamenu_model->getMenuById($id);

        $this->form_validation->set_rules('menu', 'Menu', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/left', $data);
            $this->load->view('templates/right');
            $this->load->view('menu/edit');
            $this->load->view('templates/footer');
        } else {
            $this->Kelolamenu_model->editDataMenu();
            $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert"><span class="badge badge-pill badge-success">Diubah!</span> Data sukses diubah!! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div> ');
            redirect('menu');
        }
    }

    public function hapus($id)
    {
        $this->Kelolamenu_model->hapusDataMenu($id);
        $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert"><span class="badge badge-pill badge-danger">Dihapus</span> Data sukses dihapus!! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div> ');
        redirect('menu');
    }
}   
