<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['daftar_kelas'] = $this->M_kelas->daftar_kelas();
        $data['daftar_member'] = $this->M_kelas->daftar_member();
        $data['daftar_admin'] = $this->M_kelas->daftar_admin();
        $data['detail_invoice'] = $this->M_kelas->detail_invoice();

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/user_footer');
    }
}
