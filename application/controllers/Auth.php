<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('user');
        }

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Login';

            $this->load->view('auth/header');
            $this->load->view('auth/login', $data);
            $this->load->view('auth/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('kelolauser');
                    } else {
                        redirect('kelolabarangmasuk');
                    }
                } else {
                    $this->session->set_flashdata('flash', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Password salah! </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('flash', ' tidak aktif!');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('flash', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Akun tidak ada! </div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('username')) {
            redirect('user');
        }

        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]');
        $this->form_validation->set_rules('nama_user', 'Nama', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {

            $data['judul'] = 'Halaman Registrasi';

            $this->load->view('auth/header');
            $this->load->view('auth/registration', $data);
            $this->load->view('auth/footer');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                // 'password' => $this->input->post('password'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil registrasi </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('flash', '<div class="alert alert-warning" role="alert">Anda telah keluar</div>');
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/404');
    }
}
