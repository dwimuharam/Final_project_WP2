<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kelas extends CI_Model
{
    public function daftar_kelas()
    {
        $this->db->select('*');
        $this->db->from('daftarkelas');
        $this->db->where('is_active', 1);

        return $this->db->get()->num_rows();
    }
    public function daftar_member()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_id', 2);
        $this->db->where('is_active', 1);

        return $this->db->get()->num_rows();
    }

    public function daftar_admin()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_id', 1);
        $this->db->where('is_active', 1);

        return $this->db->get()->num_rows();
    }

    public function detail_invoice()
    {
        $this->db->select('*');
        $this->db->from('tb_invoice');
        return $this->db->get()->num_rows();
    }

    public function hapusdata($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        $this->db->delete('daftarkelas');
    }

    public function ambil_id_daftarkelas($id_produk)
    {
        return $this->db->get_where('daftarkelas', ['id_produk' => $id_produk])->row_array();
    }

    public function proses_edit_data()
    {
        $data = [
            "nama_produk" => $this->input->post('nama_produk'),
            "nama_mentor" => $this->input->post('nama_mentor'),
            "is_active" => $this->input->post('is_active'),
            "harga" => $this->input->post('harga'),
            "image" => $this->input->post('image')
        ];
        $this->db->where('id_produk', $this->input->post('id_produk'));
        $this->db->update('daftarkelas', $data);
    }
}
