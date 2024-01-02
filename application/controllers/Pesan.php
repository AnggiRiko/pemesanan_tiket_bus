<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_pesan'); // Memuat model Model_pesan
    }

    public function index()
    {
        // Menentukan judul halaman
        $data['title'] = 'Halaman Login';

        // Memuat data pesan dari Model_pesan dan data kelas bus dari database
        $data['pesan'] = $this->Model_pesan->data_pesan()->result();
        $data['kelas_bus'] = $this->db->get('kelas_bus')->result();

        // Memuat tampilan
        $this->load->view('layout/header', $data);
        $this->load->view('pesan', $data);
        $this->load->view('layout/footer');
    }

    public function get_harga_tiket()
    {
        // Mendapatkan harga tiket berdasarkan kelas penumpang
        $kelas_penumpang = $this->input->post('kelas_penumpang');
        $data = $this->Model_pesan->getHarga_Tiket($kelas_penumpang);
        echo json_encode($data);
    }

    public function tambah_data()
    {
        // Validasi form
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
            'required' => 'Nama tidak boleh kosong!!']);
        $this->form_validation->set_rules('no_identitas', 'Nomor Identitas', 'required', [
            'required' => 'Nomor identitas tidak boleh kosong!!']);
        $this->form_validation->set_rules('nomor_hp', 'Nomor HP', 'required', [
            'required' => 'Nomor hp tidak boleh kosong!!']);
        $this->form_validation->set_rules('kelas_penumpang', 'Kelas Penumpang', 'required', [
            'required' => 'Kelas Penumpang wajib dipilih!!']);
        $this->form_validation->set_rules('jadwal', 'Jadwal Keberangkatan', 'required', [
            'required' => 'Jadwal wajib dipilih!!']);
        $this->form_validation->set_rules('total', 'Total', 'required', [
            'required' => 'Total wajib ada!!']);

        if ($this->form_validation->run() == false) {
            // Jika validasi gagal, kembali ke halaman pesan dengan pesan error
            $data['title'] = 'Halaman Login';
            $data['pesan'] = $this->Model_pesan->data_pesan()->result();
            $data['kelas_bus'] = $this->db->get('kelas_bus')->result();
            $this->load->view('layout/header', $data);
            $this->load->view('pesan', $data);
            $this->load->view('layout/footer');
        } else {
            // Jika validasi berhasil, simpan data pesan ke database
            $data = array(
                // Mengambil data dari input form
                'nama' => $this->input->post('nama'),
                'no_identitas' => $this->input->post('no_identitas'),
                'nomor_hp' => $this->input->post('nomor_hp'),
                'kelas_penumpang' => $this->input->post('kelas_penumpang'),
                'jadwal' => $this->input->post('jadwal'),
                'jumlah_penumpang' => $this->input->post('jumlah_penumpang'),
                'jumlah_penumpang_lansia' => $this->input->post('jumlah_penumpang_lansia'),
                'harga' => $this->input->post('harga'),
                'total' => $this->input->post('total')
            );

            // Memanggil model untuk menyimpan data
            $this->Model_pesan->tambah($data);

            // Menampilkan pesan sukses dan mengarahkan ke halaman nota
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            Data berhasil disimpan!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('pesan/nota/' . $this->db->insert_id());
        }
    }

    public function nota($pesan_id)
    {
        // Menampilkan halaman nota dengan data pesan berdasarkan ID
        $data['pesan'] = $this->Model_pesan->getPesanById($pesan_id);

        if (!$data['pesan']) {
            show_404(); // Menampilkan error 404 jika data pesan tidak ditemukan
        }

        $this->load->view('nota', $data);
    }
}
