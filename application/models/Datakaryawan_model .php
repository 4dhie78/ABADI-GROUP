<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datakaryawan_model extends CI_Model
{
    public function getAllKaryawan()
    {
        return $this->db->get('data_karyawan')->result_array();
    }
    public function getKaryawan($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
            $this->db->or_like('nik', $keyword);
            $this->db->or_like('jabatan', $keyword);
            $this->db->or_like('cabang', $keyword);
        }

        return $this->db->get('data_karyawan', $limit, $start)->result_array();
    }
}
