<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pejabat_model extends CI_Model
{

    public function getAllPejabat()
    {


        return $this->db->get('user')->result_array();
    }

    public function hapusPejabat($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('user', ['id' => $id]);
    }



    public function getPejabatById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }


    public function editPejabat()
    {
        $data = [

            "name" => $this->input->post('name', true),
            "Role_id" => $this->input->post('role_id', true),

        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }
}
