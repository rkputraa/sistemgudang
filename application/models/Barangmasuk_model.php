<?php

class Barangmasuk_model extends CI_model
{
    public function get_data()
    {
        return $this->db->get('barang')->result_array();
    }
}
