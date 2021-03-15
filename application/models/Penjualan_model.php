<?php

class Penjualan_model extends CI_model
{
    public function getPenjualan()
    {
        $this->db->select('*');
        $this->db->from('penjualan');
        $this->db->join('barang', 'penjualan.id_barang = barang.id_barang', 'LEFT');
        $this->db->join('distributor', 'penjualan.id_distributor = distributor.id_distributor', 'LEFT');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambahPenjualan()
    {
        $data = [
            "id_penjualan" => $this->input->post('id_penjualan', true),
            "id_barang" => $this->input->post('id_barang', true),
            "id_distributor" => $this->input->post('id_distributor', true),
            "harga_jual" => $this->input->post('harga_jual', true),
            "jumlah_terjual" => $this->input->post('jumlah_terjual', true),
            "pendapatan" => $this->input->post('pendapatan', true)
        ];

        $this->db->insert('penjualan', $data);
    }

    public function getPenjualanById($id_penjualan)
    {
        return $this->db->get_where('penjualan', ['id_penjualan' => $id_penjualan])->row_array();
    }

    public function editPenjualan()
    {
        $data = [
            "id_penjualan" => $this->input->post('id_penjualan', true),
            "id_barang" => $this->input->post('id_barang', true),
            "id_distributor" => $this->input->post('id_distributor', true),
            "harga_jual" => $this->input->post('harga_jual', true),
            "jumlah_terjual" => $this->input->post('jumlah_terjual', true),
            "pendapatan" => $this->input->post('pendapatan', true)
        ];

        $this->db->where('id_penjualan', $this->input->post('id_penjualan'));
        $this->db->update('penjualan', $data);
    }

    public function hapusPenjualan($id_penjualan)
    {
        $this->db->where('id_penjualan', $id_penjualan);
        $this->db->delete('penjualan');
    }
}
