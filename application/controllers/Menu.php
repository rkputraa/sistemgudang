<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // helper
        is_logged_in();

        // load model
        $this->load->model('Kelolamenu_model');

        // load form_validation
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

    // ---------------   SUBMENU  ---------------

    public function submenu()
    {
        $data['judul'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['subMenu'] = $this->Kelolamenu_model->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/left', $data);
        $this->load->view('templates/right');
        $this->load->view('menu/submenu', $data);
        $this->load->view('templates/footer');
    }

    public function tambahsub()
    {
        $data['judul'] = 'Manajemen Submenu';

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['subMenu'] = $this->Kelolamenu_model->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/left', $data);
            $this->load->view('templates/right');
            $this->load->view('menu/tambahsub', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert"><span class="badge badge-pill badge-success">Selesai</span> Data sukses ditambahkan!! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div> ');
            redirect('menu/submenu');
        }
    }

    public function editsub($id)
    {
        $data['judul'] = 'Edit Submenu';
        $data['subMenu'] = $this->Kelolamenu_model->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['submenuid'] = $this->Kelolamenu_model->getSubmenuById($id);

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/left', $data);
            $this->load->view('templates/right');
            $this->load->view('menu/editsub');
            $this->load->view('templates/footer');
        } else {
            $this->Kelolamenu_model->editSubmenu();
            $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert"><span class="badge badge-pill badge-success">Diubah!</span> Data sukses diubah!! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div> ');
            redirect('menu/submenu');
        }
    }

    public function hapussub($id)
    {
        $this->Kelolamenu_model->hapusSubmenu($id);
        $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert"><span class="badge badge-pill badge-danger">Dihapus</span> Data sukses dihapus!! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div> ');
        redirect('menu/submenu');
    }
}
