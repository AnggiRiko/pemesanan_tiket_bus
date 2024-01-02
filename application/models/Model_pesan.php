<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_pesan extends CI_Model
{
    public function data_pesan()
    {
        // Mengambil data pesan dari database, termasuk kelas bus yang di-join
        $this->db->join('kelas_bus', 'pesan.kelas_penumpang = kelas_bus.kelas_penumpang', 'left');
        return $this->db->get('pesan');
    }

    public function getHarga_Tiket($kelas_penumpang)
    {
        // Mengambil harga tiket berdasarkan kelas penumpang
        $this->db->where('kelas_penumpang', $kelas_penumpang);
        return $this->db->get('kelas_bus')->row_array();
    }

    public function tambah($data)
    {
        // Menambahkan data pesan ke database
        $this->db->insert('pesan', $data);
    }

    public function getPesanById($pesan_id)
    {
        // Mengambil data pesan berdasarkan ID
        return $this->db->get_where('pesan', ['id' => $pesan_id])->row_array();
    }
}
