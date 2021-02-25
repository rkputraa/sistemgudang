<?php

class Kelolabarang_model extends CI_model
{
    public function getBarang()
    {
        // return $this->db->get('barang')->result_array();
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('distributor', 'barang.id_distributor = distributor.id_distributor');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambahDataBarang()
    {
        $data = [
            "id_barang" => $this->input->post('id_barang', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "id_distributor" => $this->input->post('id_distributor', true),
            "harga_modal" => $this->input->post('harga_modal', true),
            "harga_jual" => $this->input->post('harga_jual', true)
        ];

        $this->db->insert('barang', $data);
    }

    public function hapusDataBarang($id_barang)
    {
        $this->db->where('id_barang', $id_barang);
        $this->db->delete('barang');
    }

    public function getBarangById($id_barang)
    {
        return $this->db->get_where('barang', ['id_barang' => $id_barang])->row_array();
        // $this->db->select('*');
        // $this->db->from('barang');
        // $this->db->join('distributor', 'barang.id_distributor = distributor.id_distributor');

        // $this->db->where('id_barang', $id_barang);
        // $query = $this->db->get();
        // return $query->result_array();
    }

    public function editDataBarang()
    {
        $data = [
            "id_barang" => $this->input->post('id_barang', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "id_distributor" => $this->input->post('id_distributor', true),
            "harga_modal" => $this->input->post('harga_modal', true),
            "harga_jual" => $this->input->post('harga_jual', true)
        ];

        $this->db->where('id_barang', $this->input->post('id_barang'));
        $this->db->update('barang', $data);
    }

    public function cariDataBarang()
    {
        // $this->db->select('*');
        // $this->db->from('barang');
        // $this->db->join('distributor', 'barang.id_distributor = distributor.id_distributor');

        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_barang', $keyword);
        $this->db->or_like('nama_barang', $keyword);
        $this->db->or_like('id_distributor', $keyword);
        // $this->db->or_like('nama_distributor', $keyword);
        $this->db->or_like('harga_modal', $keyword);
        $this->db->or_like('harga_jual', $keyword);
        return $this->db->get('barang')->result_array();
    }
}
