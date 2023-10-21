<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hrd_model extends CI_Model
{
    public function getAllIjazah()
    {
        return $this->db->get('data_ijazah')->result_array();
    }

    public function tambahIjazah()
    {
        $data = [
            'tgl_msk_ijazah' => $this->input->post('tgl_msk_ijazah'),
            'nama' => $this->input->post('nama'),
            'asal_cabang' => $this->input->post('asal_cabang'),
            'tgl_msk_kerja' => $this->input->post('tgl_msk_kerja'),
            'berhenti' => $this->input->post('berhenti'),
            'pendidikan' => $this->input->post('pendidikan'),
            'no_ijazah' => $this->input->post('no_ijazah'),
            'tambahan' => $this->input->post('tambahan'),
            'yg_stor' => $this->input->post('yg_stor'),
           
            'tgl_keluar' => $this->input->post('tgl_keluar'),
            'keterangan' => $this->input->post('keterangan')
        ];

        $this->db->insert('data_ijazah', $data);
    }

    public function hapusIjazah($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('data_ijazah', ['id' => $id]);
    }

    public function getIjazahById($id)
    {
        return $this->db->get_where('data_ijazah', ['id' => $id])->row_array();
    }

    public function ubah()
    {
        $data = [
            'tgl_msk_ijazah' => $this->input->post('tgl_msk_ijazah'),
            'nama' => $this->input->post('nama'),
            'asal_cabang' => $this->input->post('asal_cabang'),
            'tgl_msk_kerja' => $this->input->post('tgl_msk_kerja'),
            'berhenti' => $this->input->post('berhenti'),
            'pendidikan' => $this->input->post('pendidikan'),
            'no_ijazah' => $this->input->post('no_ijazah'),
            'tambahan' => $this->input->post('tambahan'),
            'yg_stor' => $this->input->post('yg_stor'),
            'tgl_keluar' => $this->input->post('tgl_keluar'),
            'keterangan' => $this->input->post('keterangan')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('data_ijazah', $data);
    }

    public function getIjazah($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
            $this->db->or_like('no_ijazah', $keyword);
            $this->db->or_like('tambahan', $keyword);
            $this->db->or_like('asal_cabang', $keyword);
        }

        return $this->db->get('data_ijazah', $limit, $start)->result_array();
    }

    public function countAllNasabah()
    {
        return $this->db->get('data_ijazah')->num_rows();
    }
}
