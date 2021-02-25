<?php

class Kelolaunitusaha_model extends CI_model
{
    public function getUnitUsaha()
    {
        return $this->db->get('unit_usaha')->result_array();
    }

    public function tambahDataUnitUsaha()
    {
        $data = [
            "id_unit" => $this->input->post('id_unit', true),
            "nama_unit" => $this->input->post('nama_unit', true),
            "alamat_unit" => $this->input->post('alamat_unit', true),
            "kontak_unit" => $this->input->post('kontak_unit', true),
        ];

        $this->db->insert('unit_usaha', $data);
    }

    public function getUnitById($id_unit)
    {
        return $this->db->get_where('unit_usaha', ['id_unit' => $id_unit])->row_array();
    }

    public function editDataUnitUsaha()
    {
        $data = [
            "id_unit" => $this->input->post('id_unit', true),
            "nama_unit" => $this->input->post('nama_unit', true),
            "alamat_unit" => $this->input->post('alamat_unit', true),
            "kontak_unit" => $this->input->post('kontak_unit', true),
        ];

        $this->db->where('id_unit', $this->input->post('id_unit'));
        $this->db->update('unit_usaha', $data);
    }

    public function hapusDataUnitUsaha($id_unit)
    {
        $this->db->where('id_unit', $id_unit);
        $this->db->delete('unit_usaha');
    }

    public function cariDataUnitUsaha()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_unit', $keyword);
        $this->db->or_like('nama_unit', $keyword);
        $this->db->or_like('alamat_unit', $keyword);
        $this->db->or_like('kontak_unit', $keyword);
        return $this->db->get('unit_usaha')->result_array();
    }
}
