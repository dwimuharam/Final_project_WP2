<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Home - Graphic Class';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}
