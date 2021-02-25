<?php

class Barangmasuk_model extends CI_model
{
    public function get_data()
    {
        return $this->db->get('barang_masuk')->result_array();
    }

    public function tambahBarangMasuk()
    {
        $data = [
            "tanggal" => $this->input->post('tanggal', true),
            "id_barang" => $this->input->post('id_barang', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "id_distributor" => $this->input->post('id_distributor', true),
            "jumlah_masuk" => $this->input->post('jumlah_masuk', true),
            "harga_modal" => $this->input->post('harga_modal', true),
            "total_biaya_masuk" => $this->input->post('total_biaya_masuk', true),
            "total_jumlah_item" => $this->input->post('total_jumlah_item', true),
        ];
        $this->db->insert('barang_masuk', $data);
    }
}
