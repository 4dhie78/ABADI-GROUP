<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nasabah_model extends CI_Model
{
    public function getAllNasabah()
    {
        return $this->db->get('data_nasabah')->result_array();
    }

    public function tambahNasabah()
    {
        $data = [
            'name' => $this->input->post('name'),
            'ktp' => $this->input->post('ktp'),
            'alamatktp' => $this->input->post('alamatktp'),
            'cabang' => $this->input->post('cabang'),
            'resort' => $this->input->post('resort'),
	    'simpanan' => $this->input->post('simpanan'),
            'keterangan' => $this->input->post('keterangan')
        ];

        $this->db->insert('data_nasabah', $data);
    }

    public function hapusNasabah($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('data_nasabah', ['id' => $id]);
    }

    public function getNasabahById($id)
    {
        return $this->db->get_where('data_nasabah', ['id' => $id])->row_array();
    }

    public function ubah()
    {
        $data = [
            'name' => $this->input->post('name'),
            'ktp' => $this->input->post('ktp'),
            'alamatktp' => $this->input->post('alamatktp'),
            'cabang' => $this->input->post('cabang'),
            'resort' => $this->input->post('resort'),
	   'simpanan' => $this->input->post('simpanan'),
            'keterangan' => $this->input->post('keterangan')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('data_nasabah', $data);
    }



    public function getNasabah($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('name', $keyword);
            $this->db->or_like('ktp', $keyword);
            $this->db->or_like('cabang', $keyword);
        }

        return $this->db->get('data_nasabah', $limit, $start)->result_array();
    }

    public function countAllNasabah()
    {
        return $this->db->get('data_nasabah')->num_rows();
    }
}
