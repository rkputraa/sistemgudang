<?php

class Barangkeluar_model extends CI_model
{
    public function getBarangKeluar()
    {
        $this->db->select('*');
        $this->db->from('barang_keluar');
        $this->db->join('barang', 'barang_keluar.id_barang = barang.id_barang', 'LEFT');
        $this->db->join('distributor', 'barang_keluar.id_distributor = distributor.id_distributor', 'LEFT');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambahBarangKeluar()
    {
        $data = [
            "id_barang_keluar" => $this->input->post('id_barang_keluar', true),
            "tanggal" => $this->input->post('tanggal', true),
            "id_barang" => $this->input->post('id_barang', true),
            // "nama_barang" => $this->input->post('nama_barang', true),
            "id_distributor" => $this->input->post('id_distributor', true),
            // "nama_distributor" => $this->input->post('nama_distributor', true),
            "jumlah_keluar" => $this->input->post('jumlah_keluar', true),
            "harga_modal" => $this->input->post('harga_modal', true),
            "total_biaya_keluar" => $this->input->post('total_biaya_keluar', true)
        ];

        $this->db->insert('barang_keluar', $data);
    }

    public function getBarangKeluarById($id_barang_keluar)
    {
        return $this->db->get_where('barang_keluar', ['id_barang_keluar' => $id_barang_keluar])->row_array();
    }

    public function editBarangKeluar()
    {
        $data = [
            "id_barang_keluar" => $this->input->post('id_barang_keluar', true),
            "tanggal" => $this->input->post('tanggal', true),
            "id_barang" => $this->input->post('id_barang', true),
            "id_distributor" => $this->input->post('id_distributor', true),
            "jumlah_keluar" => $this->input->post('jumlah_keluar', true),
            "harga_modal" => $this->input->post('harga_modal', true),
            "total_biaya_keluar" => $this->input->post('total_biaya_keluar', true)
        ];

        $this->db->where('id_barang_keluar', $this->input->post('id_barang_keluar'));
        $this->db->update('barang_keluar', $data);
    }

    public function hapusBarangKeluar($id_barang_keluar)
    {
        $this->db->where('id_barang_keluar', $id_barang_keluar);
        $this->db->delete('barang_keluar');
    }
}
