<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        // Judul halaman
        $data['title'] = 'Home';

        // Memuat data dari Model_kelas_bus dan menyimpannya dalam variabel data
        $data['kelas_bus'] = $this->Model_kelas_bus->data_kelas_bus()->result();

        // Memuat tampilan header, home(content), footer
        $this->load->view('layout/header', $data);
        $this->load->view('home', $data);
        $this->load->view('layout/footer');
    }
}
