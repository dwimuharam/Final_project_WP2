<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Invoice Member';
        $data['invoice'] = $this->M_invoice->tampil_data();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/invoice', $data);
        $this->load->view('templates/user_footer');
    }

    public function detail($id_invoice)
    {
        $data['judul'] = 'Detail Invoice';
        $data['invoice'] = $this->M_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->M_invoice->ambil_id_pesanan($id_invoice);
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/detail_invoice', $data);
        $this->load->view('templates/user_footer');
    }
}
