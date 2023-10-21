<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan_model extends CI_Model
{
    public function getAllKaryawan()
    {
        return $this->db->get('data_karyawan')->result_array();
    }

    public function tambahKaryawan()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'tanggal_masuk' => $this->input->post('tanggal_masuk'),
            'nik' => $this->input->post('nik'),
            'jabatan' => $this->input->post('jabatan'),
            'cabang' => $this->input->post('cabang'),
            'keterangan' => $this->input->post('keterangan')
        ];

        $this->db->insert('data_karyawan', $data);
    }

    public function hapusKaryawan($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('data_karyawan', ['id' => $id]);
    }

    public function getKaryawanById($id)
    {
        return $this->db->get_where('data_karyawan', ['id' => $id])->row_array();
    }

    public function ubah()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'tanggal_masuk' => $this->input->post('tanggal_masuk'),
            'nik' => $this->input->post('nik'),
            'jabatan' => $this->input->post('jabatan'),
            'cabang' => $this->input->post('cabang'),
            'keterangan' => $this->input->post('keterangan')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('data_karyawan', $data);
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

    public function countAllNasabah()
    {
        return $this->db->get('data_nasabah')->num_rows();
    }
}
