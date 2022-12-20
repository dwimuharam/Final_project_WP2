<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_produk extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('daftarkelas');
    }

    public function find($id_produk)
    {
        $result = $this->db->where('id_produk', $id_produk)
            ->limit(1)
            ->get('daftarkelas');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
}
