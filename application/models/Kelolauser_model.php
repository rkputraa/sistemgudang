<?php

class Kelolauser_model extends CI_model
{
    // public function get_data()
    // {
    //     return $this->db->get('user')->result_array();
    // }

    public function getUser()
    {
        return $this->db->get('user')->result_array();
        // $this->db->select('*');
        // $this->db->from('barang');
        // $this->db->join('distributor', 'barang.id_distributor = distributor.id_distributor');
        // $query = $this->db->get();
        // return $query->result_array();
    }

    public function tambahDataUser()
    {
        $data = [
            "id_user" => $this->input->post('id_user', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "nama_user" => $this->input->post('nama_user', true),
        ];

        $this->db->insert('user', $data);
    }

    public function hapusDataUser($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
    }

    public function getUserById($id_user)
    {
        return $this->db->get_where('user', ['id_user' => $id_user])->row_array();
        // $this->db->select('*');
        // $this->db->from('barang');
        // $this->db->join('distributor', 'barang.id_distributor = distributor.id_distributor');

        // $this->db->where('id_barang', $id_barang);
        // $query = $this->db->get();
        // return $query->result_array();
    }

    public function editDataUser()
    {
        $data = [
            "id_user" => $this->input->post('id_user', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "nama_user" => $this->input->post('nama_user', true),
        ];

        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('user', $data);
    }

    public function cariDataUser()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('username', $keyword);
        $this->db->or_like('id_user', $keyword);
        $this->db->or_like('nama_user', $keyword);
        return $this->db->get('user')->result_array();
    }
}
