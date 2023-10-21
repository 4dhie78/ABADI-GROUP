<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{

    public function getSubMenu()
    {

        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                 FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
            
            ";
        return $this->db->query($query)->result_array();
    }

    public function ubahSubMenu($id)
    {
        $data = array([
            'id' => $this->input->post('id'),
            'title' => $this->input->post('title'),
            'menu_id' => $this->input->post('menu_id'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
            'is_active' => $this->input->post('is_active')
        ]);
        $this->db->where('id', $id);
        $this->db->update('use_sum_menu', $data);
    }



    public function editRolePejabat($data, $id)
    {

        $this->db->where('id', $id);
        $this->db->update('user', $data);
        return true;
    }
}
