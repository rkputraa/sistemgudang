<?php

class Keloladistributor_model extends CI_model
{
    public function getDistributor()
    {
        return $this->db->get('distributor')->result_array();
        // $this->db->select('*');
        // $this->db->from('distributor');
        // $this->db->join('barang', 'distributor.id_distributor = barang.id_distributor');
        // $query = $this->db->get();
        // return $query->result_array();
    }

    public function tambahDataDistributor()
    {
        $data = [
            "id_distributor" => $this->input->post('id_distributor', true),
            "nama_distributor" => $this->input->post('nama_distributor', true),
            "alamat_distributor" => $this->input->post('alamat_distributor', true),
            "kontak_distributor" => $this->input->post('kontak_distributor', true),
            "ordering_cost" => $this->input->post('ordering_cost', true),
            "lead_time" => $this->input->post('lead_time', true),
        ];

        $this->db->insert('distributor', $data);
    }

    public function hapusDataDistributor($id_distributor)
    {
        $this->db->where('id_distributor', $id_distributor);
        $this->db->delete('distributor');
    }

    public function getDistributorById($id_distributor)
    {
        return $this->db->get_where('distributor', ['id_distributor' => $id_distributor])->row_array();
        // $this->db->select('*');
        // $this->db->from('barang');
        // $this->db->join('distributor', 'barang.id_distributor = distributor.id_distributor');

        // $this->db->where('id_barang', $id_barang);
        // $query = $this->db->get();
        // return $query->result_array();
    }

    public function editDataDistributor()
    {
        $data = [
            "id_distributor" => $this->input->post('id_distributor', true),
            "nama_distributor" => $this->input->post('nama_distributor', true),
            "alamat_distributor" => $this->input->post('alamat_distributor', true),
            "kontak_distributor" => $this->input->post('kontak_distributor', true),
            "ordering_cost" => $this->input->post('ordering_cost', true),
            "lead_time" => $this->input->post('lead_time', true),
        ];

        $this->db->where('id_distributor', $this->input->post('id_distributor'));
        $this->db->update('distributor', $data);
    }




    public function cariDataDistributor()
    {
        // $this->db->select('*');
        // $this->db->from('barang');
        // $this->db->join('distributor', 'barang.id_distributor = distributor.id_distributor');

        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_distributor', $keyword);
        $this->db->or_like('nama_distributor', $keyword);
        $this->db->or_like('alamat_distributor', $keyword);
        $this->db->or_like('kontak_distributor', $keyword);
        $this->db->or_like('ordering_cost', $keyword);
        $this->db->or_like('lead_time', $keyword);

        return $this->db->get('distributor')->result_array();
    }
}
