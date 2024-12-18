<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {

        $data['title'] = 'Menu management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();
        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Menu added!
          </div>');
            redirect('menu');
        }
    }

    public function subMenu()
    {
        $data['title'] = 'Submenu management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');


        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Menu', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() == false) {


            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil di Tambah!
          </div>');
            redirect('menu/submenu');
        }
    }
    public function hapusSubMenu($id)
    {

        $this->db->delete('user_sub_menu', array('id' => $id));

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil Di hapus!
          </div>');
        redirect('menu/submenu');
    }

    public function hapusMenu($id)
    {

        $this->db->delete('user_menu', array('id' => $id));

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Menu Berhasil Di Hapus!
          </div>');
        redirect('menu');
    }

    public function ubahSubMenu()
    {
        $id = $this->input->post('id');
        $where = array('id' => $id);

        $item = $this->db->get_where('user_sub_menu', $where)->row_array();
        echo json_encode($item);
    }
    public function ubah()
    {
        $data = [

            'title' => $this->input->post('title'),
            'menu_id' => $this->input->post('menu_id'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
            'is_active' => $this->input->post('is_active')
        ];
        $id = $this->input->post('id');
        $this->db->where('id', $id);

        $this->db->update('user_sub_menu', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Menu Berhasil Di ubah!
      </div>');

        redirect('menu/submenu');
    }
}
