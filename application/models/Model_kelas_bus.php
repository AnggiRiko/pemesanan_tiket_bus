<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kelas_bus extends CI_Model
{
    public function data_kelas_bus()
    {
        return  $this->db->get('kelas_bus');

    }
}