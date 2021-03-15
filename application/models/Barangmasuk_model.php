<?php

class Barangmasuk_model extends CI_model
{
    public function getBarangMasuk()
    {
        // return $this->db->get('barang_masuk')->result_array();
        $this->db->select('*');
        $this->db->from('barang_masuk');
        $this->db->join('barang', 'barang_masuk.id_barang = barang.id_barang', 'LEFT');
        $this->db->join('distributor', 'barang_masuk.id_distributor = distributor.id_distributor', 'LEFT');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambahBarangMasuk()
    {
        $data = [
            "id_barang_masuk" => $this->input->post('id_barang_masuk', true),
            "tanggal" => $this->input->post('tanggal', true),
            "id_barang" => $this->input->post('id_barang', true),
            // "nama_barang" => $this->input->post('nama_barang', true),
            "id_distributor" => $this->input->post('id_distributor', true),
            // "nama_distributor" => $this->input->post('nama_distributor', true),
            "jumlah_masuk" => $this->input->post('jumlah_masuk', true),
            "harga_modal" => $this->input->post('harga_modal', true),
            "total_biaya_masuk" => $this->input->post('total_biaya_masuk', true)
        ];

        $this->db->insert('barang_masuk', $data);
    }

    public function getBarangMasukById($id_barang_masuk)
    {
        return $this->db->get_where('barang_masuk', ['id_barang_masuk' => $id_barang_masuk])->row_array();
    }

    public function editBarangMasuk()
    {
        $data = [
            "id_barang_masuk" => $this->input->post('id_barang_masuk', true),
            "tanggal" => $this->input->post('tanggal', true),
            "id_barang" => $this->input->post('id_barang', true),
            "id_distributor" => $this->input->post('id_distributor', true),
            "jumlah_masuk" => $this->input->post('jumlah_masuk', true),
            "harga_modal" => $this->input->post('harga_modal', true),
            "total_biaya_masuk" => $this->input->post('total_biaya_masuk', true)
        ];

        $this->db->where('id_barang_masuk', $this->input->post('id_barang_masuk'));
        $this->db->update('barang_masuk', $data);
    }

    public function hapusBarangMasuk($id_barang_masuk)
    {
        $this->db->where('id_barang_masuk', $id_barang_masuk);
        $this->db->delete('barang_masuk');
    }
}
