<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    public function index()
    {
        $data['produk'] = $this->M_produk->tampil_data()->result();
        $data['judul'] = 'Katalog Kelas';
        $this->load->view('templates/header', $data);
        $this->load->view('kelas/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_ke_keranjang($id_produk)
    {
        $produk = $this->M_produk->find($id_produk);
        $data = array(
            'id' => $produk->id_produk,
            'qty' => 1,
            'price' => $produk->harga,
            'name' => $produk->nama_produk,
        );
        $this->cart->insert($data);
        redirect('kelas');
    }

    public function detail_keranjang()
    {
        $data['judul'] = 'Detail Keranjang';
        $this->load->view('templates/header', $data);
        $this->load->view('keranjang/keranjang', $data);
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('kelas');
    }

    public function pembayaran()
    {
        $data['judul'] = 'Detail Keranjang';
        $this->load->view('templates/header', $data);
        $this->load->view('keranjang/pembayaran', $data);
        $this->load->view('templates/footer');
    }

    public function proses_pembayaran()
    {
        $is_processed = $this->M_invoice->index();
        if ($is_processed) {
            $this->cart->destroy();
            $data['judul'] = 'Proses Pembayaran';
            $this->load->view('templates/header', $data);
            $this->load->view('keranjang/proses_pembayaran', $data);
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, Pembayaran Anda Gagal diproses!";
        }
    }
}
