<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftarkelas extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Kelas Tersedia';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['dftrkelas'] = $this->db->get('daftarkelas')->result_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('daftarkelas/index', $data);
        $this->load->view('templates/user_footer');
    }

    public function addkelas()
    {
        $data['judul'] = 'Tambahkan Kelas Baru';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('nama_produk', 'Produk', 'required');
        $this->form_validation->set_rules('nama_mentor', 'Mentor', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('image', 'Image', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('daftarkelas/addkelas', $data);
            $this->load->view('templates/user_footer');
        } else {
            $data = [
                'nama_produk' => $this->input->post('nama_produk'),
                'nama_mentor' => $this->input->post('nama_mentor'),
                'harga' => $this->input->post('harga'),
                'image' => $this->input->post('image'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('daftarkelas', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas Berhasil Ditambahkan!</div>');
            redirect('daftarkelas');
        }
    }

    public function hapusdata($id_produk)
    {
        $this->M_kelas->hapusdata($id_produk);
        redirect('daftarkelas');
    }

    public function edit_data($id_produk)
    {
        $data['daftarkelas'] = $this->M_kelas->ambil_id_daftarkelas($id_produk);
        $data['judul'] = 'Edit Kelas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('daftarkelas/edit_data', $data);
        $this->load->view('templates/user_footer');
    }

    public function proses_edit_data($id_produk)
    {
        $this->M_kelas->proses_edit_data($id_produk);
        redirect('daftarkelas');
    }
}
